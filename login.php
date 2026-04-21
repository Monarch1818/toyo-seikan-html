<?php include "includes/header.php" ?>

<main class="d-flex align-items-center justify-content-center" style="min-height: 80vh; background-color: #f8f9fa;">
    <div class="card shadow-sm border-0" style="width: 100%; max-width: 400px;">
        <div class="card-body p-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold">เข้าสู่ระบบ</h3>
                <p class="text-muted small"> กรุณากรอกข้อมูลเพื่อเข้าใช้งาน</p>
            </div>

            <form action="login_process.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">ชื่อผู้ใช้งาน หรือ email</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="example@mail.com"
                        required>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <a href="faq.php" class="small text-decoration-none">ลืมรหัสผ่าน?</a>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label small" for="rememberMe">จดจำการใช้งาน</label>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mb-3">เข้าสู่ระบบ</button>

                <div class="text-center">
                    <span class="small text-muted">ยังไม่มีบัญชี?</span>
                    <a href="register.php" class="small text-decoration-none fw-bold">สมัครสมาชิก</a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include "includes/footer.php" ?>