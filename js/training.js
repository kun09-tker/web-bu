var beepOne = new Audio();
beepOne.src = "../public/press.mp3";
img = document.querySelector(".content__img")
let a = document.querySelector("#lesson").textContent;
let train = "";
let rand = "";
let i = 0;
let wrong = 1;
let numberOfitem = a.length;
for(let i = 0; i<= 75; i++){
    rand += a[Math.floor(Math.random()*numberOfitem)];
}
for (let i = 0; i < rand.length; i++) {
    if (rand[i] == " ") train += `<span class="span">&nbsp</span>`;
    else train += `<span class="span">${rand[i]}</span>`;
}
img.src = "../public/typing/" + rand.charCodeAt(0) + ".png";
document.querySelector(".content__text").innerHTML = train
const text = document.querySelectorAll('.span');
text[0].classList.add('focus');
text[0].classList.remove('span');
window.addEventListener('keydown',(event) =>{
    beepOne.play();
})
window.addEventListener('keypress', (event) => {
    console.log(event.key.charCodeAt(0));
    console.log(event.key);
    document.querySelector("#shap").classList.add("shap");
    document.querySelector("#shap").classList.remove("shap-er");
    if (rand[i] == event.key[0]) {
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