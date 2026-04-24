<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyo seikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navmain navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.jpg" class="logonav" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><img src="assets/images/iconhome.png" class="logohome" alt="" srcset=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">หลักสูตร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ข่าวประชาสัมพันธ์</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">คำถามที่พบบ่อย</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">วิธีการใช้งาน</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ติดต่อเรา</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-primary w-100 text-center"
                        onclick="window.location.href='Login.php'">
                        เข้าสู่ระบบ
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <style>
        .stepbanner {
            position: relative;
        }

        .banner-img {
            width: 100%;
        }

        .logo {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 400px;
        }

        .container-menu {
            margin-top: 20px;
        }

        .menu-title {
            font-size: 70px;
            font-weight: bold;
            margin-left: 50px;
        }

        .menu-title span {
            color: #2F80ED;
        }

        .menu-card {
            width: 170px;
            height: 120px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .menu-card:hover {
            transform: translateY(-5px);
        }

        .menu-card img {
            margin-right: 60px;
            width: 40px;
            margin-bottom: 8px;
        }

        .menu-card p {
            margin: 0;
            font-size: 24px;
        }

        .pink {
            background-color: #FDE7EB;
        }

        .blue {
            background-color: #E2F0FF;
        }

        .orange {
            background-color: #FFEFE1;
        }

        .green {
            background-color: #E4F6DF;
        }

        .card-title {
            margin-left: 10px;
        }

        .card-img-top {
            display: block;
            width: 100%;
            height: auto;
            padding: 10px 20px;
            border-radius: 10px;
            object-fit: cover;
        }

        .course-container {
            background-color: #F7F7F7;
            padding: 20px;
            margin-top: 15px;
        }

        .course-header {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .course-header .title {
            display: inline-block;
            position: relative;
        }

        .course-header .title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 100%;
            height: 3px;
            background-color: #0D6EFD;
        }

        .navbar-brand {
            font-size: 14px;
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .navbar-brand img {
            object-fit: cover;
            border-radius: 50%;
        }

        .card-img-wrapper {
            position: relative;
        }

        .rating-btn {
            position: absolute;
            top: 10px;
            left: 30px;

            display: flex;
            align-items: center;
            gap: 5px;

            border-radius: 20px;
            padding: 3px 10px;
            font-size: 14px;
            margin: 10px 10px;
        }

        .rating-btn i {
            color: gold;
        }

        .card {
            border-radius: 20px;
        }

        .cardnews {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            margin-top: 20px;
        }

        .cardnews img {

            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: 0.3s;
        }

        .card-body {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 20px;
            color: white;
            background-color: rgba(3, 1, 13, 0.5);

        }

        .card-body h5 {
            margin-left: 0 !important;
            font-size: 20px;
            font-weight: bold;
        }

        .card-body p {
            margin: 5px 0;
            font-size: 14px;
        }

        .card- small {
            font-size: 13px;
            opacity: 0.8;
        }

        .hero-box {
            padding: 40px;
            background: linear-gradient(89.66deg, #FFFFFF -3.21%, rgba(217, 235, 254, 0.8) 16.97%, rgba(255, 218, 231, 0.8) 75.86%, #FFFFFF 106.62%),
                radial-gradient(43.89% 43.89% at 50.03% 56.11%, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.2) 100%);

            border: 1px solid rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            box-shadow: none;
            margin: 40px auto;
        }

        .btn-explore {
            background-color: #1869E3 !important;
        }

        h1 {
            text-align: center;
            font-size: 100px;
        }

        p {
            margin-top: 50px;
            text-align: center;

        }

        .buttons {
            text-align: center;
            margin-top: 50px;

        }

        .accordion {
            width: 60%;
            margin: auto;
        }

        .faq-title {
            display: block;
            width: fit-content;
            margin: 50px auto 0;
            position: relative;
            text-align: center;
        }

        .faq-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 3px;
            background-color: #0D6EFD;
        }

        .accordion-body p {
            margin-top: 10px;
            text-align: left;
            font-size: 16px;
        }

        @media (min-width: 1400px) {

            .container {
                max-width: 1400px;
            }
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        .hero-box {
            padding: 30px 20px;
        }

        h1 {
            font-size: clamp(32px, 6vw, 100px);
        }

        p {
            font-size: clamp(14px, 2vw, 18px);
            margin-top: 20px;
        }

        .menu-title {
            font-size: clamp(28px, 5vw, 70px);
            margin-left: 20px;
        }

        .menu-card {
            width: 100%;
            max-width: 170px;
        }

        @media (max-width: 992px) {

            .container-menu .col-4,
            .container-menu .col-8 {
                width: 100%;
            }

            .container-menu .col-8 {
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center !important;
            }

            .menu-card {
                flex: 1 1 45%;
            }
        }

        .logo {
            width: clamp(120px, 25vw, 400px);
            bottom: 10px;
            right: 10px;
        }

        @media (max-width: 768px) {
            .row-cols-md-3>* {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 992px) {

            .col-8,
            .col-4 {
                width: 100%;
            }

            .cardnews img {
                height: 200px;
            }
        }

        video {
            border-radius: 15px;
        }

        .accordion {
            width: 90%;
        }

        @media (max-width: 768px) {
            .row.align-items-start>div {
                width: 100%;
                margin-bottom: 20px;
            }

            iframe {
                width: 100%;
                height: 250px;
            }
        }
    </style>

    <div class="stepbanner">
        <img class="w-100 banner-img" src="assets/images/banner.png" alt="">
        <img class="logo" src="assets/images/logo2.jpg" alt="">
    </div>


    <main class="container-fluid ">
        <div class="row align-items-center container-menu">
            <div class="col-4">
                <h2 class="menu-title">เมนู<br><span>ของเรา</span></h2>
            </div>

            <div class="col-8 d-flex justify-content-between">
                <div class="menu-card pink" onclick="window.location.href='course-detail.php'">
                    <img src="assets/images/online-test.png">
                    <p>หลักสูตรของฉัน</p>
                </div>

                <div class="menu-card blue" onclick="window.location.href='download.php'">
                    <img src="assets/images/attachment.png">
                    <p>เอกสารดาวน์โหลด</p>
                </div>

                <div class="menu-card orange" onclick="window.location.href='Usage.php'">
                    <img src="assets/images/user-guide.png">
                    <p>วิธีการใช้งาน</p>
                </div>

                <div class="menu-card green" onclick="window.location.href='Status.php'">
                    <img src="assets/images/check-list.png">
                    <p>สถานะการเรียน</p>
                </div>
            </div>
        </div>

        <div class="course-container">
            <div class="d-flex align-items-center justify-content-between course-header">
                <h2 class="mb-0 title">หลักสูตรของเรา</h2>
                <button type="button" class="btn btn-dark rounded-pill px-4 py-2">
                    ดูทั้งหมด
                </button>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/Graph.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-coure">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/keyboard.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-course">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/meet.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-course">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/board.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-course">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/screen.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-course">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="assets/images/notebook.png" class="card-img-top" alt="...">

                            <button type="button" class="btn btn-light rating-btn">
                                <i class="bi bi-star-fill"></i>
                                <span>5.0</span>
                            </button>
                        </div>

                        <div class="card-body-course">
                            <h5 class="card-title">Entrepreneurship & Business & Growth Strategies Course</h5>
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="one group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/Book1.png"> 47 lesson</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Two group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/circle.png"> 11h 30m</button>
                                </div>
                                <div class="btn-group" role="group" aria-label="Third group">
                                    <button type="button" class="btn btn-outline-secondary" style="border-radius: 50px; margin:5px 0 0 8px;"> <img src="assets/images/hat.png"> 432 students</button>
                                </div>
                            </div>
                        </div>
                        <a class="navbar-brand d-flex align-items-center mt-2" href="#">
                            <img src="assets/images/Ellipse.png" alt="Logo" width="30" height="30" class="me-2">
                            <span>Sausage Rcode</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between course-header">
            <h2 class="mb-0 title">ข่าวประชาสัมพันธ์</h2>
            <button type="button" class="btn btn-dark rounded-pill px-4 py-2"
                onclick="window.location.href='News.php'">
                ดูทั้งหมด
            </button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="cardnews">
                        <img src="https://cdn.pixabay.com/photo/2026/03/03/10/12/tylijura-car-10153221_1280.jpg">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <small><i class="bi bi-calendar4"></i> 10 เมษายน 2564</small><br>
                            <small>Name What is Lorem Ipsum</small>
                            <!--<p class=" card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="cardnews">
                        <img src="https://cdn.pixabay.com/photo/2026/03/03/10/12/tylijura-car-10153221_1280.jpg">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <small><i class="bi bi-calendar4"></i> 10 เมษายน 2564</small><br>
                            <small>Name What is Lorem Ipsum</small>
                            <!--<p class=" card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="cardnews">
                        <img src="https://cdn.pixabay.com/photo/2026/03/03/10/12/tylijura-car-10153221_1280.jpg">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <small><i class="bi bi-calendar4"></i> 10 เมษายน 2564</small><br>
                            <small>Name What is Lorem Ipsum</small>
                            <!--<p class=" card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="cardnews">
                        <img src="https://cdn.pixabay.com/photo/2026/03/03/10/12/tylijura-car-10153221_1280.jpg">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <small><i class="bi bi-calendar4"></i> 10 เมษายน 2564</small><br>
                            <small>Name What is Lorem Ipsum</small>
                            <!--<p class=" card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="cardnews">
                        <img src="https://cdn.pixabay.com/photo/2026/03/03/10/12/tylijura-car-10153221_1280.jpg">
                        <div class="card-body">
                            <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <small><i class="bi bi-calendar4"></i> 10 เมษายน 2564</small><br>
                            <small>Name What is Lorem Ipsum</small>
                            <!--<p class=" card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-box">
            <div class="container">
                <h1>
                    Learn and Grow with <br>
                    Top <span>Online Courses</span>
                </h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    <br>
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
                <div class="buttons">
                    <button class="btn btn-primary btn-explore">Explore Courses</button>
                    <button class="btn btn-outline-dark" style="border-radius: 50px;"
                        onclick="window.location.href='Contact.php'">Contact Us</button>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-between course-header">
            <h2 class="mb-0 title">วิดีโอแนะนำ</h2>
            <button type="button" class="btn btn-dark rounded-pill px-4 py-2"
                onclick="window.location.href='Video.php'">

                ดูทั้งหมด
            </button>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <video id="modalVideo1" width="100%" controls autoplay>
                        <source src="https://cdn.pixabay.com/video/2025/05/06/277042_large.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <video id="modalVideo1" width="100%" controls autoplay>
                        <source src="https://cdn.pixabay.com/video/2025/05/06/277042_large.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <video id="modalVideo1" width="100%" controls autoplay>
                        <source src="https://cdn.pixabay.com/video/2025/05/06/277042_large.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>

        <div class="accordion" id="accordionExample">
            <h3 class="faq-title" style="font-size:50px; margin-top:50px;">
                คำถามที่พบบ่อย
            </h3>
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1.การเรียน/สอบ ผ่านระบบ E-Learning
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. ลืมรหัสผ่าน
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. วิธีแจ้งปัญหาการใช้งาน
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. สามารถใช้งานภาษาอะไรได้บ้าง
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        5. วิธีการเรียนตาม Poad map
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="button" class="btn btn-dark rounded-pill px-4 py-2"
                onclick="window.location.href='Faq.php'">
                ดูทั้งหมด
            </button>
        </div>

        <div class="container">
            <div class="row align-items-start" style="margin-top: 50px;">
                <div class="d-flex align-items-center mb-3">
                    <img src="assets/images/logo2.jpg" style="width:500px;" class="me-2">
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled text-muted">
                        <li><strong>หน้าแรก</strong></li>
                        <li>เกี่ยวกับเรา</li>
                        <li>ผลิตภัณฑ์ของเรา</li>
                        <li>ร่วมงานกับเรา</li>
                        <li>ติดต่อเรา</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <ul class="list-unstyled text-muted">
                        <li><strong>สำนักงานใหญ่</strong></li>
                        <br>
                        <li>95 หมู่ 3, สวนอุตสาหกรรมโรจนะ 2,</li>
                        <li>ตำบล บ้านช้าง, อำเภอ อุทัย,</li>
                        <li>จังหวัด พระนครศรีอยุธยา. 13210 ประเทศไทย</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <ul class="list-unstyled text-muted">
                        <br>
                        <li>Tel: +66-35-746-655</li>
                        <li>Email: info@toyoseikan.co.th</li>
                        <br>
                        <i class="bi bi-line"></i> <i class="bi bi-facebook"> </i><i class="bi bi-twitter"></i> <i class="bi bi-instagram"></i>
                    </ul>

                </div>

                <div class="col-md-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.3392943677554!2d100.67093657434177!3d14.323083783812365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d8966aaaaaaab%3A0x84604855c1631415!2zVG95byBTZWlrYW4oVGhhaWxhbmQpIENvLixMdGQuICjguJrguKPguLTguKnguLHguJcg4LmC4LiV4LmC4LiiIOC5hOC4i-C4geC4seC4mSAo4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4LiiKSDguIjguLPguIHguLHguJQp!5e1!3m2!1sth!2sth!4v1775620405093!5m2!1sth!2sth" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>