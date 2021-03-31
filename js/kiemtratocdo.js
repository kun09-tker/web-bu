//correct - wrong ^ 1.1 - 0.1 * (keystroke - all)
var a = ["muoi", "bbb", "cccc", "hshdsh", "sdsads", "sadhs","sdasd","76whshgd","aafsd"];
var b = a.map((value) => (
    `<span class="span">${value}</span>`
));
b = b.join(" ");
document.querySelector('#word-section').innerHTML = b;
window.addEventListener('DOMContentLoaded', () => {
    let timer = [0, 0, 0, 0];
    let index = 0;
    var wpm = [0, 0, 0, 0, 0, 0];
    // Run a standard minute/second/hundredths timer:
    const span = document.querySelectorAll('.span');
    const y = document.querySelector("#typebox");
    const theTimer = document.querySelector("#timer");
    span[0].classList.add('fomat');

    //document.querySelector("#input-text").keypress(function (event) {
    document.querySelector("#typebox").addEventListener('keypress', (event) => {
        wpm[0]++;
        if (wpm[0] == 1) setInterval(runTimer, -100);

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
                    wpm[1]++;
                }
            } else {
                y.value = ''
            }
        }
        if (event.charCode == 32) {
            //$(".span").eq(index+1).addClass('fomat');
            span[index + 1].classList.add('fomat');
            if (y.value.trim() == span[index].innerText) {
                //$(".span").eq(index).addClass('correct').removeClass('fomat');
                wpm[2]++;
                wpm[4] += span[index].innerText.length;
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
            y.value = ""
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
        if (timer[0] == 1 && timer[1] == 0 && timer[2] == 0) {
            theTimer.innerHTML = "Time up";
            if (timeOut) {
                let Er = wpm[1];
                let keypress = wpm[0];
                wpm[1] = Math.round((wpm[4] + wpm[5]) / 5).toString();
                wpm[0] = (Math.round((1 - (Er / keypress)) * 10000) / 100).toString();
                console.log("wpm: " + wpm[1]);
                console.log('Correct: ' + wpm[2]);
                console.log('Incorrect: ' + wpm[3]);
                console.log('Ac: ' + wpm[0] + "%");
                let result = wpm.map((value)=>(
                    `<p class="p">${value}</p>`
                ))
               // result.join(" ");
                document.querySelector('#result').innerHTML = result;
                timeOut = false;
                
            }

        } else {
            let currentTime = leadingZero(timer[0]) + ":" + leadingZero(timer[1]) + ":" + leadingZero(timer[2]);
            theTimer.innerHTML = currentTime;
            timer[3]++;
            timer[0] = Math.floor((timer[3] / 100) / 60);
            timer[1] = Math.floor((timer[3] / 100) - (timer[0] * 60));
            timer[2] = Math.floor(timer[3] - (timer[1] * 100) - (timer[0] * 6000));
        }
    }
});

const compairTwoString = (son, parent) => {
    // console.log(index);
    if (parent.search(son) != -1) return true;
    return false;
}