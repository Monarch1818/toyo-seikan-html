<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyo Seikan</title>
    <link rel="stylesheet" href="assets\bootstrap-5.0.2\css\bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/fontawesome.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .login_page_style {
            body {
                background-image: url("../assets/images/background/auth-background.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            main {
                min-height: 100vh;
            }

            .card {
                max-width: 500px;
            }

            .input-group-text {
                background-color: white;
            }

            .form-control {
                border-left: none !important;
            }

        }
    </style>
</head>

<body class="login_page_style">
    <main class="container-fluid h-100 d-flex justify-content-center align-items-center ">
        <div class="card text-center p-3">
            <img src="assets/images/toyo-seikan-logo-long.jpg" alt="toyo image" class="card-img-top">
            <div class="card-body">
                <h2 class="card-title">เข้าสู่ระบบ</h2>
                <form action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><img src="assets/images/user-input.png" alt="user image"></span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
                            <label for="floatingUsername">ชื่อผู้ใช้</label>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><img src="assets/images/password.png" alt="user image"></span>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">รหัสผ่าน</label>
                        </div>
                    </div>
                    <div class="text-end mb-4">
                        <a href="" class="link link-secondary link-underline-opacity-0">ลืมรหัสผ่าน?</a>
                    </div>
                    <button type="submit" class="btn btn-primary container-fluid">เข้าสู่ระบบ</button>

                </form>
                <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1 mb-0">
                    <span class="mx-3 text-muted">หรือ</span>
                    <hr class="flex-grow-1 mb-0">
                </div>
                <span class="">ยังไม่มีบัญชีใช้งาน?</span>
                <a href="register.php" class="btn btn-warning container-fluid mt-4 text-light">ลงทะเบียน Toyo Seikan</a>


            </div>
        </div>
    </main>
</body>

</html>