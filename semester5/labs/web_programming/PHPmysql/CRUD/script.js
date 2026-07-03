function sendHeartbeat() {
    fetch("heartbeat.php");
}

sendHeartbeat();
setInterval(sendHeartbeat, 5000);


const messagesBox = document.getElementById("messages");
const messageInput = document.querySelector(".message-input");

const receiverId = messagesBox.dataset.receiverId;

const messageForm = document.querySelector(".message-form");

messageForm.addEventListener("submit", async function (event) {
    event.preventDefault();

    const message = messageInput.value.trim();

    if (message === "") return;

    const formData = new FormData(messageForm);

    try {
        await fetch("send-message.php", {
            method: "POST",
            body: formData
        });

        messageInput.value = "";

        await loadMessages();

        messagesBox.scrollTop = messagesBox.scrollHeight;

        messageInput.focus();

    } catch (error) {
        console.error("Error sending message:", error);
    }
});

function scrollToBottom() {
    messagesBox.scrollTop = messagesBox.scrollHeight;
}


let lastMessagesHTML = "";

function loadMessages() {
    return fetch(`fetch-messages.php?receiver_id=${receiverId}`)
        .then(response => response.text())
        .then(data => {

            if (data !== lastMessagesHTML) {

                messagesBox.innerHTML = data;
                lastMessagesHTML = data;

                scrollToBottom();
            }
        });
}


loadMessages();

setInterval(loadMessages, 1000);


/* Keep typing focus */

document.addEventListener("keydown", function (event) {

    if (
        document.activeElement !== messageInput &&
        !event.metaKey &&
        !event.ctrlKey &&
        !event.altKey
    ) {
        messageInput.focus();
    }

});


const onlineStatus = document.querySelector(".online-status");

function checkUserStatus() {

    if (!onlineStatus || !receiverId) {
        return;
    }

    fetch(`user-status.php?user_id=${receiverId}`)
        .then(response => response.text())
        .then(status => {

            status = status.trim();

            if (status === "online") {

                onlineStatus.textContent = "Online";

                onlineStatus.classList.add("online");
                onlineStatus.classList.remove("offline");

            } else {

                onlineStatus.textContent = "Offline";

                onlineStatus.classList.add("offline");
                onlineStatus.classList.remove("online");

            }

        });

}

checkUserStatus();

setInterval(checkUserStatus, 3000);