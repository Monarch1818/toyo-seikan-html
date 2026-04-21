<?php
// ====== บันทึกข้อมูลเมื่อกดส่ง ======
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $scores = $_POST['score'] ?? [];
    $comment = $_POST['comment'] ?? "";

    // ตัวอย่าง: แสดงผล (เอาไปต่อ DB ได้)
    echo "<pre>";
    echo "ผลการประเมิน:\n";
    print_r($scores);
    echo "ความคิดเห็น: " . htmlspecialchars($comment);
    echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบประเมินหลักสูตร</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .rating input {
            transform: scale(1.2);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand">📘 Evaluation</span>
        </div>
    </nav>

    <div class="container mt-5">

        <h4 class="mb-4">แบบประเมินความพึงพอใจหลักสูตร</h4>

        <form method="POST">

            <!-- ตาราง -->
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>ลำดับ</th>
                            <th class="text-start">หัวข้อประเมิน</th>
                            <th>5<br>ดีมาก</th>
                            <th>4<br>ดี</th>
                            <th>3<br>ปานกลาง</th>
                            <th>2<br>น้อย</th>
                            <th>1<br>ปรับปรุง</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $questions = [
                            "เนื้อหาหลักสูตรเข้าใจง่าย",
                            "วิทยากรอธิบายชัดเจน",
                            "ระยะเวลาเหมาะสม",
                            "เอกสารประกอบครบถ้วน",
                            "ภาพรวมหลักสูตรดี"
                        ];

                        foreach ($questions as $i => $q) {
                            echo "<tr>";
                            echo "<td>" . ($i + 1) . "</td>";
                            echo "<td class='text-start'>$q</td>";

                            for ($score = 5; $score >= 1; $score--) {
                                echo "<td class='rating'>
                        <input type='radio' name='score[$i]' value='$score' required>
                    </td>";
                            }

                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>

            <!-- ความคิดเห็น -->
            <div class="mb-3">
                <label class="form-label">ความคิดเห็นหรือข้อเสนอแนะ</label>
                <textarea name="comment" class="form-control" rows="4" placeholder="พิมพ์ความคิดเห็นของคุณ"></textarea>
            </div>

            <!-- ปุ่ม -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">ส่ง</button>
            </div>

        </form>
    </div>

    <footer class="bg-primary text-white text-center mt-5 p-2">
        © 2026 Your Company
    </footer>

</body>

</html>