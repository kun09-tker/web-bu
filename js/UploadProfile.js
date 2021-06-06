
const avt = document.querySelector("#img-user");
const inputAvt = document.querySelector(".inputAvt");
const idUser = document.querySelector(".idUser").textContent;
// get data
const username = document.querySelector("#user-name");
const total = document.querySelector(".text");
const progressBar = document.querySelector(".background");
const wpm = document.querySelector(".wpm");
const acc = document.querySelector(".acc");
const Name = document.querySelector(".name");
const email = document.querySelector(".email");
const tel = document.querySelector(".tel");
const address = document.querySelector(".address");
const bir = document.querySelector(".bir");
const LessonColor = document.querySelectorAll(".color");
const LessonPer = document.querySelectorAll(".percent");
const Baidonggop = document.querySelector("#cv-right");
const getDataUser = async () => {
    await $.ajax({
        type: 'POST',
        data: {
            type: 0,
            idUser: idUser,
        },
        url: "../php/UploadProfile.php",
        success: (data) => {
            //  console.log(data);

            let userArray = JSON.parse(data);
            avt.setAttribute("src", userArray[0].avt);
            username.innerHTML = userArray[0].username;
            total.innerHTML = userArray[0].total + "/72";
            progressBar.style.width = `${parseFloat(parseFloat(userArray[0].total * 100) / 72)}%`
            // console.log(parseFloat(parseFloat(userArray[0].total) / 72) + "%");

            wpm.innerHTML = userArray[0].wpm + " WPM";
            acc.innerHTML = "Accuracy: " + userArray[0].acc + "%";
            Name.innerHTML = userArray[0].name;
            email.innerHTML = userArray[0].email;
            tel.innerHTML = userArray[0].tel;
            address.innerHTML = userArray[0].address;
            bir.innerHTML = userArray[0].bir;
        }
    });
}
const getListTest = async () => {
    await $.ajax({
        type: 'POST',
        data: {
            type: 3,
            idUser: idUser,
        },
        url: "../php/UploadProfile.php",
        success: (data) => {
            let ListArray = JSON.parse(data);
            console.log(ListArray);

            let datatest = "<h7>Đóng góp</h7>";
            for (let i = 0; i < ListArray.length; i++) {
                datatest += `<div class="Baidonggop">
                <div class="TenBai">${ListArray[i].name}</div><br>
                <div class="test_day">${ListArray[i].day}</div>
                <div class="likecount">${ListArray[i].like}</div>
                <img src="../public/avt/like.png" alt="" class="like">
                <div class="dislikecount">${ListArray[i].dislike}</div>
                <img src="../public/avt/dislike.png" alt="" class="dislike">
                </div>`;
            }
            Baidonggop.innerHTML = datatest;
        }
    })
}
const getDataLesson = async () => {
    await $.ajax({
        type: 'POST',
        data: {
            type: 2,
            idUser: idUser,
        },
        url: "../php/UploadProfile.php",
        success: (data) => {
            let lessonArray = JSON.parse(data);
            for (let i = 0; i < lessonArray.length; i++) {
                let color = "#14ff00";
                let acc = parseFloat(lessonArray[i].acc);
                if (acc < 30) color = "red";
                else if (acc < 80) color = "orange";
                LessonColor[parseInt(lessonArray[i].idLesson)].style.backgroundColor = color;
                LessonPer[parseInt(lessonArray[i].idLesson)].innerHTML = `${lessonArray[i].acc}%`;
            }
        }
    });
}
const Start = () => {
    getDataUser();
    getDataLesson();
    getListTest();
}
Start();
inputAvt.addEventListener("change", () => {
    const file = inputAvt.files[0];
    if (file) {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            avt.setAttribute("src", reader.result);
            let data = reader.result;
            $.ajax({
                type: 'POST',
                data: {
                    type: 1,
                    avt: data,
                    idUser: idUser,
                },
                url: "../php/UploadProfile.php",
                success: (data) => {
                    console.log(data);
                    location.reload();
                }
            });
        })
        reader.readAsDataURL(file);
    }
})