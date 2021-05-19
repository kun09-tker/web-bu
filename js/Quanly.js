let req = "";
const raking = (req) => {
    $.ajax({
        type: 'POST',
        data: {
            req: req,
        },
        url: "../php/Quanly.php",
        success: (data) => {
            //console.log(data);

            let array = JSON.parse(data);
            let Rank = `<ul class="guiz-awards-row guiz-awards-header">
            <li class="guiz-awards-header-name">id</li>
            <li class="guiz-awards-header-name">Tên</li>
            <li class="guiz-awards-header-user">Username</li>
            <li class="guiz-awards-header-exactly">Email</li>
            <li class="guiz-awards-header-time">WPM</li>
            <li class="guiz-awards-header-day">Khóa</li>
             </ul>`;
            let key = "";
            for (let i = 0; i < array.length; i++) {
                if (array[i].check != "no verified") key = "checked";
                else key = "";
                Rank += `<ul class="guiz-awards-row guiz-awards-header">
                <li class="guiz-awards-header-name">${array[i].id}</li>
                <li class="guiz-awards-name">${array[i].ten}</li>
                <li class="guiz-awards-user">${array[i].username} </li>
                <li class="guiz-awards-exactly">${array[i].email}</li>
                <li class="guiz-awards-time">${array[i].wpm}</li>
                <li class="guiz-awards-header-day"><input class="Key" data_key="${array[i].id}" type="checkbox" ${key}></li>
            </ul>`;
            }
            document.querySelector(".gui-window-awards").innerHTML = Rank;
            const Key = document.querySelectorAll(".Key");
            for (let i = 0; i < Key.length; i++) {
                Key[i].onclick = () => {
                    let id = Key[i].getAttribute("data_key");
                    let status = Key[i].checked;
                    $.ajax({
                        type: 'POST',
                        data: {
                            type: 1,
                            idChange: id,
                            statusChange: status,
                        },
                        url: "../php/Quanly.php",
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