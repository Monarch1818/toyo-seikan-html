<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyo Seikan</title>
    <style>
        .register_page_style {
            body {
                background-image: url("../assets/images/background/auth-background.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            main {
                min-height: 100vh;
            }

            .card {
                width: 100%;
                max-width: 500px;
            }
        }
    </style>
</head>

<body class="register_page_style">
    <main class="container-fluid h-100 d-flex justify-content-center align-items-center ">
        <div class="card p-3">
            <div class="card-body">
                <h2 class="card-title text-center">ลงทะเบียนสมาชิก</h2>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputUsername" class="form-label">ชื่อผู้ใช้งาน</label>
                        <input type="text" class="form-control" id="inputUsername" placeholder="ชื่อผู้ใช้งาน">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="รหัสผ่าน">
                    </div>
                    <div class="col-12">
                        <label for="inputBirthDate" class="form-label">วัน เดือน ปี เกิด</label>
                        <input type="date" class="form-control" id="inputBirthDate">
                    </div>
                    <div class="col-md-4">
                        <label for="selectGender" class="form-label">เพศ</label>
                        <select class="form-select" id="selectGender">
                            <option selected>ระบุ</option>
                            <option>ชาย</option>
                            <option>หญิง</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="0xx xxxx xxxx">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="อีเมล">
                    </div>
                    <div class="col-12">
                        <label for="selectPosition" class="form-label">ตำแหน่งงาน</label>
                        <select class="form-select" id="selectPosition">
                            <option selected>เลือกตำแหน่งงาน</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="checkboxAgree" class="form-label">ข้อกำหนดและ<span
                                class="text-primary">เงื่อนไข</span></label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="checkboxAgree">
                        <label class="form-check-label" for="checkboxAgree">
                            อ่านรายละเอียดเงื่อนไขในการสมัครของ <span class="text-primary">Toyo Seikan</span>
                        </label>

                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary container-fluid">ยืนยันลงทะเบียน</button>
                    </div>
                </form>
                <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1 mb-0">
                    <span class="mx-3 text-muted">หรือ</span>
                    <hr class="flex-grow-1 mb-0">
                </div>
                <p class="text-center m-0">เป็นสมาชิกแล้ว? <a href="login.php"
                        class="link link-underline link-underline-opacity-0">เข้าสู่ระบบ</a></p>


            </div>
        </div>
    </main>
</body>

</html>