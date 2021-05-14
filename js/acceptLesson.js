var lesson = document.querySelectorAll('.content-number');
const accepted = async () => {
    await $.ajax({
        type: 'POST',
        url: "../php/acceptLesson.php",
        success: (data) => {
            let array = JSON.parse(data);
            for (let i = 0; i < array.length; i++) {
                if (array[i].lesson <= 33) {
                    lesson[array[i].lesson].style.backgroundColor = "green";
                    lesson[array[i].lesson].innerHTML = "&#x2714;";
                }
            }
            var content_title = document.querySelectorAll(".content-title");
            for (let i = 0; i < content_title.length; i++) {
                content_title[i].innerHTML += '<p class="acc">0%</p><div class="myProgress"><div class = "myBar"></div></div>';
            }
            var myBar = document.querySelectorAll(".myBar");
            var accClass = document.querySelectorAll(".acc");
            for (let i = 0; i < array.length; i++) {
                if (array[i].lesson <= 33) {
                    let acc = array[i].acc;
                    let myBar_i = myBar[array[i].lesson];
                    let accClass_i = accClass[array[i].lesson];
                    myBar_i.style.width = acc + '%';
                    accClass_i.innerHTML = acc + '%';
                    if (acc < 30) {
                        myBar_i.style.backgroundColor = "red";
                        accClass_i.style.color = "red";
                    }
                    else if (acc < 80) {
                        myBar_i.style.backgroundColor = "orange";
                        accClass_i.style.color = "orange";
                    }
                    else {
                        myBar_i.style.backgroundColor = "green";
                        accClass_i.style.color = "green";
                    }
                }
            }
        }
    });
}
accepted();
// let lesson = document.querySelectorAll('.content-number');
// function accepted (){
//     var XML=new XMLHttpRequest();
//     XML.onreadystatechange=function(){
//         if(this.readyState==4&&this.status==200){
//             let data=this.responseText;
//             let array=JSON.parse(data);
//             console.log(array);
//             for (let i = 0; i < array.length; i++) {
//                 lesson[array[i].lesson].style.backgroundColor = "green";
//                 lesson[array[i].lesson].innerHTML = "&#x2714;";
//             }
//             var content_title = document.querySelectorAll(".content-title");
//             for (let i = 0; i < content_title.length; i++) {
//                 content_title[i].innerHTML += '<p class="acc">0%</p><div class="myProgress"><div class = "myBar"></div></div>';
//             }
//             var myBar = document.querySelectorAll(".myBar");
//             var accClass = document.querySelectorAll(".acc");
//             for (let i = 0; i < array.length; i++) {
//                 let acc =  array[i].acc;
//                 let myBar_i = myBar[array[i].lesson];
//                 let accClass_i = accClass[array[i].lesson];
//                 myBar_i.style.width = acc + '%';
//                 accClass_i.innerHTML = acc + '%';
//                 if(acc < 30){
//                     myBar_i.style.backgroundColor = "red";
//                     accClass_i.style.color = "red";
//                 }
//                 else if(acc < 80){
//                     myBar_i.style.backgroundColor = "orange";
//                     accClass_i.style.color = "orange";
//                 }
//                 else{
//                     myBar_i.style.backgroundColor = "green";      
//                     accClass_i.style.color = "green";
//                 }    
//             }
//         }
//     };
//     XML.open("POST","../php/acceptLesson.php",true);
//     XML.send();
// }
// accepted();


