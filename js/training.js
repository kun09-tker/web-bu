const accepted = async () => {
    await $.ajax({
        type: 'POST',
        url: "../php/acceptLesson.php",
        success: (data) => {
            let array = JSON.parse(data);
            for (let i = 0; i < array.length; i++) {
                if (array[i].lesson.includes(numberLesson.textContent)) {
                    document.querySelectorAll('.accept')[1].style.visibility = 'visible';
                }
            }
        }
    });
}
const raking = () => {
    $.ajax({
        type: 'POST',
        data: {
            type: 1,
            lesson: numberLesson.textContent,
        },
        url: "../php/acceptLesson.php",
        success: (data) => {
            let array = JSON.parse(data);
            // console.log(array);

            let Rank = `<ul class="guiz-awards-row guiz-awards-header" >
            <li class="guiz-awards-header-star">&nbsp;</li>
            <li class="guiz-awards-header-name">Tên</li>
            <li class="guiz-awards-header-user">Username</li>
            <li class="guiz-awards-header-exactly">Độ chính xác</li>
            <li class="guiz-awards-header-time">Thời gian</li>
            <li class="guiz-awards-header-day">Ngày</li>
             </ul>`;
            for (let i = 0; i < Math.min(array.length, 10); i++) {
                if (array[i].acc > 0 && array[i].time > 0) {
                    let Top = "nomalstar";
                    if (i == 0) Top = "goldstar";
                    else if (i == 1) Top = "silverstar";
                    else if (i == 2) Top = "bronzestar";
                    Rank += `<ul class="guiz-awards-row guiz-awards-header" data_id="${array[i].id}">
                    <li class="guiz-awards-star"><span class="star ${Top}"></span></li>
                    <li class="guiz-awards-name"><img class="avt_rank" src="${array[i].avt}">${array[i].name}</li>
                    <li class="guiz-awards-user">${array[i].user} </li>
                    <li class="guiz-awards-exactly">${array[i].acc}%</li>
                    <li class="guiz-awards-time">${array[i].time}s</li>
                    <li class="guiz-awards-day">${array[i].day.substring(0, 10)}</li>
                    </ul>`;
                }
            }
            document.querySelector(".gui-window-awards").innerHTML = Rank;
            const userRank = document.querySelectorAll(".guiz-awards-row");
            const Getid = async (u) => {
                await $.ajax({
                    type: 'POST',
                    data: {
                        type: 2,
                        userRank: u,
                    },
                    url: "../php/acceptLesson.php",
                    success: (data) => {
                        console.log(data);

                    }
                }, window.location.href = "../html/profile.php")
            }
            for (let i = 1; i < userRank.length; i++) {
                userRank[i].onclick = () => {
                    let u = userRank[i].getAttribute("data_id");
                    // console.log(u);
                    Getid(u);
                }
            }
        }
    });
}
function noScroll() {
    window.scrollTo(0, 0);
}
var target = "BODY";
document.body.onclick = function (e) {
    target = e.target.nodeName;
    if (target == "BODY") window.removeEventListener("scroll", noScroll);
    // console.log(target);
};
window.onkeydown = (e) => {
    if (target != "BODY") {
        window.addEventListener('scroll', noScroll);
    }
    else {
        window.removeEventListener("scroll", noScroll);
        return !e.keyCode;
    }
}
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
let wrong = 0;
let numberTest = 46;
let acc = 0;
let numberOfitem = a.length;
const Now = new Date();
accepted();
raking();

for (let i = 0; i < numberTest; i++) {
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
let thapphan = 0;
let nguyen = 0;
let CountAcc = () => {
    // console.log(acc);

    if (nguyen * 100 + thapphan >= acc * 10000) {
        window.clearInterval(interval);
        let tmp = "";
        let displayAcc = "";
        if (acc < 1000) {
            tmp = "&nbsp;";
        }
        if ((acc * 10000) % 100 == 0) {
            displayAcc = (acc * 100).toString() + ".00";
        }
        else {
            displayAcc = parseFloat((acc * 10000) / 100).toFixed(2).toString();
        }
        document.querySelector('.acc').innerHTML = tmp + "&nbsp;&nbsp;" + displayAcc + " %";
    }
    else {
        thapphan += 25;
        if (thapphan / 100 === 1) {
            thapphan = 0;
            nguyen++;
        }
        if (thapphan < 10) {
            displaySeconds = "0" + thapphan.toString();
        }
        else {
            displaySeconds = thapphan;
        }
        if (nguyen < 10) {
            displayMinutes = "&nbsp;" + nguyen.toString();
        }
        else {
            displayMinutes = nguyen;
        }
        document.querySelector('.acc').innerHTML = "&nbsp;&nbsp;" + displayMinutes + "." + displaySeconds + " %";
    }
}
window.addEventListener('keypress', async (event) => {
    count++;
    if (count == 1) interval = window.setInterval(stopWatch, 1000);
    //console.log(i + " " + text.length);

    document.querySelector("#shap").classList.add("shap");
    document.querySelector("#shap").classList.remove("shap-er");
    if (rand[i] == event.key[0]) {
        if (i >= text.length - 2) {
            animation();
            window.clearInterval(interval);
            //acc = Math.max(0, (Math.round((1 - wrong / numberTest) * 10000)) / 10000);
            acc = Math.max(0, parseFloat(1 - wrong / numberTest).toFixed(4));
            console.log(acc);

            //console.log(hours * 60 * 60 + minutes * 60 + seconds + " " + (acc).toString());
            interval = window.setInterval(CountAcc, 1);
            await $.ajax({
                type: "POST",
                url: '../php/training.php',
                data: {
                    lesson: numberLesson.textContent,
                    time: hours * 60 * 60 + minutes * 60 + seconds,
                    acc: parseFloat((acc * 10000) / 100).toFixed(2).toString(),
                    day: Now.getDate() + "/" + (Now.getMonth() + 1) + "/" + Now.getFullYear(),
                },
                success: (data) => {
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

        document.querySelector(".erro").innerHTML = "Số lần gõ sai: " + (wrong + 1).toString();
        wrong++;

    }
})

let animation = () => {
    content1 = document.querySelector('.content1')
    content1.style.display = "flex";
}