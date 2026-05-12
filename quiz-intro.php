<?php include 'includes/header.php'; ?>

<style>
    /* ===== PAGE LAYOUT (footer ติดล่าง) ===== */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .quiz-intro-page-content {
        flex: 1;
    }

    /* ซ่อน footer เดิมจาก footer.php */
    footer.bg-light {
        display: none;
    }

    /* ===== BREADCRUMB ===== */
    .quiz-intro-breadcrumb {
        padding: 10px 80px;
        font-size: 24px;
    }

    .quiz-intro-breadcrumb .breadcrumb-item,
    .quiz-intro-breadcrumb .breadcrumb-item a {
        font-size: 18px;
        color: #464646;
        text-decoration: none;
    }

    .quiz-intro-breadcrumb .breadcrumb-item.active {
        color: #464646;
    }

    .quiz-intro-back-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        padding: 4px 16px;
    }

    .quiz-intro-back-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    /* ===== QUIZ INFO CARD ===== */
    .quiz-intro-card {
        border: 2px solid #1F7BCC;
        border-radius: 12px;
        max-width: 600px;
    }

    .quiz-intro-card h5 {
        color: #000;
        font-size: 22px;
    }

    .quiz-intro-card h6 {
        color: #000;
        font-size: 22px;
    }

    .quiz-intro-card .table td {
        font-size: 18px;
        padding: 8px 20px;
        border: none;
    }

    .quiz-intro-card .table td:first-child {
        text-align: left;
    }

    .quiz-intro-card .table td:last-child {
        text-align: right;
    }

    .quiz-intro-test-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        padding: 8px 40px;
    }

    .quiz-intro-test-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    /* ===== PRE-FOOTER ===== */
    .quiz-intro-pre-footer {
        background-color: #fff;
        padding: 20px 80px 20px;
    }

    .quiz-intro-report-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 18px;
        padding: 10px 18px;
        border-radius: 10px;
        border: none;
        width: 200px;
        height: 45px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .quiz-intro-report-btn::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-top: 19px solid #1F7BCC;
        border-left: 13px solid transparent;
        border-right: 13px solid transparent;
    }

    .quiz-intro-report-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    .quiz-intro-site-footer {
        background-color: #09479D;
        padding: 16px 8px;
        text-align: center;
    }

    .quiz-intro-footer-text {
        color: #fff;
        font-size: 16px;
        margin: 0;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .quiz-intro-breadcrumb {
            padding: 10px 20px;
        }

        .quiz-intro-pre-footer {
            padding: 20px 20px;
            justify-content: center !important;
        }
    }
</style>

<div class="quiz-intro-page-content">

<!-- ===== BREADCRUMB ===== -->
<div class="quiz-intro-breadcrumb d-flex justify-content-between align-items-center">
    <a href="course-main.php" class="quiz-intro-back-btn text-decoration-none">
        <i class="fa-solid fa-chevron-left"></i> Back
    </a>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
            <li class="breadcrumb-item"><a href="course-main.php">หลักสูตร</a></li>
            <li class="breadcrumb-item active" aria-current="page">บทที่ 1</li>
        </ol>
    </nav>
</div>

<!-- ===== QUIZ INFO ===== -->
<div class="container py-5">
    <div class="quiz-intro-card mx-auto p-4 text-center">
        <h5 class="mb-3">Course Examination</h5>
        <h6 class="mb-4">Course Name : How to use "IMCT IT Service Desk Tool"</h6>
        <hr>
        <table class="table table-borderless mb-0">
            <tbody>
                <tr>
                    <td>Number of questions</td>
                    <td>10 Questions</td>
                </tr>
                <tr>
                    <td>Time allowed</td>
                    <td>20 Minutes</td>
                </tr>
                <tr>
                    <td>Total score</td>
                    <td>10 Points</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center mt-4">
        <a href="quiz-test.php" class="quiz-intro-test-btn text-decoration-none d-inline-block">TEST</a>
    </div>
</div>

</div>

<?php include 'includes/footer.php'; ?>
