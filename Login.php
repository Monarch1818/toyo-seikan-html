<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyo seikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    .container-login {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .container-login {
        .bg-img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .container {
            max-width: 500px;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            margin: 50px auto;
            /* จัดกลางแนวนอน + เว้นด้านบน */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

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
    }
</style>

<main class="container-fluid ">
    <div class="container-login">

        <img src="assets/images/unnamed.jpg" class="bg-img">

        <div class="container">
            <img src="assets/images/logo2.jpg" class="img-fluid">
            <h2 class="text-center">เข้าสู่ระบบ</h2>

            <div class="col position-relative mb-3">
                <i class="bi bi-person-circle position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
                <input type="text" class="form-control ps-5" placeholder="ชื่อผู้ใช้งาน"
                    aria-label="Fullname" autocomplete="off">
            </div>

            <div class="position-relative">
                <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>

                <input type="password" id="password" class="form-control ps-5 pe-5" placeholder="รหัสผ่าน"
                    autocomplete="new-password">
                <i class="bi bi-eye-slash position-absolute top-50 end-0 translate-middle-y me-3 text-secondary"
                    style="cursor: pointer;"
                    onclick="togglePassword(this)"></i>
            </div>
            <small class="d-block text-end mt-1">ลืมรหัสผ่าน?</small>


            <!-- Button -->
            <button type="button"
                class="btn w-100 text-white fw-bold"
                style="background-color:#1F7BCC;  margin-top:20px; border-radius:5px; height:50px;">
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
                <span class="text-muted">ยังไม่มีบัญชีผู้ใช้งาน?</span>
            </div>
            <button type="button"
                class="btn w-100 text-white fw-bold"
                style="background-color:#FFBB36; margin-top:20px; border-radius:5px; height:50px;"
                onclick="window.location.href='Register.php'">
                ลงทะเบียน Toyo Seikan
            </button>
        </div>
    </div>

</main>

<script>
    function togglePassword(el) {
        const input = document.getElementById("password");
        if (input.type === "password") {
            input.type = "text";
            el.classList.remove("bi-eye-slash");
            el.classList.add("bi-eye");
        } else {
            input.type = "password";
            el.classList.remove("bi-eye");
            el.classList.add("bi-eye-slash");
        }
    }
</script>