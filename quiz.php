<?php include 'includes/header.php'; ?>
<style>
    @font-face {
        font-family: 'SupermarketCustom';
        src: url('../assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    /* ===== PAGE LAYOUT (footer ติดล่าง) ===== */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .quiz-page-content {
    flex: 1;
}

    /* ซ่อน footer เดิมจาก footer.php (เพราะใช้ footer ของ quiz แทน) */
    footer.bg-light {
        display: none;
    }

    /* ===== BREADCRUMB ===== */
    .quiz-breadcrumb {
        padding: 10px 80px;
        font-size: 24px;
    }

    .quiz-breadcrumb .breadcrumb-item,
    .quiz-breadcrumb .breadcrumb-item a {
        font-size: 18px;
        color: #464646;
        text-decoration: none;
    }

    .quiz-breadcrumb .breadcrumb-item.active {
        color: #464646;
    }

    .quiz-breadcrumb .quiz-back-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        padding: 4px 16px;
    }

    .quiz-breadcrumb .quiz-back-btn:hover {
        background-color: #1559A8;
    }

    /* ===== QUIZ INFO CARD ===== */
    .quiz-info-card {
        border: 2px solid #1F7BCC;
        border-radius: 12px;
        max-width: 600px;
    }

    .quiz-info-card h5 {
        color: #000;
        font-size: 22px;
    }

    .quiz-info-card h6 {
        color: #000;
        font-size: 22px;
    }

    .quiz-info-card .table td {
        font-size: 18px;
        padding: 8px 20px;
        border: none;
    }

    .quiz-info-card .table td:first-child {
        text-align: left;
    }

    .quiz-info-card .table td:last-child {
        text-align: right;
    }

    .quiz-test-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        padding: 8px 40px;
    }

    .quiz-test-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    /* ===== TIMER ===== */
    .quiz-timer-box {
        border: 1px solid #E5E5E5;
        border-radius: 30px;
        max-width: 300px;
        padding: 10px 30px;
    }

    .quiz-timer-value {
        color: #28a745;
        font-size: 22px;
        font-weight: bold;
    }

    /* ===== PROGRESS BAR ===== */
    .quiz-progress {
        display: flex;
        gap: 2px;
    }

    .quiz-progress-item {
        flex: 1;
        text-align: center;
        padding: 6px 0;
        font-size: 16px;
        background-color: #E5E5E5;
        color: #464646;
        cursor: default;
    }

    .quiz-progress-item.answered {
        background-color: #28a745;
        color: #fff;
    }

    .quiz-progress-item.current {
        background-color: #1F7BCC;
        color: #fff;
    }

    /* ===== CHOICES ===== */
    .quiz-choice-item {
        border-bottom: 1px solid #E5E5E5;
        padding: 10px 16px;
    }

    .quiz-choice-item:last-child {
        border-bottom: none;
    }

    .quiz-choice-item .form-check-input:checked {
        background-color: #1F7BCC;
        border-color: #1F7BCC;
    }

    .quiz-choice-item .form-check-label {
        font-size: 18px;
        cursor: pointer;
        width: 100%;
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

    .quiz-score-list {
        font-size: 18px;
    }

    .quiz-score-list .quiz-score-item {
        padding: 6px 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .quiz-score-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 8px;
    }

    .quiz-score-dot.correct {
        background-color: #28a745;
    }

    .quiz-score-dot.wrong {
        background-color: #dc3545;
    }

    .quiz-completed-btn {
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 8px 30px;
        font-size: 18px;
    }

    .quiz-completed-btn:hover {
        background-color: #218838;
        color: #fff;
    }

    /* ===== PRE-FOOTER ===== */
    .quiz-pre-footer {
        background-color: #fff;
        padding: 20px 80px 20px;
    }

    .quiz-report-btn {
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

    .quiz-report-btn::after {
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

    .quiz-report-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    .quiz-site-footer {
        background-color: #09479D;
        padding: 16px 8px;
        text-align: center;
    }

    .quiz-footer-text {
        color: #fff;
        font-size: 16px;
        margin: 0;
    }

    /* ===== MODAL ===== */
    .quiz-modal-icon {
        font-size: 64px;
        color: #28a745;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .quiz-breadcrumb {
            padding: 10px 20px;
        }

        .quiz-pre-footer {
            padding: 20px 20px;
            justify-content: center !important;
        }
    }
</style>

<div class="quiz-page-content">


<!-- ===== BREADCRUMB ===== -->
<div class="quiz-breadcrumb d-flex justify-content-between align-items-center">
    <a href="course-main.php" class="quiz-back-btn text-decoration-none">
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

<!-- ========================================= -->
<!-- ===== สถานะ 1: QUIZ INFO ===== -->
<!-- ========================================= -->
<div id="quiz-info" class="container py-5">
    <div class="quiz-info-card mx-auto p-4 text-center">
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
        <button class="quiz-test-btn" id="btn-start-quiz">TEST</button>
    </div>
</div>

<!-- ========================================= -->
<!-- ===== สถานะ 2: QUIZ TEST ===== -->
<!-- ========================================= -->
<div id="quiz-test" class="container py-4 d-none">

    <!-- Timer -->
    <div class="quiz-timer-box mx-auto text-center mb-4">
        <span class="me-2">Time:</span>
        <span class="quiz-timer-value" id="quiz-timer">00:20:00</span>
    </div>

    <!-- Question header + counter -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="fw-bold" style="font-size: 18px;">Question</span>
        <span id="quiz-counter" style="font-size: 18px;">0/10</span>
    </div>

    <!-- Progress bar 10 items -->
    <div class="quiz-progress mb-4" id="quiz-progress">
        <div class="quiz-progress-item current" data-q="0">1</div>
        <div class="quiz-progress-item" data-q="1">2</div>
        <div class="quiz-progress-item" data-q="2">3</div>
        <div class="quiz-progress-item" data-q="3">4</div>
        <div class="quiz-progress-item" data-q="4">5</div>
        <div class="quiz-progress-item" data-q="5">6</div>
        <div class="quiz-progress-item" data-q="6">7</div>
        <div class="quiz-progress-item" data-q="7">8</div>
        <div class="quiz-progress-item" data-q="8">9</div>
        <div class="quiz-progress-item" data-q="9">10</div>
    </div>

    <!-- Instruction -->
    <p class="fw-bold mb-2">The exams can choose only one answer.</p>

    <!-- Questions container -->
    <div id="quiz-questions">
        <!-- Question 1 -->
        <div class="quiz-question-block" data-question="0">
            <p class="mb-3">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0a" value="0">
                    <label class="form-check-label" for="q0a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0b" value="1">
                    <label class="form-check-label" for="q0b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0c" value="2">
                    <label class="form-check-label" for="q0c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0d" value="3">
                    <label class="form-check-label" for="q0d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="quiz-question-block d-none" data-question="1">
            <p class="mb-3">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1a" value="0">
                    <label class="form-check-label" for="q1a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1b" value="1">
                    <label class="form-check-label" for="q1b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1c" value="2">
                    <label class="form-check-label" for="q1c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1d" value="3">
                    <label class="form-check-label" for="q1d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="quiz-question-block d-none" data-question="2">
            <p class="mb-3">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2a" value="0">
                    <label class="form-check-label" for="q2a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2b" value="1">
                    <label class="form-check-label" for="q2b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2c" value="2">
                    <label class="form-check-label" for="q2c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2d" value="3">
                    <label class="form-check-label" for="q2d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="quiz-question-block d-none" data-question="3">
            <p class="mb-3">4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3a" value="0">
                    <label class="form-check-label" for="q3a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3b" value="1">
                    <label class="form-check-label" for="q3b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3c" value="2">
                    <label class="form-check-label" for="q3c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3d" value="3">
                    <label class="form-check-label" for="q3d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="quiz-question-block d-none" data-question="4">
            <p class="mb-3">5. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4a" value="0">
                    <label class="form-check-label" for="q4a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4b" value="1">
                    <label class="form-check-label" for="q4b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4c" value="2">
                    <label class="form-check-label" for="q4c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4d" value="3">
                    <label class="form-check-label" for="q4d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="quiz-question-block d-none" data-question="5">
            <p class="mb-3">6. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5a" value="0">
                    <label class="form-check-label" for="q5a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5b" value="1">
                    <label class="form-check-label" for="q5b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5c" value="2">
                    <label class="form-check-label" for="q5c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5d" value="3">
                    <label class="form-check-label" for="q5d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="quiz-question-block d-none" data-question="6">
            <p class="mb-3">7. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6a" value="0">
                    <label class="form-check-label" for="q6a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6b" value="1">
                    <label class="form-check-label" for="q6b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6c" value="2">
                    <label class="form-check-label" for="q6c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6d" value="3">
                    <label class="form-check-label" for="q6d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 8 -->
        <div class="quiz-question-block d-none" data-question="7">
            <p class="mb-3">8. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7a" value="0">
                    <label class="form-check-label" for="q7a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7b" value="1">
                    <label class="form-check-label" for="q7b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7c" value="2">
                    <label class="form-check-label" for="q7c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7d" value="3">
                    <label class="form-check-label" for="q7d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 9 -->
        <div class="quiz-question-block d-none" data-question="8">
            <p class="mb-3">9. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8a" value="0">
                    <label class="form-check-label" for="q8a">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8b" value="1">
                    <label class="form-check-label" for="q8b">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8c" value="2">
                    <label class="form-check-label" for="q8c">Lorem</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8d" value="3">
                    <label class="form-check-label" for="q8d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 10 -->
        <div class="quiz-question-block d-none" data-question="9">
            <p class="mb-3">10. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9a" value="0">
                    <label class="form-check-label" for="q9a">1</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9b" value="1">
                    <label class="form-check-label" for="q9b">2</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9c" value="2">
                    <label class="form-check-label" for="q9c">3</label>
                </div>
            </div>
            <div class="quiz-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9d" value="3">
                    <label class="form-check-label" for="q9d">4</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Buttons: Previous + Send -->
    <div class="text-center mt-4">
        <button class="btn btn-outline-primary me-2" id="btn-prev" disabled>Previous</button>
        <button class="btn btn-success" id="btn-send">Send</button>
    </div>
</div>

<!-- ========================================= -->
<!-- ===== สถานะ 3: QUIZ RESULT ===== -->
<!-- ========================================= -->
<div id="quiz-result" class="container py-4 d-none">
    <div class="row">
        <!-- ซ้าย: สรุปผล -->
        <div class="col-lg-7">
            <div class="quiz-result-card p-4 mb-4">
                <!-- Pass/Fail icon -->
                <div class="text-center mb-3" id="result-status">
                    <!-- JS will fill this -->
                </div>

                <!-- Summary table -->
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
                <a href="course-main.php" class="quiz-completed-btn text-decoration-none d-inline-block">Completed</a>
            </div>
        </div>

        <!-- ขวา: คะแนนรายข้อ -->
        <div class="col-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fw-bold" style="font-size: 20px; color: #1F7BCC;" id="result-score-title">Score</span>
                <span class="fw-bold" style="font-size: 28px; color: #1F7BCC;" id="result-total-score">-</span>
            </div>
            <div class="quiz-score-list" id="result-score-list">
                <!-- JS will fill this -->
            </div>
        </div>
    </div>
</div>

<!-- ========================================= -->
<!-- ===== MODAL: Completed ===== -->
<!-- ========================================= -->
<div class="modal fade" id="completedModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center p-4">
            <div class="mb-3">
                <i class="fa-solid fa-circle-check quiz-modal-icon"></i>
            </div>
            <h5 class="mb-3">Completed</h5>
            <button type="button" class="btn btn-primary mx-auto" style="width: 100px;" id="btn-modal-ok" data-bs-dismiss="modal">OK</button>
        </div>
    </div>
</div>
</div>

<!-- ===== PRE-FOOTER ===== -->
<div class="quiz-pre-footer d-flex justify-content-end align-items-center">
    <button type="button" class="quiz-report-btn d-flex align-items-center justify-content-center gap-2">
        <i class="fa-solid fa-triangle-exclamation"></i> Report problem
    </button>
</div>

<!-- ===== FOOTER ===== -->
<footer class="quiz-site-footer">
    <p class="quiz-footer-text">สงวนลิขสิทธิ์ ฉ 2021 Toyo Seikan (Thailand) Co., Ltd.</p>
</footer>

<script src="js/course-quiz.js"></script>

<?php include 'includes/footer.php'; ?>