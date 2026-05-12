<?php include 'includes/header.php'; ?>
<style>
    /* ===== PAGE LAYOUT (footer ติดล่าง) ===== */
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .quiz-test-page-content {
        flex: 1;
    }

    /* ซ่อน footer เดิมจาก footer.php */
    footer.bg-light {
        display: none;
    }

    /* ===== BREADCRUMB ===== */
    .quiz-test-breadcrumb {
        padding: 10px 80px;
        font-size: 24px;
    }

    .quiz-test-breadcrumb .breadcrumb-item,
    .quiz-test-breadcrumb .breadcrumb-item a {
        font-size: 18px;
        color: #464646;
        text-decoration: none;
    }

    .quiz-test-breadcrumb .breadcrumb-item.active {
        color: #464646;
    }

    .quiz-test-back-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 3px;
        padding: 4px 16px;
    }

    .quiz-test-back-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    /* ===== TIMER ===== */
    .quiz-test-timer-box {
        border: 1px solid #E5E5E5;
        border-radius: 30px;
        max-width: 300px;
        padding: 10px 30px;
    }

    .quiz-test-timer-value {
        color: #28a745;
        font-size: 22px;
        font-weight: bold;
    }

    /* ===== PROGRESS BAR ===== */
    .quiz-test-progress {
        display: flex;
        gap: 2px;
    }

    .quiz-test-progress-item {
        flex: 1;
        text-align: center;
        padding: 6px 0;
        font-size: 16px;
        background-color: #E5E5E5;
        color: #464646;
        cursor: default;
    }

    .quiz-test-progress-item.answered {
        background-color: #28a745;
        color: #fff;
    }

    .quiz-test-progress-item.current {
        background-color: #1F7BCC;
        color: #fff;
    }

    /* ===== CHOICES ===== */
    .quiz-test-choice-item {
        border-bottom: 1px solid #E5E5E5;
        padding: 10px 16px;
    }

    .quiz-test-choice-item:last-child {
        border-bottom: none;
    }

    .quiz-test-choice-item .form-check-input:checked {
        background-color: #1F7BCC;
        border-color: #1F7BCC;
    }

    .quiz-test-choice-item .form-check-label {
        font-size: 18px;
        cursor: pointer;
        width: 100%;
    }

    /* ===== MODAL ===== */
    .quiz-test-modal-icon {
        font-size: 64px;
        color: #28a745;
    }

    /* ===== PRE-FOOTER ===== */
    .quiz-test-pre-footer {
        background-color: #fff;
        padding: 20px 80px 20px;
    }

    .quiz-test-report-btn {
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

    .quiz-test-report-btn::after {
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

    .quiz-test-report-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    .quiz-test-site-footer {
        background-color: #09479D;
        padding: 16px 8px;
        text-align: center;
    }

    .quiz-test-footer-text {
        color: #fff;
        font-size: 16px;
        margin: 0;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .quiz-test-breadcrumb {
            padding: 10px 20px;
        }

        .quiz-test-pre-footer {
            padding: 20px 20px;
            justify-content: center !important;
        }
    }
</style>

<div class="quiz-test-page-content">

<!-- ===== BREADCRUMB ===== -->
<div class="quiz-test-breadcrumb d-flex justify-content-between align-items-center">
    <a href="quiz-intro.php" class="quiz-test-back-btn text-decoration-none">
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

<!-- ===== QUIZ TEST ===== -->
<div class="container py-4">

    <!-- Timer -->
    <div class="quiz-test-timer-box mx-auto text-center mb-4">
        <span class="me-2">Time:</span>
        <span class="quiz-test-timer-value" id="quiz-timer">00:20:00</span>
    </div>

    <!-- Question header + counter -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <span class="fw-bold" style="font-size: 18px;">Question</span>
        <span id="quiz-counter" style="font-size: 18px;">0/10</span>
    </div>

    <!-- Progress bar 10 items -->
    <div class="quiz-test-progress mb-4" id="quiz-progress">
        <div class="quiz-test-progress-item current" data-q="0">1</div>
        <div class="quiz-test-progress-item" data-q="1">2</div>
        <div class="quiz-test-progress-item" data-q="2">3</div>
        <div class="quiz-test-progress-item" data-q="3">4</div>
        <div class="quiz-test-progress-item" data-q="4">5</div>
        <div class="quiz-test-progress-item" data-q="5">6</div>
        <div class="quiz-test-progress-item" data-q="6">7</div>
        <div class="quiz-test-progress-item" data-q="7">8</div>
        <div class="quiz-test-progress-item" data-q="8">9</div>
        <div class="quiz-test-progress-item" data-q="9">10</div>
    </div>

    <!-- Instruction -->
    <p class="fw-bold mb-2">The exams can choose only one answer.</p>

    <!-- Questions container -->
    <div id="quiz-questions">
        <!-- Question 1 -->
        <div class="quiz-test-question-block" data-question="0">
            <p class="mb-3">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0a" value="0">
                    <label class="form-check-label" for="q0a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0b" value="1">
                    <label class="form-check-label" for="q0b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0c" value="2">
                    <label class="form-check-label" for="q0c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q0" id="q0d" value="3">
                    <label class="form-check-label" for="q0d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="quiz-test-question-block d-none" data-question="1">
            <p class="mb-3">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1a" value="0">
                    <label class="form-check-label" for="q1a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1b" value="1">
                    <label class="form-check-label" for="q1b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1c" value="2">
                    <label class="form-check-label" for="q1c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" id="q1d" value="3">
                    <label class="form-check-label" for="q1d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="quiz-test-question-block d-none" data-question="2">
            <p class="mb-3">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2a" value="0">
                    <label class="form-check-label" for="q2a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2b" value="1">
                    <label class="form-check-label" for="q2b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2c" value="2">
                    <label class="form-check-label" for="q2c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" id="q2d" value="3">
                    <label class="form-check-label" for="q2d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="quiz-test-question-block d-none" data-question="3">
            <p class="mb-3">4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3a" value="0">
                    <label class="form-check-label" for="q3a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3b" value="1">
                    <label class="form-check-label" for="q3b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3c" value="2">
                    <label class="form-check-label" for="q3c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" id="q3d" value="3">
                    <label class="form-check-label" for="q3d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="quiz-test-question-block d-none" data-question="4">
            <p class="mb-3">5. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4a" value="0">
                    <label class="form-check-label" for="q4a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4b" value="1">
                    <label class="form-check-label" for="q4b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4c" value="2">
                    <label class="form-check-label" for="q4c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" id="q4d" value="3">
                    <label class="form-check-label" for="q4d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="quiz-test-question-block d-none" data-question="5">
            <p class="mb-3">6. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5a" value="0">
                    <label class="form-check-label" for="q5a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5b" value="1">
                    <label class="form-check-label" for="q5b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5c" value="2">
                    <label class="form-check-label" for="q5c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" id="q5d" value="3">
                    <label class="form-check-label" for="q5d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="quiz-test-question-block d-none" data-question="6">
            <p class="mb-3">7. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6a" value="0">
                    <label class="form-check-label" for="q6a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6b" value="1">
                    <label class="form-check-label" for="q6b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6c" value="2">
                    <label class="form-check-label" for="q6c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" id="q6d" value="3">
                    <label class="form-check-label" for="q6d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 8 -->
        <div class="quiz-test-question-block d-none" data-question="7">
            <p class="mb-3">8. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7a" value="0">
                    <label class="form-check-label" for="q7a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7b" value="1">
                    <label class="form-check-label" for="q7b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7c" value="2">
                    <label class="form-check-label" for="q7c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" id="q7d" value="3">
                    <label class="form-check-label" for="q7d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 9 -->
        <div class="quiz-test-question-block d-none" data-question="8">
            <p class="mb-3">9. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8a" value="0">
                    <label class="form-check-label" for="q8a">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8b" value="1">
                    <label class="form-check-label" for="q8b">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8c" value="2">
                    <label class="form-check-label" for="q8c">Lorem</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" id="q8d" value="3">
                    <label class="form-check-label" for="q8d">Lorem</label>
                </div>
            </div>
        </div>

        <!-- Question 10 -->
        <div class="quiz-test-question-block d-none" data-question="9">
            <p class="mb-3">10. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9a" value="0">
                    <label class="form-check-label" for="q9a">1</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9b" value="1">
                    <label class="form-check-label" for="q9b">2</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" id="q9c" value="2">
                    <label class="form-check-label" for="q9c">3</label>
                </div>
            </div>
            <div class="quiz-test-choice-item">
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

<!-- ===== MODAL: Completed ===== -->
<div class="modal fade" id="completedModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center p-4">
            <div class="mb-3">
                <i class="fa-solid fa-circle-check quiz-test-modal-icon"></i>
            </div>
            <h5 class="mb-3">Completed</h5>
            <button type="button" class="btn btn-primary mx-auto" style="width: 100px;" id="btn-modal-ok" data-bs-dismiss="modal">OK</button>
        </div>
    </div>
</div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // === ตั้งค่าเริ่มต้น ===
    var TOTAL_QUESTIONS = 10;               // จำนวนข้อทั้งหมด
    var TOTAL_TIME = 20 * 60;               // เวลาทั้งหมด 20 นาที (หน่วยวินาที)
    var CORRECT_ANSWERS = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; // เฉลย: index ของตัวเลือกที่ถูก (0=a, 1=b, 2=c, 3=d)

    // === ตัวแปรสถานะ ===
    var currentQuestion = 0;                // ข้อปัจจุบันที่แสดง
    var timeRemaining = TOTAL_TIME;         // เวลาที่เหลือ (วินาที)
    var timerInterval = null;               // ตัวจับเวลา (setInterval)
    var userAnswers = new Array(TOTAL_QUESTIONS).fill(null); // เก็บคำตอบของผู้ใช้

    // === ดึง element จาก HTML ===
    var btnPrev = document.getElementById("btn-prev");
    var btnSend = document.getElementById("btn-send");
    var btnModalOk = document.getElementById("btn-modal-ok");
    var timerDisplay = document.getElementById("quiz-timer");
    var counterDisplay = document.getElementById("quiz-counter");
    var progressItems = document.querySelectorAll(".quiz-test-progress-item");
    var questionBlocks = document.querySelectorAll(".quiz-test-question-block");

    // === เริ่มทำข้อสอบทันทีเมื่อโหลดหน้า ===
    startTimer();
    showQuestion(0);

    // === ฟังก์ชันนับเวลาถอยหลัง ===
    function startTimer() {
        updateTimerDisplay();
        timerInterval = setInterval(function () {
            timeRemaining--;
            updateTimerDisplay();
            // ถ้าหมดเวลา → ส่งข้อสอบอัตโนมัติ
            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                submitQuiz();
            }
        }, 1000);
    }

    // === อัปเดตเวลาที่แสดงบนหน้าจอ (HH:MM:SS) ===
    function updateTimerDisplay() {
        var hours = Math.floor(timeRemaining / 3600);
        var minutes = Math.floor((timeRemaining % 3600) / 60);
        var seconds = timeRemaining % 60;
        timerDisplay.textContent =
            String(hours).padStart(2, "0") + ":" +
            String(minutes).padStart(2, "0") + ":" +
            String(seconds).padStart(2, "0");
    }

    // === แสดงคำถามตาม index ที่ระบุ ===
    function showQuestion(index) {
        currentQuestion = index;

        // แสดง/ซ่อน block คำถาม
        questionBlocks.forEach(function (block, i) {
            block.classList.toggle("d-none", i !== index);
        });

        // อัปเดต progress bar (เน้นข้อปัจจุบัน)
        progressItems.forEach(function (item, i) {
            item.classList.remove("current");
            if (i === index) {
                item.classList.add("current");
            }
        });

        // อัปเดตตัวนับ เช่น "3/10"
        var answeredCount = userAnswers.filter(function (a) {
            return a !== null;
        }).length;
        counterDisplay.textContent = answeredCount + "/" + TOTAL_QUESTIONS;

        // ปุ่ม Previous: ปิดใช้งานถ้าอยู่ข้อแรก
        btnPrev.disabled = index === 0;
    }

    // === กดปุ่ม Previous → ย้อนกลับข้อก่อนหน้า ===
    btnPrev.addEventListener("click", function () {
        if (currentQuestion > 0) {
            saveCurrentAnswer();
            showQuestion(currentQuestion - 1);
        }
    });

    // === กดปุ่ม Send → ไปข้อถัดไป หรือส่งข้อสอบถ้าเป็นข้อสุดท้าย ===
    btnSend.addEventListener("click", function () {
        saveCurrentAnswer();
        if (currentQuestion < TOTAL_QUESTIONS - 1) {
            showQuestion(currentQuestion + 1);
        } else {
            submitQuiz();
        }
    });

    // === บันทึกคำตอบของข้อปัจจุบัน ===
    function saveCurrentAnswer() {
        var selected = document.querySelector('input[name="q' + currentQuestion + '"]:checked');
        if (selected) {
            userAnswers[currentQuestion] = parseInt(selected.value);
            // เปลี่ยนสี progress bar เป็นเขียว (ตอบแล้ว)
            progressItems[currentQuestion].classList.add("answered");
        }

        // อัปเดตตัวนับ
        var answeredCount = userAnswers.filter(function (a) {
            return a !== null;
        }).length;
        counterDisplay.textContent = answeredCount + "/" + TOTAL_QUESTIONS;
    }

    // === ส่งข้อสอบ → แสดง Modal "Completed" ===
    function submitQuiz() {
        saveCurrentAnswer();
        clearInterval(timerInterval);

        // เปิด Modal ผ่าน Bootstrap JS
        var completedModal = new bootstrap.Modal(document.getElementById("completedModal"));
        completedModal.show();
    }

    // === กด OK ใน Modal → บันทึกข้อมูลลง localStorage แล้วไปหน้า Result ===
    btnModalOk.addEventListener("click", function () {
        // คำนวณเวลาที่ใช้ (วินาที)
        var timeSpent = TOTAL_TIME - timeRemaining;

        // บันทึกลง localStorage เพื่อส่งไปหน้า quiz-result.php
        localStorage.setItem("quizUserAnswers", JSON.stringify(userAnswers));
        localStorage.setItem("quizTimeSpent", String(timeSpent));
        localStorage.setItem("quizTotalTime", String(TOTAL_TIME));
        localStorage.setItem("quizCorrectAnswers", JSON.stringify(CORRECT_ANSWERS));

        // ไปหน้าผลลัพธ์
        window.location.href = "quiz-result.php";
    });
});
</script>

<?php include 'includes/footer.php'; ?>
