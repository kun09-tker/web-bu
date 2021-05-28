var beepOne = new Audio();
beepOne.src = "../public/press.mp3";
var start = 0;
var end = 0;
var vitri = 0;
var dem = 0;
var Name = document.querySelector(".saveName").textContent;
var a;
let timeRun;
const Now = new Date();
const getData = (N) => {
    const listTest = async (handleData) => {
        await $.ajax({
            type: "POST",
            url: '../php/listTest.php',
            data: {
                name: N,
            },
            success: (data) => {
                handleData(data);
            }
        });
    }
    listTest((output) => {
        a = output.split(' ');
        var numberArr = a.length

        let word = [];
        for (let i = 0; i < 500; i++) {
            if (document.querySelector(".check").checked == true) word[i] = a[Math.floor(Math.random() * numberArr)];
            else word[i] = a[i % numberArr];
        }
        var b = word.map((value) => (
            `<span class="span">${value}</span>`
        ));
        b = b.join(" ");
        document.querySelector('#word-section').innerHTML = b;
        document.querySelector('#restart').addEventListener("click", () => {
            location.reload();
        });
        let timer = [1, 0];
        let index = 0;
        let wpm = [0, 0, 0, 0, 0, 0];
        let tmp = 0;
        // Run a standard minute/second/hundredths timer:
        const span = document.querySelectorAll('.span');
        //console.log(span);
        const y = document.querySelector("#typebox");
        const theTimer = document.querySelector("#timer");
        span[0].classList.add('fomat');
        document.querySelector("#typebox").addEventListener('keypress', (event) => {
            tmp++;
            //  console.log(tmp);

            if (tmp == 1) timeRun = window.setInterval(runTimer, 10);
            y.oninput = () => {
                if (y.value != " ") {
                    //console.log(y.value);
                    if (compairTwoString(y.value.trim(), span[index].innerText)) {
                        //console.log(span[index].innerText[0].toString());
                        span[index].classList.add('fomat');
                        span[index].classList.remove('fomatErro');
                    } else {
                        span[index].classList.add('fomatErro');
                        span[index].classList.remove('fomat');
                    }
                } else {
                    y.value = ''
                }
            }
            if (event.charCode == 32) {
                start = span[index].offsetTop;
                end = span[index + 1].offsetTop;
                // console.log(start + " " + end);

                span[index + 1].classList.add('fomat');
                if (start != end) {
                    dem++;
                    if (dem == 2) {
                        for (let i = vitri; i <= index; i++) {
                            span[i].remove();
                        }
                        vitri = index + 1;
                        dem = 0;
                    }
                }
                //  console.log(y.value.trim()+"\n"+span[index].innerText);

                if (y.value.trim() == span[index].innerText) {
                    //$(".span").eq(index).addClass('correct').removeClass('fomat');
                    wpm[2]++;
                    wpm[4] += span[index].innerText.length + 1;
                    span[index].classList.add('correct');
                    span[index].classList.remove('fomat');
                    span[index].classList.remove('fomatErro');
                } else {
                    wpm[3]++;
                    wpm[5] += span[index].innerText.length;
                    span[index].classList.add('incorrect');
                    span[index].classList.remove('fomat');
                    span[index].classList.remove('fomatErro');
                }
                index++;
                y.value = "";
                count = 0;
            }
        });
        var leadingZero = (time) => {
            if (time <= 9) {
                time = "0" + time;
            }
            return time;
        }
        let timeOut = true;
        const runTimer = () => {
            if (timer[0] == 0) {
                theTimer.innerHTML = "Time up";
                if (timeOut) {
                    wpm[1] = Math.round(wpm[4] / 5).toString();
                    wpm[0] = Math.max(0, (Math.round((wpm[4] / (wpm[4] + wpm[5])) * 10000) / 100)).toString();
                    //console.log("wpm: " + wpm[1]);
                    document.querySelector(".strong1").innerHTML = wpm[1] + "WPM";
                    //console.log('Correct: ' + wpm[2]);
                    document.querySelector(".correct1").innerHTML = wpm[4];
                    //console.log('Incorrect: ' + wpm[3]);
                    document.querySelector(".wrong").innerHTML = wpm[5];
                    document.querySelector(".total").innerHTML = "&nbsp;" + (wpm[4] + wpm[5]).toString()
                    document.querySelector(".strong2").innerHTML = wpm[0] + "%"
                    document.querySelector(".strong3").innerHTML = wpm[2];
                    document.querySelector("#auswertung-result").classList.add("col");
                    document.querySelector("#auswertung-result").classList.remove("hide");
                    //console.log('Ac: ' + wpm[0] + "%");
                    // result.join(" ");
                    // document.querySelector('#result').innerHTML = result;
                    timeOut = false;
                    document.querySelector("#word-section").classList.add("hide");
                    let car = document.querySelector(".card-body");
                    car.classList.add("final");
                    car.innerHTML = "Chúc mừng bạn vừa hoàn thành bài kiểm tra !!!"
                    console.log("wpm:" + wpm[1] + ", acc:" + wpm[0]);

                    $.ajax({
                        type: "POST",
                        url: '../php/luyentap.php',
                        data: {
                            wpm: wpm[1],
                            acc: wpm[0],
                            day: Now.getDate() + "/" + (Now.getMonth() + 1) + "/" + Now.getFullYear(),
                        },
                        success: (data) => {
                            console.log(data);
                        }
                    });
                }
            } else {
                let currentTime = "00:" + leadingZero(timer[0]);
                theTimer.innerHTML = currentTime;
                if (timeOut) timer[1]++;
                timer[0] = 59 - Math.floor(timer[1] / 100)
            }
        }
        const compairTwoString = (son, parent) => {
            if (parent.search(son) != -1) return true;
            return false;
        }
    });
}

