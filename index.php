<?php $css = "css/home.css";
include "includes/header.php" ?>

<style>
    .home_page_style {
        .logo-banner {
            width: 33%;
            margin-bottom: 2%;
        }

        .services-menu {
            img {
                margin-left: 5%;
                margin-top: 5%;
                width: 30%;
            }

            .course-menu {
                background-color: #FDE7EB;
            }

            .document-menu {
                background-color: #E2F0FF;
            }

            .guild-menu {
                background-color: #FFEFE1;
            }

            .status-menu {
                background-color: #E4F6DF;
            }
        }

        .our-course {
            background-color: #F7F7F7;

            .our-course-header {
                display: flex;
                justify-content: space-between;

                h1 {
                    border-bottom: 5px #1F7BCC solid;
                    padding-bottom: 5px;
                }
            }

            .card {
                background-color: white;

                .card-top {
                    span {
                        margin-top: 2%;
                        margin-left: 2%;
                    }

                    img {
                        max-height: 250px;
                    }
                }

                span {
                    color: black;
                }

                .avatar img {
                    width: 40px;
                }
            }
        }

        .our-announcement {
            .our-announcement-header {
                display: flex;
                justify-content: space-between;

                h1 {
                    border-bottom: 5px #1F7BCC solid;
                    padding-bottom: 5px;
                }
            }

            .card {
                img {
                    max-height: 350px;
                    height: 100%;
                }

                .overlay-content {
                    background-color: rgba(0, 0, 0, 50%);
                    bottom: 0;

                    h5 {
                        font-size: medium;
                    }
                }
            }
        }

        .online-course {
            background: linear-gradient(89.66deg, #FFFFFF -3.21%, rgba(217, 235, 254, 0.8) 16.97%, rgba(255, 218, 231, 0.8) 75.86%, #FFFFFF 106.62%),
                radial-gradient(43.89% 43.89% at 50.03% 56.11%, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.2) 100%);


            h1 {
                margin-top: 100px;
                font-size: 100px;
            }

            p {
                max-width: 600px;
            }
        }

        .our-video {
            background-color: #F7F7F7;

            .our-video-header {
                display: flex;
                justify-content: space-between;

                h1 {
                    border-bottom: 5px #1F7BCC solid;
                    padding-bottom: 5px;
                }
            }

            .card {
                background-color: white;

                .card-top {
                    span {
                        margin-top: 2%;
                        margin-left: 2%;
                    }
                }

                span {
                    color: black;
                }
            }
        }

        .card {
            border: none;
        }

        .our-questions {
            h1 {
                font-size: 50px;
                border-bottom: 5px #1F7BCC solid;
                padding-bottom: 5px;
            }

            .accordion {
                max-width: 750px;
                width: 100%;
            }
        }

    }
</style>

