<?php include 'includes/header.php'; ?>

<style>
    .timeline-wrapper {
        position: relative;
        z-index: 1;
    }

    /* เส้น timeline */
    .timeline-line {
        position: absolute;
        top: 50px;
        left: 0;
        right: 0;
        height: 4px;
        background: #dbe4f0;
        z-index: 1;
    }

    /* item */
    .timeline-item {
        position: relative;
        z-index: 2;

        li {
            position: relative;
            z-index: 2;
            list-style: none;
            padding: 0;
        }

        button {
            border: none !important;
        }
    }

    /* icon */
    .icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: white;
        font-size: 24px;
    }

    /* สี */
    .pink {
        background: #ff4f8b;
    }

    .blue {
        background: #5b9cff;
    }

    .orange {
        background: #ffa552;
    }

    /* mobile */
    @media (max-width: 768px) {
        .timeline-wrapper svg {
            display: none;
        }

        .timeline-item {
            margin-bottom: 30px;
        }
    }

    .wrapsec1 {
        display: flex;
        justify-content: space-between;
    }

    .wrapsec1 .group {
        margin-right: 221px;
    }

    .item1 {
        display: flex;
        justify-content: flex-start;
        column-gap: 57px;
    }

    .timeline-wrapper svg {
        position: absolute;
        z-index: -1;
    }

    .item2 .row {
        justify-content: end;
    }

    .roadmap-center {
        flex-direction: row-reverse;
        display: flex;
        column-gap: 17px;
    }

    .timeline2 {
        flex-direction: row-reverse;
    }

    .green {
        background: #2CD776;
    }

    .course-content {
        position: relative;
        z-index: 999999;
    }
</style>



<div class="timeline-wrapper py-5 bg-roadmap" id="tab-section2" role="tablist">

    <div class="container">
        <svg viewBox="0 0 1000 400" class="w-100">
            <path d="
        M 50 160 
        L 600 160
        C 700 120 700 20 570 22
        L 400 22" fill="none" stroke="#ffffff" stroke-width="6" stroke-linecap="round"></path>
        </svg>

        <div class="wrapsec1">
            <div class="group">
                <h2 class="fw-bold mb-3" id="titleText">
                    การผลิต บรรจุภัณฑ์พลาสติก <br>
                    ผลิตภัณฑ์เครื่องดื่ม การวิจัยและพัฒนา
                </h2>

                <p class="text-muted mb-5">
                    <i class="bi bi-calendar"></i> Period 170 Day (14 Jul 2022 - 31 Dec 2026)
                </p>
            </div>

            <div class="row g-4 timeline-items item1">

                <!-- item -->
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="timeline-item show">
                        <div class="icon green">
                            <img class="w-70" src="assets/images/check.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <div class="timeline-item show">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active icon orange" id="btn1" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <img class="w-100" src="assets/images/diskette.svg" alt="" srcset="">
                            </button>
                        </li>

                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="item2">
            <div class="row g-4 timeline-items item1">
                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item show roadmap-center">
                        <li class="nav-item" role="presentation">
                            <i class="bi bi-megaphone"></i>
                            <button class="nav-link icon orange" id="btn2" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <img class="w-100" src="assets/images/code.svg" alt="" srcset="">
                            </button>
                        </li>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="timeline-wrapper">


            <div class="row timeline-items timeline2">

                <!-- item -->

                <div class="col-12 col-md-6 col-lg-2 text-center">

                </div>



                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item">
                        <div class="icon blue">
                            <img class="w-70" src="assets/images/domain.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item">
                        <div class="icon blue">
                            <img class="w-70" src="assets/images/book-roadmap.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item">
                        <div class="icon blue">
                            <img class="w-70" src="assets/images/code.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item">
                        <div class="icon blue">
                            <img class="w-70" src="assets/images/diskette.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-2 text-center">
                    <div class="timeline-item">
                        <div class="icon pink">
                            <img class="w-70" src="assets/images/party-popper 1.svg" alt="" srcset="">
                        </div>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>


