<?php include "includes/header.php"; ?>

<style>
    body {
        background: #f5f7fb;
    }

    .breadcrumb-custom {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .breadcrumb-custom span {
        color: #1e3a8a;
    }

    .result-box {
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        padding: 20px;
    }

    .table-eva {
        margin-top: 10px;
    }

    .table-eva th, .table-eva td {
        border: 1px solid #e5e7eb;
        padding: 12px;
        text-align: center;
        vertical-align: middle;
    }

    .table-eva th {
        background: #f9fafb;
        font-weight: 600;
    }

    .table-eva td:nth-child(2) {
        text-align: left;
    }

    .radio-circle {
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    .btn-blue {
        background: #1e3a8a;
        color: #fff;
        padding: 8px 30px;
        border-radius: 6px;
        border: none;
    }

    .footer-custom {
        background: #1e3a8a;
        color: #fff;
        padding: 10px 0;
        font-size: 13px;
        margin-top: 50px;
    }
</style>

<main class="container my-5" style="max-width:1000px;">

    <!-- breadcrumb -->
    <div class="breadcrumb-custom">
        หน้าแรก > <span>แบบประเมินหลักสูตร</span>
    </div>

    <!-- title -->
    <h4 class="fw-bold mb-4">แบบประเมินความพึงพอใจหลักสูตร</h4>

    <form action="save_evaluation.php" method="post">

        <div class="result-box">

            <table class="table table-eva">
                <thead>
                    <tr>
                        <th rowspan="2" style="width:70px;">ลำดับ</th>
                        <th rowspan="2">หัวข้อประเมิน</th>
                        <th colspan="5">ระดับคะแนน</th>
                    </tr>
                    <tr>
                        <th>5<br>ดีมาก</th>
                        <th>4<br>ดี</th>
                        <th>3<br>ปานกลาง</th>
                        <th>2<br>น้อย</th>
                        <th>1<br>ควรปรับปรุง</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $questions = [
                    "Lorem ipsum dolor sit amet",
                    "Lorem ipsum dolor sit amet consectetur",
                    "Lorem ipsum dolor sit amet adipiscing elit",
                    "Lorem ipsum dolor sit amet sed do eiusmod",
                    "Lorem ipsum dolor sit amet incididunt ut labore"
                ];

                foreach ($questions as $index => $q):
                ?>
                    <tr>
                        <td><?= $index+1 ?></td>
                        <td><?= $q ?></td>

                        <?php for ($i = 5; $i >= 1; $i--): ?>
                        <td>
                            <input 
                                type="radio" 
                                name="q<?= $index ?>" 
                                value="<?= $i ?>" 
                                required
                                class="radio-circle"
                            >
                        </td>
                        <?php endfor; ?>

                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

        </div>

        <!-- comment -->
        <div class="result-box mt-4">
            <label class="mb-2 fw-bold">ความคิดเห็นเพิ่มเติม:</label>
            <textarea 
                name="comment" 
                class="form-control" 
                rows="4" 
                placeholder="เขียนความคิดเห็นของคุณ..."></textarea>
        </div>

        <!-- button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-blue">ส่ง</button>
        </div>

    </form>

</main>

<footer class="footer-custom">
    <div class="container text-center">
        © 2021 Toyo Seikan (Thailand) Co., Ltd.
    </div>
</footer>