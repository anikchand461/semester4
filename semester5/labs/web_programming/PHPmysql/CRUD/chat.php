<?php

session_start();

require "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}

if (!isset($_GET["user_id"])) {
    header("Location: dashboard.php");
    exit();
}

$receiver_id = (int) $_GET["user_id"];


// Get the receiver's information

$sql = "SELECT username, last_seen
        FROM users
        WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $receiver_id);
$stmt->execute();

$result = $stmt->get_result();

$receiver = $result->fetch_assoc();


// Check if receiver exists

if (!$receiver) {
    header("Location: dashboard.php");
    exit();
}


// Check online status

$isOnline =
    $receiver["last_seen"] !== null &&
    strtotime($receiver["last_seen"]) >= time() - 10;


// Get messages between these two users

$current_user_id = $_SESSION["user_id"];

$sql = "SELECT *
        FROM messages
        WHERE
        (sender_id = ? AND receiver_id = ?)
        OR
        (sender_id = ? AND receiver_id = ?)
        ORDER BY created_at ASC";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "iiii",
    $current_user_id,
    $receiver_id,
    $receiver_id,
    $current_user_id
);

$stmt->execute();

$messages = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    >

    <title>
        Chat with <?php echo htmlspecialchars($receiver["username"]); ?>
    </title>

    <link rel="stylesheet" href="style.css?v=3">

</head>

<body>

    <div class="chat-page">


        <!-- HEADER -->

        <header class="chat-header">

            <a
                href="dashboard.php"
                class="back-button"
                aria-label="Go back"
            >
                ←
            </a>


            <div class="avatar">

                <?php
                echo strtoupper(
                    substr($receiver["username"], 0, 1)
                );
                ?>

            </div>


            <div class="user-info">

                <h2>
                    <?php
                    echo htmlspecialchars(
                        $receiver["username"]
                    );
                    ?>
                </h2>


                <span class="online-status <?php echo $isOnline ? 'online' : 'offline'; ?>">
                    <?php echo $isOnline ? "Online" : "Offline"; ?>
                </span>

            </div>

        </header>



        <!-- MESSAGES -->

        <main
            id="messages"
            class="messages"

            data-receiver-id="<?php echo $receiver_id; ?>"

            data-current-user-id="<?php echo $_SESSION["user_id"]; ?>"
        >

            <?php while ($message = $messages->fetch_assoc()) { ?>

                <?php

                $isMine =
                    $message["sender_id"]
                    == $_SESSION["user_id"];

                ?>

                <div
                    class="message-row <?php echo $isMine ? "mine" : "theirs"; ?>"
                >

                    <div class="message-bubble">

                        <?php
                        echo htmlspecialchars(
                            $message["message"]
                        );
                        ?>

                    </div>

                </div>

            <?php } ?>

        </main>



        <!-- MESSAGE INPUT -->

        <form
            method="POST"
            action="send-message.php"
            class="message-form"
            id="message-form"
        >

            <input
                type="hidden"
                name="receiver_id"
                value="<?php echo $receiver_id; ?>"
            >


            <input
                type="text"
                name="message"
                id="message-input"
                class="message-input"
                placeholder="Type a message..."
                autocomplete="off"
                autofocus
                required
            >


            <button
                type="submit"
                class="send-button"
                aria-label="Send message"
            >
                ➤
            </button>

        </form>

    </div>


    <script src="script.js?v=2"></script>

</body>

</html>