<?php include 'includes/header.php'; ?>

<style>
    .container-status {

        .accordion {
            width: 80%;
            margin: auto;
        }

        h4 {
            margin-left: 5%;
            margin-top: 2%;
        }

        h3 {
            text-align: center;
            margin-top: 2%;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .table {
            min-width: 1100px;
            border-collapse: collapse;
            border: 1px solid #DDDDDD !important;
        }

        .table thead th {
            background-color: #1F7BCC;
            color: white;
            text-align: center;
            vertical-align: middle;
            font-weight: normal !important;
            font-size: 12px;
            padding: 6px 8px;
            line-height: 1.2;
        }

        .table td,
        .table th {
            white-space: nowrap;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #DDDDDD !important;
        }

        .table thead,
        .table tbody,
        .table tr {
            border-color: #DDDDDD !important;
        }

        .progress {
            height: 20px;
            border-radius: 10px;
        }

        .progress-bar {
            background-color: #50E82A;
            font-size: 12px;
        }

        .btn-print {
            background: linear-gradient(180deg, #0EB5D9 0%, #0897C3 50%, #0C90C9 100%);
            color: white;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .course-img {
            width: 35px;
            height: 35px;
            border-radius: 5px;
            margin-right: 5px;
        }

        @media (max-width: 992px) {
            .accordion {
                width: 95%;
            }

            h4 {
                margin-left: 10px;
            }

            .table th,
            .table td {
                font-size: 12px;
                padding: 8px;
            }

            .course-img {
                width: 25px;
                height: 25px;
            }

            .progress {
                height: 15px;
            }

            .progress-bar {
                font-size: 10px;
            }
        }

        @media (max-width: 768px) {
            .table thead th {
                font-size: 10px;
                padding: 5px;
            }
        }
    }
</style>

<main class="container-fluid ">
    <div class="container-status">
        <h4>สถานะการเรียน</h4>

        <div class="accordion" id="accordionExample">
            <h3>สถานะการเรียน</h3>
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px;">
                        1 Course Name
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col" style="font-size:14px;">รหัสรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">วิชา/หลักสูตร</th>
                                        <th scope="col" style="font-size:14px;">จำนวนชั่วโมง</th>
                                        <th scope="col" style="font-size:14px;">สถานะรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">ผลการทดสอบ<br>หลังอบรม</th>
                                        <th scope="col" style="font-size:14px;">แบบประเมินผล<br>การอบรม</th>
                                        <th scope="col" style="font-size:14px;">ความคืบหน้า (%)</th>
                                        <th scope="col" style="font-size:14px;">เริ่มต้น/สิ้นสุด <br>รายวิชา <br>ว/ด/ป</th>
                                        <th scope="col" style="font-size:14px;">ออกใบประกาศ</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>

                                        <td class="text-start">
                                            <img src="https://cdn.pixabay.com/photo/2026/04/08/19/58/19-58-41-198_1280.jpg" class="course-img">
                                            Cours Name
                                        </td>

                                        <td>8</td>
                                        <td>อบรมแล้ว</td>
                                        <td>ผ่าน</td>
                                        <td>ยังไม่ได้ประเมิน</td>

                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%;">100%</div>
                                            </div>
                                        </td>

                                        <td>
                                            01/01/69 <br>
                                            Ex.31/12/69
                                        </td>
                                        <td>
                                            <button class="btn btn-print">
                                                <i class="bi bi-printer-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 20px;">
                        2 Course Name
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col" style="font-size:14px;">รหัสรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">วิชา/หลักสูตร</th>
                                        <th scope="col" style="font-size:14px;">จำนวนชั่วโมง</th>
                                        <th scope="col" style="font-size:14px;">สถานะรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">ผลการทดสอบ<br>หลังอบรม</th>
                                        <th scope="col" style="font-size:14px;">แบบประเมินผล<br>การอบรม</th>
                                        <th scope="col" style="font-size:14px;">ความคืบหน้า (%)</th>
                                        <th scope="col" style="font-size:14px;">เริ่มต้น/สิ้นสุด <br>รายวิชา <br>ว/ด/ป</th>
                                        <th scope="col" style="font-size:14px;">ออกใบประกาศ</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>

                                        <td class="text-start">
                                            <img src="https://cdn.pixabay.com/photo/2026/04/08/19/58/19-58-41-198_1280.jpg" class="course-img">
                                            Cours Name
                                        </td>

                                        <td>8</td>
                                        <td>อบรมแล้ว</td>
                                        <td>ผ่าน</td>
                                        <td>ยังไม่ได้ประเมิน</td>

                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%;">100%</div>
                                            </div>
                                        </td>

                                        <td>
                                            01/01/69 <br>
                                            Ex.31/12/69
                                        </td>
                                        <td>
                                            <button class="btn btn-print">
                                                <i class="bi bi-printer-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 20px;">
                        3 Course Name
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col" style="font-size:14px;">รหัสรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">วิชา/หลักสูตร</th>
                                        <th scope="col" style="font-size:14px;">จำนวนชั่วโมง</th>
                                        <th scope="col" style="font-size:14px;">สถานะรายวิชา</th>
                                        <th scope="col" style="font-size:14px;">ผลการทดสอบ<br>หลังอบรม</th>
                                        <th scope="col" style="font-size:14px;">แบบประเมินผล<br>การอบรม</th>
                                        <th scope="col" style="font-size:14px;">ความคืบหน้า (%)</th>
                                        <th scope="col" style="font-size:14px;">เริ่มต้น/สิ้นสุด <br>รายวิชา <br>ว/ด/ป</th>
                                        <th scope="col" style="font-size:14px;">ออกใบประกาศ</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>

                                        <td class="text-start">
                                            <img src="https://cdn.pixabay.com/photo/2026/04/08/19/58/19-58-41-198_1280.jpg" class="course-img">
                                            Cours Name
                                        </td>

                                        <td>8</td>
                                        <td>อบรมแล้ว</td>
                                        <td>ผ่าน</td>
                                        <td>ยังไม่ได้ประเมิน</td>

                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%;">100%</div>
                                            </div>
                                        </td>

                                        <td>
                                            01/01/69 <br>
                                            Ex.31/12/69
                                        </td>
                                        <td>
                                            <button class="btn btn-print">
                                                <i class="bi bi-printer-fill"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>