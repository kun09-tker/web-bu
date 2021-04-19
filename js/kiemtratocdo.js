//correct - wrong ^ 1.1 - 0.1 * (keystroke - all)
var beepOne = new Audio();
beepOne.src = "../public/press.mp3";
var a = ["about","above","add","after","again","air","all","almost","along","also","always","America","an","and","animal","another","answer","any","are","around","as","ask","at","away","back","be","because","been","before","began","begin","being","below","between","big","book","both","boy","but","by","call","came","can","car","carry","change","children","city","close","come","could","country","cut","day","did","different","do","does","don't","down","each","earth","eat","end","enough","even","every","example","eye","face","family","far","father","feet","few","find","first","follow","food","for","form","found","four","from","get","girl","give","go","good","got","great","group","grow","had","hand","hard","has","have","he","head","hear","help","her","here","high","him","his","home","house","how","idea","if","important","in","Indian","into","is","it","its","it's","just","keep","kind","know","land","large","last","later","learn","leave","left","let","letter","life","light","like","line","list","little","live","long","look","made","make","man","many","may","me","mean","men","might","mile","miss","more","most","mother","mountain","move","much","must","my","name","near","need","never","new","next","night","no","not","now","number","of","off","often","oil","old","on","once","one","only","open","or","other","our","out","over","own","page","paper","part","people","picture","place","plant","play","point","put","question","quick","quickly","quite","read","really","right","river","run","said","same","saw","say","school","sea","second","see","seem","sentence","set","she","should","show","side","small","so","some","something","sometimes","song","soon","sound","spell","start","state","still","stop","story","study","such","take","talk","tell","than","that","the","their","them","then","there","these","they","thing","think","this","those","thought","three","through","time","to","together","too","took","tree","try","turn","two","under","until","up","us","use","very","walk","want","was","watch","water","way","we","well","went","were","what","when","where","which","while","white","who","why","will","with","without","word","work","world","would","write","year","you","young","your"];
var b = a.map((value) => (
    `<span class="span">${value}</span>`
));
b = b.join(" ");
document.querySelector('#restart').addEventListener("click",()=>{
    location.reload();
});
document.querySelector('#word-section').innerHTML = b;
window.addEventListener('DOMContentLoaded', () => {
    let timer = [1,0];
    let index = 0;
    var wpm = [0, 0, 0, 0, 0, 0];
    let count =0;
    let tmp=0;
    // Run a standard minute/second/hundredths timer:
    const span = document.querySelectorAll('.span');
    const y = document.querySelector("#typebox");
    const theTimer = document.querySelector("#timer");
    span[0].classList.add('fomat');

    //document.querySelector("#input-text").keypress(function (event) {
    document.querySelector("#typebox").addEventListener('keypress', (event) => {
        count++; tmp++;
        if (tmp==1) setInterval(runTimer, 10);
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
            if(index >= 5){
                span[index-5].remove();
            }
            if (y.value.trim() == span[index].innerText) {
                wpm[0] += count;
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
                let Er = wpm[1];
                let keypress = wpm[0];
                wpm[1] = Math.round((wpm[4]+wpm[5]) / 5).toString();
                wpm[0] = Math.max(0,(Math.round((wpm[4] /(wpm[4]+wpm[5])) * 10000) / 100)).toString();
                //console.log("wpm: " + wpm[1]);
                document.querySelector(".strong1").innerHTML = wpm[1] + "WPM";
                //console.log('Correct: ' + wpm[2]);
                document.querySelector(".correct1").innerHTML = wpm[4];
                //console.log('Incorrect: ' + wpm[3]);
                document.querySelector(".wrong").innerHTML = wpm[5];
                document.querySelector(".total").innerHTML = "&nbsp;" +(wpm[4]+wpm[5]).toString()
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
            }

        } else {
            let currentTime = "00:" + leadingZero(timer[0]);
            theTimer.innerHTML = currentTime;
            if(timeOut) timer[1]++;
            timer[0] = 59 - Math.floor(timer[1]/100)
        }
    }
});

const compairTwoString = (son, parent) => {
    if (parent.search(son) != -1) return true;
    return false;
}

