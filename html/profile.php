<?php
 session_start();
 error_reporting(0);
require "../php/xuly.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css?v=<?php echo time()?>">
    <title>profile</title>
</head>
<body>
    <div class="pro-name">
        <div class="avatar"></div>
        <h2>Name</h2>
        <div class="type">
            <div class="hoat-anh stamp">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="8.5" cy="7" r="4"></circle><path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path><path d="M16 11l2 2l4 -4"></path></svg>
                <path stroke="none" d="M0 0h24v24H0z"></path>
                <circle cx="8.5" cy="7" r="4"></circle>
                <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                <path d="M16 11l2 2l4 -4"></path>
                </svg>
            </div>

            <div>
                <div class="strong">loại tài khoản:Miễn thi</div>
            </div>
        </div>
    </div>
    <div class="info">
        <label for="r1">Thông tin tài khoản</label>
        <label for="r2">Đổi mật khẩu</label>
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <div class="hightlight"></div>
        <div class="line"></div>
        <div class="slides">
            <div class="slide-1">
                <form action="" class="form">
                    <div class="box-slide-1 box-ho">
                        <label for="fname">Họ</label>
                        <input type="text" name="fname">
                    </div>
                    <div class="box-slide-1 box-ten">
                        <label for="lname">Tên</label>
                        <input type="text" name="lname">    
                    </div>
                    <div class="box-slide-1 box-username">
                        <label for="Uname">Username</label>
                        <input type="text" name="Uname">    
                    </div>
                    <div class="box-slide-1 box-email">
                        <label for="email">Email</label>
                        <input type="text" name="email">    
                    </div>
                    <input type="submit" name="submit" class="cap-nhat" value="Cập nhật">
                </form>
            </div>
            <div class="slide-2">
                <form action="" class="form">
                    <div class="box-slide-2 box-mk-cu">
                        <label for="old-pass">Mật khẩu cũ</label>
                        <input type="password" name="old-pass" placeholder="Mật khẩu cũ">
                    </div>
                    <div class="box-slide-2 box-mk-moi">
                        <label for="new-pass">Mật khẩu mới</label>
                        <input type="password" name="new-pass" placeholder="Mật khẩu mới">
                    </div>
                    <div class="box-slide-2 box-xac-nhan-mk">
                        <label for="check">Xác nhận mật khẩu mới</label>
                        <input type="password" name="check" placeholder="Xác nhận mật khẩu mới">
                    </div>
                    <input type="submit" name="submit" class="cap-nhat" value="Cập nhật">
                </form>
            </div>
        </div>
    </div>
</body>
</html>