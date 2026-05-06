<style>
    body {
        background: #f5f5f5;
        font-family: sans-serif;
    }

    .exam-start-wrapper {
        min-height: 80vh;
        padding: 30px 0;
    }

    .back-btn {
        background: #2f80ed;
        color: #fff;
        border: none;
        padding: 5px 14px;
        border-radius: 3px;
        font-size: 14px;
    }

    .exam-box {
        width: 520px;
        margin: 60px auto 0;
        background: #fff;
        border: 3px solid #2196f3;
        padding: 35px 30px;
    }

    .exam-title {
        text-align: center;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .course-name {
        text-align: center;
        font-size: 16px;
        margin-bottom: 25px;
    }

    .exam-line {
        border-top: 1px solid #ccc;
        margin-bottom: 25px;
    }

    .exam-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .test-btn {
        background: #2f80ed;
        color: #fff;
        border: none;
        padding: 8px 35px;
        border-radius: 4px;
        margin-top: 30px;
    }

    .breadcrumb-custom {
        text-align: right;
        font-size: 14px;
    }
</style>

<?php include 'includes/header.php'; ?>

<main class="container exam-start-wrapper">

    <div class="d-flex justify-content-between align-items-center">

        <button class="back-btn">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </button>

        <div class="breadcrumb-custom">
            หน้าแรก > หลักสูตร > บทที่ 1
        </div>

    </div>

    <div class="exam-box">

        <div class="exam-title">
            Course Examination
        </div>

        <div class="course-name">
            Course Name : How to use “IMCT IT Service Desk Tool”
        </div>

        <div class="exam-line"></div>

        <div class="exam-row">
            <div>Number of questions</div>
            <div>10 Questions</div>
        </div>

        <div class="exam-row">
            <div>Time allowed</div>
            <div>20 Minutes</div>
        </div>

        <div class="exam-row">
            <div>Total score</div>
            <div>10 Points</div>
        </div>

    </div>

    <div class="text-center">
        <button class="test-btn">
            TEST
        </button>
    </div>

</main>

<?php include 'includes/footer.php'; ?>