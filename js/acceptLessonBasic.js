let lesson = document.querySelectorAll('.content-number');
async () => {
    await $.ajax({
        type: 'POST',
        url: "../php/acceptLesson.php",
        success: (data) => {
            let array = JSON.parse(data);
            console.log(array);
            for (let i = 0; i < data.length; i++) {
                lesson[array[i]].style.backgroundColor = "green";
                lesson[array[i]].innerHTML = "&#x2714;";
            }
        }
    });
}