// ===========================Lấy dữ liệu mặt định ===================//
getData(Name);
//======================== Bộ test ==========================//
document.querySelector("#data").onclick = () => {
    $(".data").load("../html/listTest.php", () => {
        const like = document.querySelector(".like");
        const unlike = document.querySelector(".unlike");
        const lb_like = document.querySelector(".lb_like");
        const lb_dislike = document.querySelector(".lb_dislike");
        let check_like = [];
        let check_unlike = [];
        let count_like = [];
        let count_dislike = [];
        let idList = [];
        let index = 0;
        const userInWeb = document.querySelector(".userInWeb");
        const user_add = document.querySelector(".User-add");
        const user_day = document.querySelector(".day");
        const info = document.querySelector(".info");
        document.querySelector("#add").addEventListener('click', () => {
            var user = document.querySelector(".user").textContent;
            if (user == "") window.location.href = "./dangnhap.php";
            else window.location.href = "./addTest.php";
        })

        const option = document.querySelectorAll(".text-option");
        for (let i = 0; i < option.length; i++) {
            check_like.push(0);
            check_unlike.push(0);
            idList.push(parseInt(option[i].getAttribute("data-id")));
            count_like.push(parseInt(option[i].getAttribute("data-like")));
            count_dislike.push(parseInt(option[i].getAttribute("data-dislike")));
        }

        const eva = document.querySelector(".eva");
        if (eva.childElementCount > 0) {
            const eva_data = document.querySelectorAll(".eva_data");
            for (let i = 0; i < eva_data.length; i++) {
                const data_id_list = idList.indexOf(parseInt(eva_data[i].getAttribute("data-id_list")));
                const value = parseInt(eva_data[i].getAttribute("data-value"));
                if (value == 1) check_like[data_id_list] = 1;
                else if (value == 0) check_unlike[data_id_list] = 1;
            }
        }
        for (let i = 0; i < option.length; i++) {
            option[i].onclick = () => {
                const btn_like = like.childNodes[2];
                const btn_unlike = unlike.childNodes[2];
                index = i;
                Name = option[i].getAttribute("data-name");
                document.querySelector(".content-data").innerHTML = option[i].getAttribute("data-content");
                info.style.display = "flex";
                lb_like.innerHTML = count_like[i];
                lb_dislike.innerHTML = count_dislike[i];
                user_add.innerHTML = "Người đóng góp: " + option[i].getAttribute("data-user");
                user_day.innerHTML = "Ngày đóng góp: " + option[i].getAttribute("data-day");
                if (check_like[i] == 0) {
                    btn_like.src = "../public/avt/likegray.png";
                }
                else {
                    btn_like.src = "../public/avt/like.png";
                }
                if (check_unlike[i] == 0) {
                    btn_unlike.src = "../public/avt/dislikegray.png";
                }
                else {
                    btn_unlike.src = "../public/avt/dislike.png";
                }
            }
        }
        ////========================== Like or Dislike  ====================================//
        like.onclick = () => {
            const btn_like = like.childNodes[2];
            const btn_unlike = unlike.childNodes[2];
            if (userInWeb.textContent == "") {
                window.location.href = "./dangnhap.php";
            }
            else {
                if (check_like[index] == 0) {
                    btn_like.src = "../public/avt/like.png";
                    btn_unlike.src = "../public/avt/dislikegray.png";
                    count_like[index] += 1;
                    if (check_unlike[index] == 1) count_dislike[index] = Math.max(0, count_dislike[index] - 1);
                    lb_like.innerHTML = count_like[index];
                    lb_dislike.innerHTML = count_dislike[index];
                    check_like[index] = 1;
                    check_unlike[index] = 0;
                }
                else {
                    btn_like.src = "../public/avt/likegray.png";
                    count_like[index] = Math.max(0, count_like[index] - 1)
                    lb_like.innerHTML = count_like[index];
                    check_like[index] = 0;
                }
            }
        }
        unlike.onclick = () => {
            const btn_like = like.childNodes[2];
            const btn_unlike = unlike.childNodes[2];

            if (userInWeb.textContent == "") {
                window.location.href = "./dangnhap.php";
            }
            else {
                if (check_unlike[index] == 0) {
                    btn_unlike.src = "../public/avt/dislike.png";
                    btn_like.src = "../public/avt/likegray.png";
                    count_dislike[index] += 1;
                    if (check_like[index] == 1) count_like[index] = Math.max(0, count_like[index] - 1);
                    lb_like.innerHTML = count_like[index];
                    lb_dislike.innerHTML = count_dislike[index];
                    check_unlike[index] = 1;
                    check_like[index] = 0;
                }
                else {
                    btn_unlike.src = "../public/avt/dislikegray.png";
                    count_dislike[index] = Math.max(0, count_dislike[index] - 1)
                    lb_dislike.innerHTML = count_dislike[index];
                    check_unlike[index] = 0;
                }
            }
        }
        document.querySelector("#deloy").addEventListener('click', () => {
            const SaveName = async () => {
                await $.ajax({
                    type: "POST",
                    url: '../php/listTest.php',
                    data: {
                        saveName: Name,
                    },
                });
            }
            const Eva = async (idList, value) => {
                await $.ajax({
                    type: "POST",
                    url: '../php/Evaluate.php',
                    data: {
                        idList: idList,
                        value: value,
                    },
                    success: (data) => {
                        console.log(data);

                    }
                })
            }
            const UpdateEva = async (idList, countLike, countDisLike) => {
                await $.ajax({
                    type: "POST",
                    url: '../php/Evaluate.php',
                    data: {
                        index: 1,
                        countLike: countLike,
                        countDisLike: countDisLike,
                        idList: idList,
                    },
                    success: (data) => {
                        console.log(data);
                    }
                })
            }
            for (let i = 0; i < idList.length; i++) {
                UpdateEva(idList[i], count_like[i], count_dislike[i]);
                if (check_like[i] == 1) {

                    Eva(idList[i], 1);
                }
                if (check_unlike[i] == 1) {
                    Eva(idList[i], 0);
                }
            }
            SaveName();
            getData(Name);
            document.querySelector('.container_list').style.display = 'none';
            document.querySelector('.data').innerHTML = "Bộ test đang dùng: " + Name;
            // location.reload();
        });
    });
}
document.querySelector(".check").onclick = () => {
    let onlyTest = "false";
    if (document.querySelector(".check").checked == true) {
        onlyTest = "true";
    };
    console.log(onlyTest);

    const SaveOnlyTest = async () => {
        await $.ajax({
            type: "POST",
            url: '../php/listTest.php',
            data: {
                saveOnlyTest: onlyTest,
            },
        });
    }
    SaveOnlyTest();
    location.reload();
}