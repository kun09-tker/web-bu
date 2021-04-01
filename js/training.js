
img = document.querySelector(".content__img")
let a = window.location.href.substr(41);
console.log(a);

if(a=="intro"){
}
else{
    if(a[0]==']'){

    }
    else if (a[0] == '['){

    }
    else{
        let train ="";
        let  i = 0;
        let wrong = 0;
        let numberOfitem = a.length;
        for(let i = 0; i < 50; i++) a+=a[Math.floor(Math.random()*numberOfitem)];
        for(let i = 0; i < a.length; i++){
            train += `<span class="span">${a[i]}</span>`;
        }
        img.src = "../public/typing/"+ a.charCodeAt(0) +".png";
       // img.src = "../public/typing/"+ a.charCodeAt(i) + ".png";
        document.querySelector(".content__text").innerHTML = train
        const text = document.querySelectorAll('.span');
        text[0].classList.add('focus');
        text[0].classList.remove('span');
        window.addEventListener('keypress',(event)=>{
            if(a[i]==event.key[0]){
                text[i].classList.add('correct');
                ++i;
                text[i].classList.add('focus');
                text[i].classList.remove('span');
               // console.log(event.key.charCodeAt(0));
                
                img.src = "../public/typing/"+ a.charCodeAt(i) + ".png";        
           }
           else wrong++;
           if(wrong > 10){
            alert("Bạn gõ sai hơn 5 lần rồi. Thử lại nhá :))");
            location.reload();
            }
        })
    }
}
