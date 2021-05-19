let req = "";
const raking = (req) => {
    $.ajax({
        type: 'POST',
        data: {
            req: req,
        },
        url: "../php/QuanlyList.php",
        success: (data) => {
            let array = JSON.parse(data);
            let Rank = `<ul class="guiz-awards-row guiz-awards-header">
            <li class="guiz-awards-header-name">Id người dùng</li>
            <li class="guiz-awards-header-name">Tên bài</li>
            <li class="guiz-awards-header-user">Nội dung</li>
            <li class="guiz-awards-header-day">Xóa</li>
             </ul>`;
            for (let i = 0; i < array.length; i++) {
                ;
                Rank += `<ul class="guiz-awards-row guiz-awards-header">
                <li class="guiz-awards-header-name">${array[i].idUser}</li>
                <li class="guiz-awards-name">${array[i].ten}</li>
                <li class="guiz-awards-user"><textarea class="inputContent" data_id="${array[i].id}">${array[i].content}</textarea></li>
                <li class="guiz-awards-header-day"><input class="Key" data_key="${array[i].id}" type="checkbox"></li>
            </ul>`;
            }
            document.querySelector(".gui-window-awards").innerHTML = Rank;
            const Key = document.querySelectorAll(".Key");
            for (let i = 0; i < Key.length; i++) {
                Key[i].onclick = () => {
                    let id = Key[i].getAttribute("data_key");
                    $.ajax({
                        type: 'POST',
                        data: {
                            type: 1,
                            idChange: id,
                        },
                        url: "../php/QuanlyList.php",
                    });
                }
            }
            const inputContent = document.querySelectorAll(".inputContent");
            for (let i = 0; i < inputContent.length; i++) {
                inputContent[i].oninput = () => {
                    let content = inputContent[i].value;
                    let idTest = inputContent[i].getAttribute("data_id");
                    $.ajax({
                        type: 'POST',
                        data: {
                            type: 2,
                            idTest: idTest,
                            Content: content,
                        },
                        url: "../php/QuanlyList.php",
                        success: (data) => {
                            console.log(data);

                        }
                    });
                }
            }
        }
    });
}
raking(req);
document.querySelector(".wordSearch").addEventListener("keyup", (e) => {
    if (e.keyCode == 13) {
        raking(document.querySelector(".wordSearch").value);
    }
})
document.querySelector(".btn-search").onclick = () => {
    raking(document.querySelector(".wordSearch").value);
}