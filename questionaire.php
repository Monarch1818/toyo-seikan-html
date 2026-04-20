<?php include 'includes/header.php'; ?>

<body class="d-flex flex-column min-vh-100">
    <main class="container flex-grow-1">
        <div class="container-fluid d-flex justify-content-between px-4 py-3">
            <p class="h4">แบบประเมิณหลักสูตร</p>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="#" class="text-reset text-decoration-none">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แบบประเมิณหลักสูตร</li>
                </ol>
            </nav>
        </div>
        <!-- แบบฟอร์ม -->
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead class="text-center align-middle">
                    <tr >
                        <th rowspan="2" style="width: 10%;">ลำดับ</th>
                        <th rowspan="2" style="width: 40%;">หัวข้อประเมิน</th>
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
                    <tr class="text-center align-middle">
                        <th scope="row">1</th>
                        <td class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores numquam asperiores aut quod quo repudiandae aliquid ipsa accusantium error.</td>
                        <td><input class="form-check-input" type="radio" name="q1" value="5"></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="4"></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="3"></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="2"></td>
                        <td><input class="form-check-input" type="radio" name="q1" value="1"></td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th scope="row">2</th>
                        <td class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores numquam asperiores aut quod quo repudiandae aliquid ipsa accusantium error.</td>
                        <td><input class="form-check-input" type="radio" name="q2" value="5"></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="4"></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="3"></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="2"></td>
                        <td><input class="form-check-input" type="radio" name="q2" value="1"></td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th scope="row">3</th>
                        <td class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores numquam asperiores aut quod quo repudiandae aliquid ipsa accusantium error.</td>
                        <td><input class="form-check-input" type="radio" name="q3" value="5"></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="4"></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="3"></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="2"></td>
                        <td><input class="form-check-input" type="radio" name="q3" value="1"></td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th scope="row">4</th>
                        <td class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores numquam asperiores aut quod quo repudiandae aliquid ipsa accusantium error.</td>
                        <td><input class="form-check-input" type="radio" name="q4" value="5"></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="4"></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="3"></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="2"></td>
                        <td><input class="form-check-input" type="radio" name="q4" value="1"></td>
                    </tr>
                    <tr class="text-center align-middle">
                        <th scope="row">5</th>
                        <td class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem maiores numquam asperiores aut quod quo repudiandae aliquid ipsa accusantium error.</td>
                        <td><input class="form-check-input" type="radio" name="q5" value="5"></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="4"></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="3"></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="2"></td>
                        <td><input class="form-check-input" type="radio" name="q5" value="1"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- แบบฟอร์ม END -->
        <!-- ข้อเสนอแนะ -->
        <div class="container border border-2 px-4 py-3 shadow-sm" style="border-radius: 20px;">
            <p class="h4">ความคิดเห็นหรือข้อเสนอแนะ</p>
            <textarea class="form-control" placeholder="เขียนความคิดเห็นของคุณ" id="comment" rows="3"></textarea>
        </div>
        <!-- ข้อเสนอแนะ END -->
        <div class="container d-flex justify-content-center mt-4">
            <button class="btn btn-primary btn-lg w-25" type="submit">ส่ง</button>
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>