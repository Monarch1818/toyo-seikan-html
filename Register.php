<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyo seikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .container-register {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .container-register .bg-img {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .container-register .container {
        max-width: 500px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        margin: 50px auto;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .container-register {
        .accordion {
            width: 60%;
            margin: auto;
        }


        h2 {
            text-align: center;
            margin-top: 2%;
        }

        .icon-fixed {
            margin-top: 15px;
            margin-right: 50px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .icon-fixed svg {
            color: #32aadd;
        }

        .contact-box {
            background-color: #f9f7f7;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .iconsocial {
            display: flex;
            justify-content: flex-end;
            gap: 20px;

        }

        .custom-dropdown .option-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            background: #f8f8f8;
        }

        .custom-dropdown .option-card:hover {
            background: #eee;
        }

        .option-card input {
            display: none;
        }

        .option-card .circle {
            width: 22px;
            height: 22px;
            border: 2px solid #6DFF99;
            border-radius: 50%;
            display: inline-block;
            position: relative;
        }

        .option-card .circle::after {
            content: "";
            width: 10px;
            height: 10px;
            background-color: #6DFF99;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 0.2s;
        }

        .option-card input:checked+.circle::after {
            transform: translate(-50%, -50%) scale(1);
        }

        .form-label {
            color: #999999;
        }

        input::placeholder {
            color: #4F4F4F !important;
            opacity: 1;
        }

    }

    @media (max-width: 768px) {

        .container-register .container {
            margin: 20px auto;
        }
    }
</style>
<main class="container-fluid ">
    <div class="container-register">

        <img src="assets/images/unnamed.jpg" class="bg-img">

        <div class="container">
            <h2 class="text-center">ลงทะเบียนสมาชิก</h2>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">ชื่อผู้ใช้งาน</label>

                    <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" aria-label="Fullname">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">รหัสผ่าน</label>
                    <input type="text" class="form-control" placeholder="รหัสผ่าน" aria-label="password">
                </div>
            </div>

            <div class="row">
                <label for="formGroupExampleInput" class="form-label">วัน/เดือน/ปี</label>
                <div class="col">
                    <select class="form-select" id="daySelect">
                        <option selected>วัน</option>
                    </select>
                </div>


                <div class="col">
                    <select class="form-select" id="monthSelect">
                        <option selected>เดือน</option>
                    </select>
                </div>


                <div class="col">
                    <select class="form-select" id="yearSelect">
                        <option selected>ปี</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">เพศ</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>เพศ</option>
                        <option value="1">ชาย</option>
                        <option value="2">หญิง</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control" placeholder="0xx xxx xxxx" aria-label="phone">
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="อีเมล" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label fw-normal">ตำแหน่ง</label>

                <!-- ปุ่ม dropdown -->
                <div class="dropdown w-100">
                    <button id="dropdownBtn"
                        class="form-control text-start d-flex justify-content-between align-items-center"
                        data-bs-toggle="dropdown" data-bs-display="static">
                        <span id="selectedText">เลือกตำแหน่งงาน</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>

                    <!-- รายการ -->
                    <ul class="dropdown-menu w-100 p-2 custom-dropdown">
                        <li>
                            <label class="option-card">
                                <span>องค์กร (Organization)</span>
                                <input type="radio" name="position" value="องค์กร (Organization)">
                                <span class="circle"></span>
                            </label>
                        </li>

                        <li>
                            <label class="option-card">
                                <span>แผนก (Department)</span>
                                <input type="radio" name="position" value="แผนก (Department)">
                                <span class="circle"></span>
                            </label>
                        </li>

                        <li>
                            <label class="option-card">
                                <span>สายการผลิต (Line)</span>
                                <input type="radio" name="position" value="สายการผลิต (Line)">
                                <span class="circle"></span>
                            </label>
                        </li>

                        <li>
                            <label class="option-card">
                                <span>ส่วนงาน (Section)</span>
                                <input type="radio" name="position" value="ส่วนงาน (Section)">
                                <span class="circle"></span>
                            </label>
                        </li>

                        <li>
                            <label class="option-card">
                                <span>ทีม</span>
                                <input type="radio" name="position" value="ทีม">
                                <span class="circle"></span>
                            </label>
                        </li>

                        <li>
                            <label class="option-card">
                                <span>ตำแหน่ง</span>
                                <input type="radio" name="position" value="ตำแหน่ง">
                                <span class="circle"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <h4 class="fw-normal">
                ข้อกำหนดและ <span style="color:#0FCBF5;">เงื่อนไข</span>
            </h4>

            <!-- Checkbox -->
            <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label">
                    อ่านรายละเอียดเงื่อนไขในการสมัครของ
                    <span style="color:#1F7BCC;">Toyo Seikan</span>
                </label>
            </div>

            <!-- Button -->
            <button type="button"
                class="btn w-100 text-white fw-bold"
                style="background-color:#1F7BCC; border-radius:5px; height:50px;"
                onclick="window.location.href='Login.php'">
                ยืนยันลงทะเบียน
            </button>

            <!-- Divider -->
            <div class="d-flex align-items-center my-4">
                <hr class="flex-grow-1">
                <span class="mx-2 text-muted">หรือ</span>
                <hr class="flex-grow-1">
            </div>

            <!-- Login -->
            <div class="text-center">
                <span class="text-muted">เป็นสมาชิกแล้ว? </span>
                <a href="#" style="color:#0FCBF5; text-decoration:none;">
                    เข้าสู่ระบบ
                </a>
            </div>
        </div>
    </div>
</main>
<script>
    const daySelect = document.getElementById("daySelect");

    for (let i = 1; i <= 31; i++) {
        let option = document.createElement("option");
        option.value = i;
        option.text = i;
        daySelect.appendChild(option);
    }
    const monthSelect = document.getElementById("monthSelect");

    const months = [
        "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
        "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม",
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];

    months.forEach((month, index) => {
        let option = document.createElement("option");
        option.value = index + 1; // 1-12
        option.text = month;
        monthSelect.appendChild(option);
    });

    const yearSelect = document.getElementById("yearSelect");

    const currentYear = new Date().getFullYear(); // ปีปัจจุบัน (ค.ศ.)

    for (let i = currentYear; i >= currentYear - 100; i--) {
        let option = document.createElement("option");
        option.value = i;
        option.text = i;
        yearSelect.appendChild(option);
    }

    document.addEventListener("DOMContentLoaded", function() {
        const radios = document.querySelectorAll('input[name="position"]');
        const text = document.getElementById('selectedText');

        radios.forEach(radio => {
            radio.addEventListener('change', function() {
                text.innerText = this.value;
            });
        });
    });
</script>