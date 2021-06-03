
const avt = document.querySelector(".avatar");
const inputAvt = document.querySelector(".inputAvt");
const idUser = document.querySelector(".idUser").textContent;
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
                }
            });
        })
        reader.readAsDataURL(file);
    }
})