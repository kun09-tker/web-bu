<style>
    .container_list {
        display: flex;
        position: absolute;
        background-color: #fff;
        justify-content: space-between;
        border: 1px solid #000;
        border-radius: 4px;
        width: 35rem;
        height: 20rem;
        z-index: 2;
    }

    .container_list .text {
        display: flex;
        width: 30%;
        border-right: solid 1px black;
    }

    .container_list .content {
        display: flex;
        position: relative;
        width: 100%;
        flex-wrap: wrap;
        justify-content: center;
    }

    .container_list .content-title {
        display: flex;
        background-color: rgb(75, 231, 197);
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 1.5rem;
        font-weight: bolder;
    }

    .container_list .content-data {
        display: flex;
        height: 88%;
        width: 94%;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 2px 2px 9px 2px rgba(0, 0, 0, 0.16);
    }
</style>

<body>
    <header>
        <div class="container_list">
            <div class="text"></div>
            <div class="content">
                <div class="content-title">Xem trước</div>
                <div class="content-data"></div>
            </div>
        </div>
    </header>
</body>