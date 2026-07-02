// button click event 

const btn = document.getElementById("btn");
btn.addEventListener("click", () => {
  alert("button clicked");
});

// input event 
const input = document.getElementById("nameInput");
input.addEventListener("input", () => {
  console.log("input", input.value);
});

// counter project 
let count = 0;
const counter = document.getElementById("counter");
const incButton = document.getElementById("incBtn");
incButton.addEventListener("click", () => {
  count++;
  counter.textContent = count;
})


// keyboard event 
document.addEventListener("keydown", (event) => {
  console.log("key press", event.key);
})


// mouse event

btn.addEventListener("mouseover", () => {
    console.log("Mouse Entered Button");
});

btn.addEventListener("mouseout", () => {
    console.log("Mouse Left Button");
});