<?php include 'includes/header.php'; ?>
<style>
    /* ===== PAGE LAYOUT (footer ติดล่าง) ===== */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .quiz-result-page-content {
        flex: 1;
    }

    /* ซ่อน footer เดิมจาก footer.php */
    footer.bg-light {
        display: none;
    }

    /* ===== RESULT ===== */
    .quiz-result-card {
        border: 1px solid #E5E5E5;
        border-radius: 8px;
    }

    .quiz-result-icon-pass {
        color: #28a745;
        font-size: 48px;
    }

    .quiz-result-icon-fail {
        color: #dc3545;
        font-size: 48px;
    }

    .quiz-result-table td {
        font-size: 18px;
        padding: 10px 20px;
        border-bottom: 1px solid #E5E5E5;
    }

    .quiz-result-table td:last-child {
        text-align: right;
    }

    .quiz-result-score-list {
        font-size: 18px;
    }

    .quiz-result-score-item {
        padding: 6px 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .quiz-result-score-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }

    .quiz-result-score-dot.correct {
        background-color: #28a745;
    }

    .quiz-result-score-dot.wrong {
        background-color: #dc3545;
    }

    .quiz-result-completed-btn {
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 30px;
        font-size: 18px;
    }

    .quiz-result-completed-btn:hover {
        background-color: #218838;
        color: #fff;
    }

    /* ===== PRE-FOOTER ===== */
    .quiz-result-pre-footer {
        background-color: #fff;
        padding: 20px 80px 20px;
    }

    .quiz-result-report-btn {
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

    .quiz-result-report-btn::after {
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

    .quiz-result-report-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    .quiz-result-site-footer {
        background-color: #09479D;
        padding: 16px 8px;
        text-align: center;
    }

    .quiz-result-footer-text {
        color: #fff;
        font-size: 16px;
        margin: 0;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .quiz-result-pre-footer {
            padding: 20px 20px;
            justify-content: center !important;
        }
    }
</style>

<div class="quiz-result-page-content">

<!-- ===== QUIZ RESULT ===== -->
<div class="container py-4">
    <div class="row">
        <!-- ซ้าย: สรุปผล -->
        <div class="col-lg-7">
            <div class="quiz-result-card p-4 mb-4">
                <!-- Pass/Fail icon (JS จะเติมให้) -->
                <div class="text-center mb-3" id="result-status"></div>

                <!-- ตารางสรุป -->
                <table class="table table-borderless quiz-result-table">
                    <tbody>
                        <tr>
                            <td>Number of question</td>
                            <td>10 Questions</td>
                        </tr>
                        <tr>
                            <td>Time allowed</td>
                            <td>20 Minutes</td>
                        </tr>
                        <tr>
                            <td>Time spent</td>
                            <td id="result-time-spent">-</td>
                        </tr>
                        <tr>
                            <td>Total score</td>
                            <td>10 Points</td>
                        </tr>
                        <tr>
                            <td>Your score earned</td>
                            <td id="result-score-earned">-</td>
                        </tr>
                        <tr>
                            <td>Percent</td>
                            <td id="result-percent">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="course-main.php" class="quiz-result-completed-btn text-decoration-none d-inline-block">Completed</a>
            </div>
        </div>

        <!-- ขวา: คะแนนรายข้อ -->
        <div class="col-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fw-bold" style="font-size: 20px; color: #1F7BCC;" id="result-score-title">Score</span>
                <span class="fw-bold" style="font-size: 28px; color: #1F7BCC;" id="result-total-score">-</span>
            </div>
            <div class="quiz-result-score-list" id="result-score-list">
                <!-- JS จะเติมคะแนนรายข้อให้ -->
            </div>
        </div>
    </div>
</div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // === ตั้งค่า ===
    var TOTAL_QUESTIONS = 10;   // จำนวนข้อทั้งหมด
    var PASS_SCORE = 6;         // เกณฑ์ผ่าน (คะแนน)

    // === อ่านข้อมูลจาก localStorage (ส่งมาจาก quiz-test.php) ===
    var userAnswers = JSON.parse(localStorage.getItem("quizUserAnswers"));
    var timeSpent = parseInt(localStorage.getItem("quizTimeSpent")) || 0;
    var totalTime = parseInt(localStorage.getItem("quizTotalTime")) || 1200;
    var correctAnswers = JSON.parse(localStorage.getItem("quizCorrectAnswers"));

    // ถ้าไม่มีข้อมูล (เปิดหน้านี้ตรงๆ โดยไม่ผ่าน quiz-test) → กลับไปหน้า intro
    if (!userAnswers || !correctAnswers) {
        window.location.href = "quiz-intro.php";
        return;
    }

    // === คำนวณคะแนน ===
    var score = 0;
    var results = []; // เก็บผลลัพธ์ถูก/ผิดแต่ละข้อ
    for (var i = 0; i < TOTAL_QUESTIONS; i++) {
        var isCorrect = userAnswers[i] === correctAnswers[i];
        if (isCorrect) score++;
        results.push(isCorrect);
    }

    // === คำนวณเวลาที่ใช้ (นาที) ===
    var minutesSpent = Math.ceil(timeSpent / 60);

    // === คำนวณเปอร์เซ็นต์ ===
    var percent = ((score / TOTAL_QUESTIONS) * 100).toFixed(2);

    // === ตรวจว่าผ่านหรือไม่ ===
    var passed = score >= PASS_SCORE;

    // === แสดงไอคอน Pass / Failed ===
    var resultStatus = document.getElementById("result-status");
    if (passed) {
        resultStatus.innerHTML =
            '<i class="fa-solid fa-circle-check quiz-result-icon-pass"></i>' +
            '<p class="mt-2 fw-bold" style="color: #28a745; font-size: 22px;">Pass</p>';
    } else {
        resultStatus.innerHTML =
            '<i class="fa-solid fa-circle-xmark quiz-result-icon-fail"></i>' +
            '<p class="mt-2 fw-bold" style="color: #dc3545; font-size: 22px;">Failed</p>';
    }

    // === เติมข้อมูลในตารางสรุป ===
    document.getElementById("result-time-spent").textContent = minutesSpent + " Minutes";
    document.getElementById("result-score-earned").textContent = score + " Points";
    document.getElementById("result-percent").textContent = percent + "%";

    // === เติมหัวข้อคะแนน (ถ้าผ่าน → "คะแนนทั้งหมด", ถ้าไม่ผ่าน → "Score") ===
    document.getElementById("result-score-title").textContent = passed ? "คะแนนทั้งหมด" : "Score";

    // === เติมคะแนนรวม ===
    document.getElementById("result-total-score").textContent = score;

    // === เติมคะแนนรายข้อ (จุดเขียว = ถูก, จุดแดง = ผิด) ===
    var scoreList = document.getElementById("result-score-list");
    scoreList.innerHTML = "";
    for (var j = 0; j < TOTAL_QUESTIONS; j++) {
        var dotClass = results[j] ? "correct" : "wrong";
        var pointText = results[j] ? "1" : "0";
        scoreList.innerHTML +=
            '<div class="quiz-result-score-item">' +
                '<div><span class="quiz-result-score-dot ' + dotClass + '"></span>Question ' + (j + 1) + '</div>' +
                '<span>' + pointText + '</span>' +
            '</div>';
    }

    // === ลบข้อมูลใน localStorage (ใช้แล้วไม่ต้องเก็บ) ===
    localStorage.removeItem("quizUserAnswers");
    localStorage.removeItem("quizTimeSpent");
    localStorage.removeItem("quizTotalTime");
    localStorage.removeItem("quizCorrectAnswers");
});
</script>

<?php include 'includes/footer.php'; ?>
