
const paginationPrevButton = document.getElementById("pagination__prev-button");
const paginationNextButton = document.getElementById("pagination__next-button");
const buttons = document.getElementsByClassName("button");
let activePosition = null;

for (let i = 0; i < buttons.length; i++) {
  if (i === 1) {
    buttons[i].classList.add("button_active");
  }

  const isActive = buttons[i].classList.contains("button_active");

  isActive ? (activePosition = i) : 0;

  // add events to the buttons
  if (buttons[i] === paginationPrevButton) {
    buttons[i].onclick = prevElement;
  } else if (buttons[i] === paginationNextButton) {
    buttons[i].onclick = nextElement;
  } else {
    buttons[i].onclick = directElement;
  }
}

function prevElement() {
  if (activePosition <= 1) {
    return;
  }

  buttons[activePosition].classList.remove("button_active");
  activePosition--;
  buttons[activePosition].classList.add("button_active");
}

function nextElement() {
  if (activePosition >= buttons.length - 2) {
    return;
  }

  buttons[activePosition].classList.remove("button_active");
  activePosition++;
  buttons[activePosition].classList.add("button_active");
}

function directElement(e) {
  buttons[activePosition].classList.remove("button_active");
  activePosition = Number(e.currentTarget.textContent);
  e.currentTarget.classList.add("button_active");
}
