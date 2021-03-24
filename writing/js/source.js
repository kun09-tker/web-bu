//correct - wrong ^ 1.1 - 0.1 * (keystroke - all)

var a = ["muoi", "bbb", "cccc", "hshdsh", "sdsads", "!"];
var b = a.map((value) => (
    `<span class="span">${value}</span>`
));
b = b.join(" ");
document.querySelector('#data-inner').innerHTML = b;
var index = 0;
var correct = 0;
var wrong = 0;
var Erro = 0;
window.addEventListener('DOMContentLoaded', () => {
    var span = document.querySelectorAll('.span');
    var y = document.querySelector("#input-text");
    span[0].classList.add('fomat');
    //document.querySelector("#input-text").keypress(function (event) {
    document.querySelector("#input-text").addEventListener('keypress', (event) => {
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
            //$(".span").eq(index+1).addClass('fomat');
            span[index + 1].classList.add('fomat');
            if (y.value.trim() == span[index].innerText) {
                //$(".span").eq(index).addClass('correct').removeClass('fomat');
                correct += span[index].innerText.length;
                span[index].classList.add('correct');
                span[index].classList.remove('fomat');
                span[index].classList.remove('fomatErro');
            } else {
                wrong += span[index].innerText.length;
                span[index].classList.add('incorrect');
                span[index].classList.remove('fomat');
                span[index].classList.remove('fomatErro');
            }
            index++;
            y.value = ""
            wpm(correct,wrong);
        }
    });
});

var compairTwoString = (son, parent) => {
   // console.log(index);
    if (parent.search(son) != -1) return true;
    return false;
}
var wpm = (correct,wrong)=>{
    console.log(correct);
    console.log(wrong);
}