<main class="home_page_style">
    <div class="position-relative">
        <img src="assets/images/e-learning-banner.png" alt="banner image" class="img-fluid">
        <img src="assets/images/toyo-seikan-logo-long.jpg" alt="logo image"
            class="img-fluid position-absolute bottom-0 end-0 logo-banner">
    </div>

    <div class="container-fluid p-5 services-menu row text-md-start text-center">
        <div class="col-md-3 col-12 ">
            <h1 class="fs-1 menu-header">เมนู<br><span class="text-primary">ของเรา</span></h1>
        </div>


        <div class="col-md-2 col-12">
            <div class="card course-menu">
                <img src="assets/images/computer.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title fw-bold">หลักสูตรของฉัน</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-12">
            <div class="card document-menu">
                <img src="assets/images/document-download.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title fw-bold">เอกสารดาวน์โหลด</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-12">
            <div class="card guild-menu">
                <img src="assets/images/user-guild.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title fw-bold">วิธีการใช้งาน</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-12">
            <div class="card status-menu">
                <img src="assets/images/check-list.png" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title fw-bold">สถานะการเรียน</h5>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid our-course p-5">
        <div class="w-100 our-course-header mb-4">
            <div>
                <h1>หลักสูตรของเรา</h1>
            </div>

            <div>
                <a href="#" class="btn btn-dark">ดูทั้งหมด</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-1.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-2.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-3.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-4.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-5.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 shadow">
                    <div class="card-top position-relative mx-2 mt-2">
                        <img src="assets/images/courses/course-6.png" alt="course" class="card-img-top">
                        <span class="position-absolute start-0 top-0 bg-light px-2 rounded-pill">&#11088; 5.0</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            Entrepreneurship & Business Growth Strategies Course
                        </h5>
                        <div class="container-fluid mb-3">
                            <div class="d-flex justify-content-start gap-3">
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/open-book.png" alt=""> 47 lesson
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/time.png" alt=""> 11h 30m
                                </span>
                                <span class="badge rounded-pill border border-secondary">
                                    <img src="assets/images/student.png" alt=""> 432 students
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1 avatar">
                            <img src="assets/images/users/user-1.png" alt="user image" class="rounded-circle">
                            <h5>Sausage Rcode</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid our-announcement p-5">
        <div class="w-100 our-announcement-header mb-4">
            <div>
                <h1>ข่าวประชาสัมพันธ์</h1>
            </div>

            <div>
                <a href="#" class="btn btn-dark">ดูทั้งหมด</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="card position-relative h-100 w-100">
                    <img src="assets/images/announcements/am-1.png" alt="announcement image" class="card-img">
                    <div class="card-img-overlay text-light p-0">
                        <div class="overlay-content container-fluid position-absolute bottom-0">
                            <h5 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Molestias
                                autem
                                neque impedit? Rem sequi hic necessitatibus quaerat odit?</h5>
                            <div>
                                <p class="mb-0"><img src="assets/images/calender.png" alt=""> 10 เมษายน 2564</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card position-relative h-100 w-100">
                    <img src="assets/images/announcements/am-2.png" alt="announcement image" class="card-img">
                    <div class="card-img-overlay text-light p-0">
                        <div class="overlay-content container-fluid position-absolute bottom-0">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <div>
                                <p class="mb-0"><img src="assets/images/calender.png" alt=""> 10 เมษายน 2564</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card position-relative h-100 w-100">
                    <img src="assets/images/announcements/am-3.png" alt="announcement image" class="card-img">
                    <div class="card-img-overlay text-light p-0">
                        <div class="overlay-content container-fluid position-absolute bottom-0">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <div>
                                <p class="mb-0"><img src="assets/images/calender.png" alt=""> 10 เมษายน 2564</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card position-relative h-100 w-100">
                    <img src="assets/images/announcements/am-4.png" alt="announcement image" class="card-img">
                    <div class="card-img-overlay text-light p-0">
                        <div class="overlay-content container-fluid position-absolute bottom-0">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <div>
                                <p class="mb-0"><img src="assets/images/calender.png" alt=""> 10 เมษายน 2564</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card position-relative h-100 w-100">
                    <img src="assets/images/announcements/am-5.jpg" alt="announcement image" class="card-img">
                    <div class="card-img-overlay text-light p-0">
                        <div class="overlay-content container-fluid position-absolute bottom-0">
                            <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <div>
                                <p class="mb-0"><img src="assets/images/calender.png" alt=""> 10 เมษายน 2564</p>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="online-course d-flex flex-column justify-content-center align-items-center text-center p-5">
        <h1>Learn and Grow with<br>Top <span class="text-primary">Online Course</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos numquam nihil vero rem impedit
            fugit dolor iure
            consequuntur ea accusantium minima aliquam saepe, recusandae esse veritatis voluptatibus eveniet ab animi?
        </p>
        <div>
            <a href="#" class="btn btn-primary rounded-pill">Explore Courses</a>
            <a href="#" class="btn btn-outline-secondary rounded-pill">Contact Us</a>
        </div>
    </div>

    <div class="container-fluid our-video p-5">
        <div class="w-100 our-video-header mb-4">
            <div>
                <h1>วิดีโอแนะนำ</h1>
            </div>

            <div>
                <a href="#" class="btn btn-dark">ดูทั้งหมด</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="our-questions container-fluid d-flex flex-column justify-content-center align-items-center gap-3">
        <h1>คำถามที่ผมบ่อย</h1>
        <div class="accordion d-grid gap-3" id="questionAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question1">
                        1. การเรียน/สอบ ผ่านระบบ E-Learning
                    </button>
                </h2>
                <div id="question1" class="accordion-collapse collapse show" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, ullam, molestias cumque
                        nihil facilis incidunt sequi labore vitae nesciunt sed tenetur vel facere eligendi dolorem
                        quibusdam modi similique corporis voluptas.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question2">
                        2. ลืมรหัสผ่าน
                    </button>
                </h2>
                <div id="question2" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question3">
                        3. วิธีแจ้งปัญหาการใช้งาน
                    </button>
                </h2>
                <div id="question3" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question4">
                        4. สามารถใช้งานภาษาอะไรได้บ้าง
                    </button>
                </h2>
                <div id="question4" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question5">
                        5. วิธีการเรียนตาม Road map
                    </button>
                </h2>
                <div id="question5" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-dark rounded-pill px-4">ดูทั้งหมด</a>
    </div>

    <div class="our-contact p-5 container-fluid">
        <img src="assets/images/toyo-seikan-logo-long.jpg" alt="logo" class="img-fluid w-25">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="d-flex flex-column">
                    <a href="" class="link-dark link-underline-opacity-0">หน้าแรก</a>
                    <a href="" class="link-secondary link-underline-opacity-0">เกี่ยวกับเรา</a>
                    <a href="" class="link-secondary link-underline-opacity-0">ผลิตภัณท์ของเรา</a>
                    <a href="" class="link-secondary link-underline-opacity-0">รายงานกับเรา</a>
                    <a href="" class="link-secondary link-underline-opacity-0">ติดต่อเรา</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <h5>สำนักงานใหญ่</h5>
                <p>
                    95 หมู่ 3, สวนอุตสาหกรรมโรจนะ 2, ตำบล บ้านช้าง, อำเภอ อุทัย, จังหวัด พระนครศรีอยุธยา. 13210
                    ประเทศไทย
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <p>
                    Tel: +66-35-746-655
                </p>
                <p>Email: info@toyoseikan.co.th</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989644.6361800907!2d100.6733931!3d14.323084099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d8966aaaaaaab%3A0x84604855c1631415!2zVG95byBTZWlrYW4oVGhhaWxhbmQpIENvLixMdGQuICjguJrguKPguLTguKnguLHguJcg4LmC4LiV4LmC4LiiIOC5hOC4i-C4geC4seC4mSAo4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4LiiKSDguIjguLPguIHguLHguJQp!5e0!3m2!1sen!2sth!4v1776323968470!5m2!1sen!2sth"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="ratio ratio-4x3"></iframe>
            </div>
        </div>
    </div>
</main>

<?php $footer = true;
include "includes/footer.php" ?>