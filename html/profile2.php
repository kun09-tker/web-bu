<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing_Web-bu</title>
    <link rel="stylesheet" href="../css/thanh-menu.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="../css/profile2.css?v=<?php echo time() ?>">
</head>

<body>
    <?php
        include './menu.php'
    ?>
    <main id="layout-main" class="group">
        <div id="layout-content" class="group">
            <div id="content" class="group">
                <div id="zone zone-content">
                    <div id="my-cv" class="container user-cv">
                        <div id="cv-left" class="col-md-3 col-sm-12 white">
                            <div id="user-profile">
                                <div class="user-avatar">
                                    <img id="img-user" src="../public/avt/0.jpg">
                                </div>
                                <span id="user-name" title="KevinHuynh">KevinHuynh</span>
                                <div>
                                    <span id="number-coin"></span>
                                    <span class="user-level"><span id="level"></span></span>
                                    <div style="text-align: center">
                                        <span class="total-xp-label">Tiến độ học tập</span>
                                    </div>
                                </div>
                                <div class="level-progress">
                                    <div class="current-progress">
                                        <div class="standard-progress-bar"
                                            style="position: relative; overflow: hidden;">
                                            <div class="background"
                                                style="overflow: hidden; width: 70%; position: absolute; left: 0px; top: 0px; height: 100%;">
                                                <div class="background-render"
                                                    style="background: linear-gradient(to right, rgb(92, 236, 209), rgb(49, 111, 196)); height: 100%; width: 204px;">
                                                </div>
                                            </div> <span class="text" style="z-index: 1;">50/71</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="break-line"></div>
                            <div id="container-user-achievement">
                                <h3>
                                    Thành tích luyện tập
                                </h3>
                                <h4>
                                    75 WPM
                                </h4>
                                <h5>
                                    Accuracy: 92.23%
                                </h5>
                                <ul id="user-achievement"></ul>
                            </div>
                            <div class="break-line"></div>
                            <div id="infomation">
                                <h3>
                                    Thông tin
                                    <i data-toggle="modal" data-target="#modal-edit-achievement" id="edit-achievement"
                                        class="cl-icon-pen pull-right" style="margin-right:12px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </i>
                                </h3>

                                <ul id="user-info-section">
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg"
                                                    className="h-6 w-6" width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg></i></span>
                                        <span>Huỳnh Mẫn Đạt</span><span class="pull-right"><i
                                                class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg"
                                                    className="h-6 w-6" width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg></i></span>
                                        <span>boy.cool46@yahoo.com</span><span class="pull-right"><i
                                                class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg"
                                                    className="h-6 w-6" width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg></i></span> <span>-</span><span class="pull-right"><i
                                                class="cl-icon-lock-alt"></i><i class="cl-icon-angle-down"></i></span>
                                    </li>
                                    <li><span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg"
                                                    className="h-6 w-6" width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg></i></span> <span>-</span><span class="pull-right"><i
                                                class="cl-icon-internet"></i><i class="cl-icon-angle-down"
                                                aria-hidden="true"></i>
                                        </span>
                                    </li>
                                    <li>
                                        <span><i class="cl-icon-envelope"><svg xmlns="http://www.w3.org/2000/svg"
                                                    className="h-6 w-6" width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg></i>
                                        </span>
                                        <span>2020-08-23</span>
                                        <span class="pull-right"><i class="cl-icon-internet"></i><i
                                                class="cl-icon-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>