<main class="container-fluid ">

    <div class="course-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">
                    <div class="col-lg-5">
                        <div class="card-main mb-3">
                            <img class="w-100" src="assets/images/course1.png" alt="" srcset="">
                            <div class="card-body">
                                <progress class="progressbar-inp" value="70" max="100"> 70% </progress>
                                <h5 class="card-title">70 % กำลังเรียน</h5>
                                <div class="admin-course">

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>เจ้าของหลักสูตร :</td>
                                                <td>คุณทวี เสริมศิล</td>
                                            </tr>
                                            <tr>
                                                <td>ผู้อนุมัติหลักสูตร :</td>
                                                <td>คุณวิรัช กิจเตชะการ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-main mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-0">ระยะเวลา</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/clock.png" alt="" srcset="">
                                        <p class="mx-0">2 ชั่วโมง</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-0">จำนวนบทเรียน</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/book.png" alt="" srcset="">
                                        <p class="mx-0">4 บทเรียน</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-main mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-0">สถานะ Certificate</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/cer1.png" alt="" srcset="">
                                        <p class="mx-0">ยังไม่ผ่านเงื่อนไข</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-0">แบบประเมินหลักสูตร</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/cer2.png" alt="" srcset="">
                                        <p class="mx-0">ทำแบบประเมิน</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="period-day">
                            <p>Period 10 Day (14 / jul / 2022 - 24 Dec / 2026)</p>
                        </div>

                        <div class="course-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="course-detail" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">รายละเอียดหลักสูตร</button>
                                    <button class="nav-link" id="course-list" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" tabindex="-1">รายการหลักสูตร</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="course-detail">
                                    Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                                    <br>
                                    <br>
                                    Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                                </div>

                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="course-list">
                                    <div class="course-list">
                                        <div class="list-top">
                                            <div>
                                                <span>บทที่ 1</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary d-flex"><img width="24px" class="mx-1" src="assets/images/download-doc.png" alt="" srcset="">เอกสารประกอบการเรียน</button>
                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-true.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <p>คะแนนที่ได้</p>
                                                <div class="score-list">
                                                    <p>8/15</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-haft.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 1</p>
                                            </div>

                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <div class="link-btn">
                                                    <button type="button" class="btn btn-link"><a href="index.php">ดูวิดีโอ</a></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <div class="link-btn">
                                                    <button type="button" class="btn btn-link"><a href="index.php">ทำข้อสอบ</a></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 2</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 2</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 3</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 4</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>


                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 4</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 4</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card-main mb-3">
                            <img class="w-100" src="assets/images/course2.png" alt="" srcset="">
                            <div class="card-body">
                                <progress class="progressbar-inp" value="70" max="100"> 70% </progress>
                                <h5 class="card-title">85% กำลังเรียน</h5>
                                <div class="admin-course">

                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>เจ้าของหลักสูตร :</td>
                                                <td>คุณทวี เสริมศิล</td>
                                            </tr>
                                            <tr>
                                                <td>ผู้อนุมัติหลักสูตร :</td>
                                                <td>คุณวิรัช กิจเตชะการ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card-main mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-0">ระยะเวลา</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/clock.png" alt="" srcset="">
                                        <p class="mx-0">2 ชั่วโมง</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-0">จำนวนบทเรียน</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/book.png" alt="" srcset="">
                                        <p class="mx-0">4 บทเรียน</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-main mb-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="mb-0">สถานะ Certificate</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/cer1.png" alt="" srcset="">
                                        <p class="mx-0">ยังไม่ผ่านเงื่อนไข</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-0">แบบประเมินหลักสูตร</p>
                                    <div class="wrap-course-clild">
                                        <img src="assets/images/cer2.png" alt="" srcset="">
                                        <p class="mx-0">ทำแบบประเมิน</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="period-day">
                            <p>Period 170 Day (14 / jul / 2022 - 31 Dec / 2026)</p>
                        </div>

                        <div class="course-tab">
                            <nav>
                                <div class="nav nav-tabs" id="tabcourse3" role="tablist">
                                    <button class="nav-link active" id="course-detail" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="true">รายละเอียดหลักสูตร</button>
                                    <button class="nav-link" id="course-list" data-bs-toggle="tab" data-bs-target="#course3" type="button" role="tab" aria-controls="course3" aria-selected="false" tabindex="-1">รายการหลักสูตร</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="nav3" role="tabpanel" aria-labelledby="course-detail">
                                    Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                                    <br>
                                    <br>
                                    Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                                </div>

                                <div class="tab-pane fade" id="course3" role="tabpanel" aria-labelledby="course-list">
                                    <div class="course-list">
                                        <div class="list-top">
                                            <div>
                                                <span>บทที่ 1</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary d-flex"><img width="24px" class="mx-1" src="assets/images/download-doc.png" alt="" srcset="">เอกสารประกอบการเรียน</button>
                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-true.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <p>คะแนนที่ได้</p>
                                                <div class="score-list">
                                                    <p>8/15</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-haft.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 1</p>
                                            </div>

                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <div class="link-btn">
                                                    <button type="button" class="btn btn-link"><a href="index.php">ดูวิดีโอ</a></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-course">

                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <div class="link-btn">
                                                    <button type="button" class="btn btn-link"><a href="index.php">ทำข้อสอบ</a></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 2</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 2</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 3</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 4</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>


                                        <div class="list-second">
                                            <div>
                                                <span>บทที่ 4</span>
                                                <span>ชื่อบทเรียน</span>
                                            </div>
                                            <button type="button" class="btn btn-secondary bg-white d-flex">ไม่มีเอกสารประกอบ</button>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบก่อนเรียน</p>
                                            </div>

                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>วิดีโอบทที่ 4</p>
                                            </div>
                                            <div class="group2">
                                                <img style="width: 20px; height: 20px;" src="assets/images/clock.png" alt="" srcset="">
                                                <p>30 นาที</p>
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                        <div class="list-course">
                                            <div class="group1">
                                                <img src="assets/images/check-lean.svg" alt="" srcset="">
                                                <p>ทำข้อสอบหลังเรียน</p>
                                            </div>
                                            <div class="group2">
                                                <img src="assets/images/keylog.svg" alt="" srcset="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>







</main>



</main>

<script>
    // Optional: animation เล็กๆ ตอน scroll
    const items = document.querySelectorAll(".timeline-item");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    }, {
        threshold: 0.3
    });
</script>

<script>
    const text = document.getElementById("titleText");

    document.getElementById("btn1").addEventListener("click", function() {
        text.innerHTML = "การผลิต บรรจุภัณฑ์พลาสติก <br> ผลิตภัณฑ์เครื่องดื่ม การวิจัยและพัฒนา";
      
    });

    document.getElementById("btn2").addEventListener("click", function() {
        text.innerHTML = "ผลิตภัณฑ์เครื่องดื่ม การวิจัยและพัฒนา";
    });
</script>

<?php include 'includes/footer.php'; ?>