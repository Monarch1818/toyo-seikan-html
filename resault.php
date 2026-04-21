<?php include "includes/header.php"; ?>

<style>
    .result-box {
        border-radius: 10px;
        margin-bottom: 25px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
    }

    .result-title {
        background: #1e3a8a;
        color: #fff;
        padding: 12px;
        text-align: center;
        font-weight: 600;
    }

    .table-result td {
        padding: 12px 20px;
        border: 1px solid #e5e7eb;
    }

    .table-result td:first-child {
        width: 40%;
        color: #666;
    }

    .btn-blue {
        background: #1e3a8a;
        color: #fff;
        padding: 8px 25px;
        border-radius: 6px;
    }

    .footer-custom {
        background: #1e3a8a;
        color: #fff;
        padding: 10px 0;
        font-size: 13px;
    }
</style>

<main class="container my-5" style="max-width:900px;">

    <h4 class="fw-bold mb-4">ชื่อหลักสูตร</h4>

    <!-- Pre-Test -->
    <div class="result-box">
        <div class="result-title">Pre-Test result</div>
        <table class="table table-result mb-0">
            <tr>
                <td>Course</td>
                <td>Test course</td>
            </tr>
            <tr>
                <td>Lesson</td>
                <td>test1</td>
            </tr>
            <tr>
                <td>Score</td>
                <td>2 / 3</td>
            </tr>
            <tr>
                <td>Score (%)</td>
                <td>66.67%</td>
            </tr>
            <tr>
                <td>Result</td>
                <td class="text-danger fw-bold">Fail</td>
            </tr>
        </table>
    </div>

    <!-- Post-Test -->
    <div class="result-box">
        <div class="result-title">Post-Test result</div>
        <table class="table table-result mb-0">
            <tr>
                <td>Course</td>
                <td>Test course</td>
            </tr>
            <tr>
                <td>Lesson</td>
                <td>test1</td>
            </tr>
            <tr>
                <td>Score</td>
                <td>3 / 3</td>
            </tr>
            <tr>
                <td>Score (%)</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>Result</td>
                <td class="text-success fw-bold">Pass</td>
            </tr>
        </table>
    </div>

    <!-- ปุ่ม -->
    <div class="text-center mt-4">
        <button class="btn btn-blue" onclick="history.back()">Back</button>
    </div>

</main>

<footer class="footer-custom">
    <div class="container d-flex justify-content-between">
        <span>© 2021 Toyo Seikan (Thailand) Co., Ltd.</span>
        <span>© 2021 Toyo Seikan (Thailand) Co., Ltd.</span>
    </div>
</footer>