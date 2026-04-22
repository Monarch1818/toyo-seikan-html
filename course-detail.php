<?php include 'includes/header.php'; ?>
<style>
    .course-content {
        .progressbar-inp {
            -webkit-appearance: none;
            appearance: none;
        }

        .progressbar-inp {
            width: 100%;
            height: 20px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
            -webkit-appearance: none;
            appearance: none;
        }

        .progressbar-inp::-webkit-progress-bar {
            background-color: #eee;
        }

        .progressbar-inp::-webkit-progress-value {
            background-color: #ffc107;
        }

        .progressbar-inp::-moz-progress-bar {
            background-color: #ffc107;
        }

        .btn-evaluate {
            background-color: #1F7BCC;
            width: 96px;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 5px 8px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
        }

        .btn-evaluate:hover {
            background-color: #1665a8;
        }

        .btn-academic {
            width: 100%;
            max-width: 815px;
            background-color: #0D2EA0;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 15px 20px;
            font-size: clamp(14px, 2vw, 20px);
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-academic .arrow {
            font-size: 28px;
            line-height: 1;
            color: #fff;
        }


        @media (max-width: 992px) {

            .btn-academic {
                width: 100%;
                font-size: 18px;
                margin-top: 10px;
            }

            .card-main {
                padding: 15px;
            }

            .course-content .row {
                gap: 20px;
            }

            .course-tab {
                margin-top: 20px;
            }

            .list-top,
            .list-second {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .list-top button,
            .list-second button {
                width: 100%;
                justify-content: center;
            }

        }


        @media (max-width: 768px) {

            .course-content .row {
                flex-direction: column;
            }

            .card-main {
                margin-bottom: 20px;
            }

            .btn-academic {
                width: 100%;
                font-size: 16px;
                padding: 12px;
            }

            .btn-evaluate {
                width: 20%;
                margin-top: 5px;
            }

            .admin-course table {
                width: 100%;
                font-size: 14px;
            }

            .admin-course td {
                display: block;
                width: 100%;
            }

            .list-course {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .group2 {
                width: 100%;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 10px;
            }

            .group2 p {
                margin: 0;
            }

            .link-btn {
                width: 100%;
            }

            .link-btn button {
                width: 100%;
            }

        }


        @media (max-width: 480px) {
            .btn-evaluate {
                width: 50%;
                margin-top: 5px;
            }

            h5.card-title {
                font-size: 16px;
            }

            .btn-academic {
                font-size: 14px;
            }

            .progressbar-inp {
                height: 14px;
            }

            .wrap-course-clild p {
                font-size: 14px;
            }

        }
    }
</style>

<div class="stepbanner">
    <img class="w-100" src="assets/images/step.png" alt="" srcset="">
</div>

<main class="container-fluid ">

    <div class="course-content">
        <div class="row">
            <div class="col-lg-5">
                <div class="card-main mb-3">
                    <img class="w-100" src="assets/images/course1.png" alt="" srcset="">
                    <div class="card-body">
                        <progress class="progressbar-inp" value="50" max="100"> 50% </progress>
                        <h5 class="card-title">50 % กำลังเรียน</h5>
                        <div class="admin-course">

                            <table>
                                <tr>
                                    <td>เจ้าของหลักสูตร :</td>
                                    <td>คุณทวี เสริมศิล</td>
                                </tr>
                                <tr>
                                    <td>ผู้อนุมัติหลักสูตร :</td>
                                    <td>คุณวิรัช กิจเตชะการ</td>
                                </tr>
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
                                <button class="btn-evaluate"
                                    onclick="window.location.href='Questionnaire.php'">ทำแบบประเมิน</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-academic" onclick="window.location.href='Result.php'">
                    Academic summary
                    <span class="arrow"> > </span>
                </button>
            </div>

            <div class="col-lg-7">
                <div class="course-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">รายละเอียดหลักสูตร</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">รายการหลักสูตร</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                            <br>
                            <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                                            <button type="button" class="btn btn-link"><a href="Learn.php">ดูวิดีโอ</a></button>
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
                                            <button type="button" class="btn btn-link"><a href="Exam.php">ทำข้อสอบ</a></button>
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
</main>

<?php include 'includes/footer.php'; ?>