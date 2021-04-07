img = document.querySelector(".content__img")
function getData() {
    var type = $("#type").val();

    $.ajax({
        url: "./../html/data.php",
        method: "POST",
        data: {
            type: type,
        },
        success: function (b) {
            var a = b;
            if (a.search("%20") == 0) {
                a = a.substr(3);
                a = [a.slice(0, 1), " ", a.slice(1)].join('');
            }
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
                document.querySelector("#shap").classList.add("shap");
                document.querySelector("#shap").classList.remove("shap-er");
                if (a[i] == event.key[0]) {
                    text[i].classList.add('correct');
                    text[i].classList.remove('wrong');
                    ++i;
                    text[i].classList.add('focus');
                    text[i].classList.remove('span');
                    //console.log(event.key.charCodeAt(0));

                    img.src = "../public/typing/" + a.charCodeAt(i) + ".png";
                } else {
                    text[i].classList.add('wrong');
                    document.querySelector("#shap").classList.add("shap-er");
                    document.querySelector("#shap").classList.remove("shap");

                    document.querySelector(".erro").innerHTML = "Số lần gõ sai: " + wrong;
                    wrong++;

                }
                if (wrong > 10) {
                    alert("Bạn gõ sai hơn 10 lần rồi. Thử lại nhá :))");
                    location.reload();
                }
            })


        }
    });
}

getData();