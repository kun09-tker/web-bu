var beepOne = new Audio();
beepOne.src = "../public/press.mp3";
img = document.querySelector(".content__img")
let a = document.querySelector("#lesson").textContent;
let numberLesson = document.querySelector('#numberLesson');
let none = document.querySelectorAll(".none");
if (numberLesson.textContent <= 33) {
    none[0].classList.add('active');
    none[0].classList.remove('none');
    none[1].classList.add('none');
    none[1].classList.remove('active');
} else {
    none[1].classList.add('active');
    none[1].classList.remove('none');
    none[0].classList.add('none');
    none[0].classList.remove('active');
}

let count = 0;
let start = 0;
let end = 0;
let index = 0;
let train = "";
let rand = "";
let i = 0;
let wrong = 1;
let numberOfitem = a.length;


for (let i = 0; i <= 2; i++) {
    rand += a[Math.floor(Math.random() * numberOfitem)];
}
rand += " ";


for (let i = 0; i < rand.length; i++) {
    if (rand[i] == " ") train += `<span class="span">&nbsp</span>`;
    else train += `<span class="span">${rand[i]}</span>`;
}


img.src = "../public/typing/" + rand.charCodeAt(0) + ".png";
document.querySelector(".content__text").innerHTML = train
const text = document.querySelectorAll('.span');
text[0].classList.add('focus');
text[0].classList.remove('span');
window.addEventListener('keydown', (event) => {
    beepOne.play();
})
window.addEventListener('resize', () => {
    location.reload();
});

// Time 
let hours = 0;
let minutes = 0;
let seconds = 0;
let displayHours = 0;
let displayMinutes = 0;
let displaySeconds = 0;
let interval = null;
let stopWatch = () => {
    seconds++;
    if (seconds / 60 === 1) {
        seconds = 0;
        minutes++;
        if (minutes / 60 == 1) {
            minutes = 0;
            hours++;
        }
    }
    if (seconds < 10) {
        displaySeconds = "0" + seconds.toString();
    }
    else {
        displaySeconds = seconds;
    }
    if (minutes < 10) {
        displayMinutes = "0" + minutes.toString();
    }
    else {
        displayMinutes = minutes;
    }
    if (hours < 10) {
        displayHours = "0" + hours.toString();
    }
    else {
        displayHours = hours;
    }
    document.querySelector('.timerInfo').innerHTML = displayHours + ":" + displayMinutes + ":" + displaySeconds;
}

window.addEventListener('keypress', (event) => {
    count++;
    if (count == 1) interval = window.setInterval(stopWatch, 1000);
    //console.log(i + " " + text.length);

    document.querySelector("#shap").classList.add("shap");
    document.querySelector("#shap").classList.remove("shap-er");
    if (rand[i] == event.key[0]) {
        if (i >= text.length - 2) {
            animation();
            window.clearInterval(interval);
            //alert("Dasd");
            JQuery.ajax({
                url: 'http://localhost/web-bu/php/training.php',
                type: 'post',
                data: {
                    lesson: numberLesson,
                },
                success: function (data) {
                    console.log(data);
                }
            });
        }
        start = text[i].offsetTop;
        end = text[i + 1].offsetTop;
        if (start != end) {
            for (let j = index; j <= i; j++) {
                text[j].remove();
            }
            index = i + 1;
        }
        text[i].classList.add('correct');
        text[i].classList.remove('wrong');
        ++i;
        text[i].classList.add('focus');
        text[i].classList.remove('span');
        //console.log(event.key.charCodeAt(0));

        img.src = "../public/typing/" + rand.charCodeAt(i) + ".png";
    } else {
        text[i].classList.add('wrong');
        document.querySelector("#shap").classList.add("shap-er");
        document.querySelector("#shap").classList.remove("shap");

        document.querySelector(".erro").innerHTML = "Số lần gõ sai: " + wrong;
        wrong++;

    }
    if (wrong > 11) {
        alert("Bạn gõ sai hơn 10 lần rồi. Thử lại nhá :))");
        location.reload();
    }
})

let animation = () => {
    content1 = document.querySelector('.content1')
    content1.style.display = "flex";
}
