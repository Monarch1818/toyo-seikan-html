<?php include 'includes/header.php'; ?>

<style>
    .container-qustion .btn-back {
        border-radius: 3px !important;
        background-color: #1F7BCC !important;
    }

    .container-qustion .btn-test {
        border-radius: 8px !important;
        background-color: #1F7BCC !important;
        margin-top: 20px;
        width: 150px;
    }

    .container-qustion .breadcrumb-item a {
        color: black;
        text-decoration: none;
    }

    .container-qustion .breadcrumb-item a:hover {
        color: #333;
    }

    .container-qustion .breadcrumb-container {
        display: flex;
        align-items: center;
        margin-top: 2px;
    }

    .container-qustion .custom-width {
        max-width: 950px;
        margin: auto;
    }

    .container-qustion table {
        width: 100%;
    }

    .container-qustion .table th:first-child,
    .container-qustion .table td:first-child {
        width: 10px;
        text-align: center;
    }

    .container-qustion .table th:nth-child(2),
    .container-qustion .table td:nth-child(2) {
        text-align: center;
        word-break: break-word;
    }

    .container-qustion .table th:not(:first-child):not(:nth-child(2)),
    .container-qustion .table td:not(:first-child):not(:nth-child(2)) {
        width: 100px;
    }

    .container-qustion input[type="radio"] {
        width: 18px;
        height: 18px;
        accent-color: #1F7BCC;
        cursor: pointer;
        display: block;
        margin: auto;
    }

    .container-qustion .result-box {
        border: 2px solid #DDDDDD;
        border-radius: 8px;
        padding: 25px;
        background: #f9fbff;
        max-width: 900px;
        margin: 30px auto;
    }

    .container-qustion .table tbody tr:hover {
        background-color: #f5f9ff;
    }

    .container-qustion .radio-check input {
        display: none;
    }

    .container-qustion .radio-check i {
        font-size: 20px;
        cursor: pointer;
    }

    .container-qustion .icon-unchecked {
        color: #1F7BCC;
    }

    .container-qustion .icon-checked {
        display: none;
        color: #1F7BCC;
    }

    .container-qustion .radio-check input:checked~.icon-unchecked {
        display: none;
    }

    .container-qustion .radio-check input:checked~.icon-checked {
        display: inline;
    }

    @media (max-width: 992px) {
        .container-qustion {
            padding-left: 15px;
            padding-right: 15px;
        }

        .container-qustion .custom-width {
            padding: 0 10px;
        }

        .container-qustion h4 {
            font-size: 18px;
        }

        .container-qustion .table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .container-qustion table th,
        .container-qustion table td {
            font-size: 14px;
            padding: 8px;
        }

        .container-qustion input[type="radio"] {
            width: 16px;
            height: 16px;
        }

        .container-qustion .radio-check i {
            font-size: 18px;
        }

        .container-qustion .result-box {
            padding: 15px;
            margin: 20px 10px;
        }

        .container-qustion .btn-test {
            width: 100%;
            max-width: 150px;
        }
    }

    @media (max-width: 768px) {

        .container-qustion .d-flex.align-items-center.justify-content-between {
            flex-direction: column;
            align-items: stretch !important;
            gap: 10px;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .container-qustion h4 {
            text-align: center;
            width: 100%;
            margin: 0;
        }

        .container-qustion .breadcrumb-container {
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }
    }

    @media (max-width: 576px) {
        .container-qustion {
            padding-left: 10px;
            padding-right: 10px;
        }

        .container-qustion h4 {
            font-size: 16px;
        }

        .container-qustion .breadcrumb {
            font-size: 12px;
        }

        .container-qustion table th,
        .container-qustion table td {
            font-size: 12px;
            padding: 6px;
        }

        .container-qustion .fw-bold {
            font-size: 14px;
        }
    }
</style>

<main class="container-fluid">
    <div class="container-qustion">
        <!-- Header -->
        <div class="d-flex align-items-center justify-content-between mt-5 px-5">
            <h4>แบบประเมินความพึงพอใจ</h4>

            <nav class="breadcrumb-container" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="course-detail.php">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="#">แบบประเมินหลักสูตร</a></li>
                </ol>
            </nav>
        </div>

        <!-- Table -->
        <div class="container mt-4 custom-width">

            <p class="fw-bold text-primary" style="margin-bottom :30px; color:#2B4279 !important;">>> แบบประเมินความพึงพอใจหลักสูตร</p>

            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th rowspan="2" class="align-middle">ลำดับ</th>
                        <th rowspan="2" class="align-middle text-center">หัวข้อประเมิน</th>
                        <th colspan="5">ระดับคะแนน</th>
                    </tr>
                    <tr>
                        <th>5<br>ดีมาก</th>
                        <th>4<br>ดี</th>
                        <th>3<br>ปานกลาง</th>
                        <th>2<br>น้อย</th>
                        <th>1<br>ปรับปรุง</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q1" value="5">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q1" value="4">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q1" value="3">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q1" value="2">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q1" value="1">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td class="text-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q2" value="5">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q2" value="4">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q2" value="3">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q2" value="2">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q2" value="1">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td class="text-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q3" value="5">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q3" value="4">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q3" value="3">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q3" value="2">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q3" value="1">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td class="text-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q4" value="5">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q4" value="4">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q4" value="3">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q4" value="2">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q4" value="1">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td class="text-start">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q5" value="5">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q5" value="4">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q5" value="3">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q5" value="2">

                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-check">
                                <input type="radio" name="q5" value="1">
                                <i class="bi bi-circle icon-unchecked"></i>
                                <i class="bi bi-check-circle-fill icon-checked"></i>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Comment -->
        <div class="result-box">
            <label class="form-label text-start d-block fs-5">ความคิดเห็นหรือข้อเสนอแนะ</label>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">เขียนความคิดเห็นของคุณ</label>
            </div>
        </div>

        <!-- Button -->
        <button class="btn btn-primary btn-test d-block mx-auto"
            onclick="window.location.href='course-detail.php'">
            ส่ง
        </button>
    </div>
</main>

<?php include 'includes/footer.php'; ?>