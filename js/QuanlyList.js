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
            let Content = [];
            let id = [];
            let idDelete = [];
            let Rank = `<ul class="guiz-awards-row guiz-awards-header">
            <li class="guiz-awards-header-name">Id người dùng</li>
            <li class="guiz-awards-header-exactly">Tên bài</li>
            <li class="guiz-awards-header-user">Nội dung</li>
            <li class="guiz-awards-header-start">Ngày đăng</li>
            <li class="guiz-awards-header-time">Đánh giá</li>
            <li class="guiz-awards-header-day">Xóa</li>
             </ul>`;
            for (let i = 0; i < array.length; i++) {
                ;
                Rank += `<ul class="guiz-awards-row guiz-awards-header">
                <li class="guiz-awards-header-name">${array[i].idUser}</li>
                <li class="guiz-awards-header-exactly">${array[i].ten}</li>
                <li class="guiz-awards-header-user"><textarea class="inputContent" data_id="${array[i].id}">${array[i].content}</textarea></li>
                <li class="guiz-awards-header-start">${array[i].day}</li>
                <li class="guiz-awards-header-time">                    
                    <div class="info_evaluate">
                        <div class="like">${array[i].like}
                            <img src="../public/avt/like.png">
                        </div>
                        <div class="unlike">${array[i].dislike}
                            <img src="../public/avt/dislike.png">
                        </div>
                    </div>
                </li>
                <li class="guiz-awards-header-day"><input class="Key" data_key="${array[i].id}" type="checkbox"></li>
            </ul>`;
            }
            document.querySelector(".gui-window-awards").innerHTML = Rank;
            const Key = document.querySelectorAll(".Key");
            for (let i = 0; i < Key.length; i++) {
                Key[i].onclick = () => {
                    document.querySelector(".Done").style.display = "flex";
                    let id = Key[i].getAttribute("data_key");
                    if (Key[i].checked == true) {
                        idDelete.push(id);
                    }
                    else {
                        if (idDelete.includes(id)) {
                            idDelete.splice(idDelete.indexOf(id), 1);
                        }
                    }
                }
            }
            const inputContent = document.querySelectorAll(".inputContent");
            for (let i = 0; i < inputContent.length; i++) {
                inputContent[i].oninput = () => {
                    document.querySelector(".Done").style.display = "flex";
                    let content = inputContent[i].value;
                    let idTest = inputContent[i].getAttribute("data_id");
                    if (id.includes(idTest)) {
                        Content[id.indexOf(idTest)] = content;
                    }
                    else {
                        id.push(idTest);
                        Content.push(content);
                    }
                }

            }
            document.querySelector(".Done").onclick = () => {
                for (let i = 0; i < id.length; i++) {
                    // console.log(id[i] + "\n" + Content[i]);

                    $.ajax({
                        type: 'POST',
                        data: {
                            type: 2,
                            idTest: id[i],
                            Content: Content[i],
                        },
                        url: "../php/QuanlyList.php",
                        // success: (data) => {
                        //     console.log(data);

                        // }
                    });
                }
                //console.log(idDelete.length);

                for (let i = 0; i < idDelete.length; i++) {
                    $.ajax({
                        type: 'POST',
                        data: {
                            type: 1,
                            idChange: idDelete[i],
                        },
                        url: "../php/QuanlyList.php",
                        // success: (data) => {
                        //     console.log(data);

                        // }
                    });
                }
                location.reload();
            }
        }
    })
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