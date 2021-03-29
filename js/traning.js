img = document.querySelector(".content__img")
window.addEventListener('keypress', (event) =>{
    scr = "../public/typing/"+event.key.charCodeAt(0)+".png";
    img.src = scr;
    console.log(event.key.charCodeAt(0));
});
document.querySelector(".btn").addEventListener('click',(event)=>{
    console.log(event);
})