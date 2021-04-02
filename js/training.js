img = document.querySelector(".content__img")
let a = window.location.href.substr(41);
if (a.search("%20") == 0) {
    a = a.substr(3);
    a = [a.slice(0, 1), " ", a.slice(1)].join('');
}
//console.log(a);

if (a[0] == "*") {} else {
    if (a[0] == '[') {

    } else {
        let train = "";
        let i = 0;
        let wrong = 0;
        let numberOfitem = a.length;
        for (let i = 0; i < 50 + numberOfitem; i++) a += a[Math.floor(Math.random() * numberOfitem)];
        a = a.substr(numberOfitem);
        for (let i = 0; i < a.length; i++) {
            if (a[i] == " ") train += `<span class="span">&nbsp</span>`;
            else train += `<span class="span">${a[i]}</span>`;
        }
        img.src = "../public/typing/" + a.charCodeAt(0) + ".png";
        // img.src = "../public/typing/"+ a.charCodeAt(i) + ".png";
        document.querySelector(".content__text").innerHTML = train
        const text = document.querySelectorAll('.span');
        text[0].classList.add('focus');
        text[0].classList.remove('span');
        window.addEventListener('keypress', (event) => {
            console.log(event.key.charCodeAt(0));
            console.log(event.key);
            if (a[i] == event.key[0]) {
                text[i].classList.add('correct');
                ++i;
                text[i].classList.add('focus');
                text[i].classList.remove('span');
                //console.log(event.key.charCodeAt(0));

                img.src = "../public/typing/" + a.charCodeAt(i) + ".png";
            } else {
                document.querySelector(".erro").innerHTML = "Số lần gõ sai: " + wrong;
                wrong++;

            }
            if (wrong > 10) {
                alert("Bạn gõ sai hơn 10 lần rồi. Thử lại nhá :))");
                location.reload();
            }
        })
    }
}