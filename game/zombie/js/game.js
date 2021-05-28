var placeLetterInterval = 500;
var placeLetterTimer, moveLettersTimer;
var startButton, resetButton;
var box, message, score;
window.onkeydown = (e) => {
    return e.keyCode != 32;
}
function placeLetter() {
    var letter = String.fromCharCode(97 + Math.floor(Math.random() * 26));
    var newLetter = document.createElement("div");
    newLetter.innerHTML = letter;
    newLetter.className = "zombie";
    newLetter.classList.add(letter);
    // console.log(newLetter);

    newLetter.style.top = Math.random() * 300 + "px";
    newLetter.style.right = 1000 - (Math.random() * 400) + "px";
    //newLetter.style.right = 1000 - 400 + "px";

    box.appendChild(newLetter);
}

function moveLetters() {
    var boxes = document.querySelectorAll("#box > div");
    for (var i = 0; i < boxes.length; i++) {
        if (boxes[i].className != "die") boxes[i].style.right = parseInt(boxes[i].style.right) - 10 + "px";
        if (parseInt(boxes[i].style.right) <= -10) {
            endGame();
        }
    }
}

function decreaseLetterSpeed(score) {
    if (parseInt(score.innerHTML) % 20 === 0) {
        window.clearInterval(placeLetterTimer);
        placeLetterInterval = placeLetterInterval * 1.1
        placeLetterTimer = setInterval(placeLetter, placeLetterInterval)
    }
}
function endGame() {
    window.clearInterval(moveLettersTimer);
    window.clearInterval(placeLetterTimer);
    document.removeEventListener('keydown', keyboardInput);
    message.classList.remove("hidden");
    resetButton.classList.remove("disabled")
}
function startGame() {
    placeLetterTimer = setInterval(placeLetter, 500);
    moveLettersTimer = setInterval(moveLetters, 100);
    document.addEventListener('keydown', keyboardInput);
    startButton.classList.add("disabled");
}

function resetGame() {
    message.classList.add("hidden");
    resetButton.classList.add("disabled")
    score.innerHTML = 0;
    window.clearInterval(moveLettersTimer);
    window.clearInterval(placeLetterTimer);
    var boxes = document.querySelectorAll("#box > div");
    for (var i = 0; i < boxes.length; i++) {
        boxes[i].remove();
    }

    startGame();
}

function keyboardInput() {
    if (event.keyCode != 32) {
        if (event.keyCode === 27) {
            return endGame();
        };
        var key = String.fromCharCode(event.keyCode).toLowerCase();
        var boxes = document.getElementsByClassName(key);
        //console.log(boxes);

        if (boxes[0]) {
            boxes[0].classList.add("die");
            boxes[0].classList.remove("zombie");
            boxes[0].classList.remove(key);
            score.innerHTML = parseInt(score.innerHTML) + 1;
            decreaseLetterSpeed(score);
        } else {
            score.innerHTML = parseInt(score.innerHTML) - 1;
        }
    }

}

document.addEventListener("DOMContentLoaded", function (event) {

    message = document.getElementById('message');
    box = document.getElementById('box');
    score = document.getElementById("score");

    startButton = document.getElementById('start')
    startButton.onclick = startGame;

    resetButton = document.getElementById('reset')
    resetButton.onclick = resetGame;
});