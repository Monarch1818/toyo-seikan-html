
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toyo seikan</title>

  <link rel="stylesheet" href="assets\bootstrap-5.0.2\css\bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">


</head>
<style>
    body {
        background-image: url('assets/images/register_bg.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<body class="d-flex flex-column min-vh-100 bg-light">
    <main class="container flex-grow-1 py-4">

        <div class="container d-flex flex-column justify-content-center w-50 bg-white py-4 px-4" style="border-radius: 30px; max-width: 50%">
            <p class="h3 text-center">ลงทะเบียนสมาชิก</p>

            <div class="mb-3">
                <div class="row g-2"> <div class="col-6">
                        <label for="Name" class="form-label">ชื่อผู้ใช้งาน</label>
                        <input class="form-control" id="Name" placeholder="ชื่อผู้ใช้งาน">
                </div>
                <div class="col-6">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input class="form-control" id="password" placeholder="รหัสผ่าน">
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label">วันเดือนปี</label>
                    </div>
                </div>
                
                <div class="row g-2"> <div class="col-4">
                        <select class="form-select">
                            <option selected>วัน</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <select class="form-select">
                            <option selected>เดือน</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <select class="form-select">
                            <option selected>ปี</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row g-2"> 
                        <div class="col-4">
                            <label for="Name" class="form-label">เพศ</label>
                            <select class="form-select">
                                <option selected>เพศ</option>
                                <option>ชาย</option>
                                <option>หญิง</option>
                            </select>
                    </div>
                    <div class="col-8">
                        <label for="password" class="form-label">เบอร์โทรศัพท์</label>
                        <input class="form-control" id="call" placeholder="เบอร์โทรศัพท์">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="อีเมล">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">ตำแหน่ง</label>
                <select class="form-select">
                            <option selected>เลือกตำแหน่งงาน</option>
                </select>
            </div>

            <div class="mb-3">
                <p class="leading">ข้อกำหนดและเงื่อนไข</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">
                        อ่านรายละเอียดและเงื่อนไขการสมัครของ
                    </label>
                    <a href="login.php" class="text-decoration-none text-info fw-bold">toyo seikan</a>
                </div>
            </div>
            
            <div class="mb-3">
                <button type="button" class="btn btn-primary w-100">ยืนยัน</button>
                <div class="d-flex align-items-center my-4">
                    <div class="flex-grow-1 border-top"></div>
                    <span class="mx-3 text-secondary">หรือ</span>
                    <div class="flex-grow-1 border-top"></div>
                </div>
                <div class="text-center">
                    <span class="text-secondary">เป็นสมาชิกแล้ว?</span>
                    <a href="login.php" class="text-decoration-none text-info fw-bold">เข้าสู่ระบบ</a>
                </div>
            </div>


        </div>
    </main>
</body> 