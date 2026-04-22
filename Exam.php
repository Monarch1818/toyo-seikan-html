<?php include 'includes/header.php'; ?>

<style>
    .container-exam {

        .btn-back {
            border-radius: 3px !important;
            background-color: #1F7BCC !important;
        }

        .btn-test {
            border-radius: 3px !important;
            background-color: #1F7BCC !important;
            margin-top: 20px;
        }

        h3 {
            text-align: center;
        }

        .breadcrumb-item a {
            color: black;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            color: #333;
        }

        .breadcrumb {
            margin-bottom: 0;
            padding: 0;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-container {
            display: flex;
            align-items: center;
            margin-top: 2px;
        }

        .exam-card {
            max-width: 500px;
            border: 2px solid #1F7BCC;
            border-radius: 8px;
        }

        .exam-card hr {
            border-top: 2px solid #999;
        }

        /* ===== หน้า Exam ===== */
        .exam-page {
            display: none;
        }

        .full-hr {
            max-width: 988px;
            margin: 0 auto;
        }

        .exam-container {
            max-width: 988px;
            margin: 0 auto;
        }

        .exam-choice {
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .exam-choice:hover {
            background-color: #f1f1f1;
        }

        .custom-pagination {
            max-width: 988px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .custom-pagination .page-item {
            flex: 1;
            text-align: center;
        }

        .custom-pagination .page-link {
            width: 100%;
            color: black;
            border: 1px solid #ddd;
        }

        .custom-pagination .page-item.correct .page-link {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .custom-pagination .page-item.active .page-link {
            background-color: #0077DD;
            color: white;
            border-color: #0077DD;
            border: 1px solid #ddd;

        }

        .custom-pagination .page-link:hover {
            background-color: #0077DD;
            color: white;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .header-box {
            max-width: 988px;
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn-pv {
            border-color: #0D2EA0;
            color: #0D2EA0;
        }

        .btn-pv:hover {
            background-color: transparent !important;
            color: inherit !important;
            border-color: #0D2EA0 !important;
            box-shadow: none !important;
        }

        .pagination .page-item .page-link {
            background: #fff;
            border: 1px solid #dee2e6;
        }

        .pagination .page-item.active .page-link {
            background-color: #1F7BCC !important;
            border-color: #1F7BCC !important;
            color: #fff !important;
        }

        .pagination .page-item.done .page-link {
            background-color: #4CAF50 !important;
            border-color: #4CAF50 !important;
            color: #fff !important;
        }

        @media (max-width: 576px) {

            .px-5 {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }

            .exam-card {
                padding: 15px !important;
            }



            .exam-choice {
                font-size: 13px;
                padding: 10px;
            }

            .d-flex.justify-content-center.mt-4.gap-2 button {
                width: 100%;
            }

            .custom-pagination {
                overflow-x: auto;
                flex-wrap: nowrap;
            }

            .custom-pagination .page-item {
                flex: 0 0 auto;
                min-width: 36px;
            }
        }


        @media (max-width: 767px) {

            .px-5 {
                padding-left: 16px !important;
                padding-right: 16px !important;
            }

            .d-flex.align-items-center.justify-content-between.mt-5.px-5 {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 10px;
            }

            .exam-card {
                max-width: 100%;
            }

            .header-box,
            .exam-container {
                padding: 0 15px;
            }

            .custom-pagination {
                overflow-x: auto;
                flex-wrap: nowrap;
            }

            .custom-pagination .page-item {
                flex: 0 0 auto;
                min-width: 40px;
            }

            .d-flex.justify-content-center.mt-4.gap-2 {
                flex-direction: column;
            }

            .d-flex.justify-content-center.mt-4.gap-2 button {
                width: 100%;
            }

            .modal-content {
                width: 90% !important;
                margin: auto;
            }
        }


        @media (max-width: 992px) {

            .px-5 {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .exam-card {
                max-width: 600px;
            }

            .header-box,
            .exam-container {
                max-width: 90%;
            }
        }
    }
</style>


<main class="container-fluid">
    <div class="container-exam">
        <div class="d-flex align-items-center justify-content-between mt-3 px-5">
            <button type="button" class="btn btn-primary btn-back" id="backBtn"
                onclick="window.location.href='course-detail.php'">
                &lt; Back
            </button>

            <nav class="breadcrumb-container" style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="#">หลักสูตร</a></li>
                    <li class="breadcrumb-item"><a href="#">บทที่ 1</a></li>
                </ol>
            </nav>
        </div>

        <!-- ===== หน้าแรก ===== -->
        <div id="homePage">

            <div class="exam-card mx-auto mt-5 p-4">
                <h5 class="text-center mb-3">Course Examination</h5>
                <p class="text-center mb-3">
                    Course Name : How to use “IMCT IT Service Desk Tool”
                </p>

                <hr>

                <div class="d-flex justify-content-between">
                    <span>Number of questions</span>
                    <span>10 Questions</span>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <span>Time allowed</span>
                    <span>20 Minutes</span>
                </div>

                <div class="d-flex justify-content-between mt-2">
                    <span>Total score</span>
                    <span>10 Points</span>
                </div>
            </div>

            <button class="btn btn-primary btn-test d-block mx-auto"
                onclick="startExam()">TEST
            </button>

        </div>

        <!-- ===== หน้า Exam ===== -->
        <div id="examPage" class="exam-page">

            <div class="exam-card mx-auto mt-5 p-3">
                <h5 class="text-center">Time: <span class="text-danger" id="timer">00:20:00</span></h5>
            </div>

            <div class="header-box d-flex align-items-center justify-content-between mt-5">
                <h6>Question</h6>
                <h6 id="questionCounter">1/10</h6>
            </div>
            <hr class="full-hr">
            <nav aria-label="Page navigation example" style="margin-top:10px; margin-bottom:10px;">
                <ul class="pagination custom-pagination" id="pagination">
                    <li class="page-item active"><a class="page-link" href="#" data-index="1">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="2">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="3">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="4">4</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="5">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="6">6</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="7">7</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="8">8</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="9">9</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-index="10">10</a></li>
                </ul>
            </nav>

            <div class="exam-container mt-3">

                <p>The exams can choose only one answer.</p>

                <p id="questionText" style="margin-left: 20px; margin-bottom:10px;">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <!-- Choices -->
                <div id="choicesBox"></div>

                <!-- Buttons -->
                <div class="d-flex justify-content-center mt-4 gap-2">
                    <button id="prevBtn" class="btn btn-outline-primary btn-pv">Previous</button>
                    <button id="nextBtn" class="btn btn-success" style="background-color: #4CAF50 !important; border:none;">Send</button>
                </div>

            </div>
        </div>
        <div class="modal fade" id="completeModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4" style="width: 390px;">
                    <div class="mb-3">
                        <div style=" width:70px; height:70px; background:#28a745; border-radius:50%; display:flex; align-items:center; justify-content:center; margin:auto; ">
                            <span style="color:white; font-size:30px;">✔</span>
                        </div>
                    </div>
                    <h5 class="mb-3">Completed</h5>
                    <button type="button" class="btn btn-primary px-4 d-block mx-auto" data-bs-dismiss="modal" style="background-color: #1F7BCC !important; width: 90px; border-radius: 5px;">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function startExam() {
        document.getElementById("homePage").style.display = "none";
        document.getElementById("examPage").style.display = "block";
        updateUI();
        startTimer();
    }

    function backToHome() {
        document.getElementById("examPage").style.display = "none";
        document.getElementById("homePage").style.display = "block";
    }

    // <-- Exam -->
    const questions = [{
            text: "1. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "2. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "3. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "4. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "5. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "6. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "7. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "8. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "9. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        },
        {
            text: "10. Lorem ipsum dolor sit amet?",
            choices: ["1", "2", "3", "4", ]
        }
    ];

    let currentQuestion = 1;
    const totalQuestions = 10;
    const answers = {};
    let time = 20 * 60;
    let timerInterval = null;

    function startTimer() {
        if (timerInterval) return;

        timerInterval = setInterval(() => {

            const hours = Math.floor(time / 3600);
            const minutes = Math.floor((time % 3600) / 60);
            const seconds = time % 60;

            document.getElementById("timer").textContent =
                `${String(hours).padStart(2, "0")}:` +
                `${String(minutes).padStart(2, "0")}:` +
                `${String(seconds).padStart(2, "0")}`;

            time--;

            if (time < 0) {
                clearInterval(timerInterval);
                timerInterval = null;
                document.getElementById("timer").textContent = "00:00:00";
                alert("หมดเวลาแล้ว!");
                const modal = new bootstrap.Modal(document.getElementById('completeModal'));
                modal.show();
            }
        }, 1000);
    }

    function renderQuestion() {
        const q = questions[currentQuestion - 1];

        document.getElementById("questionText").textContent = q.text;

        const box = document.getElementById("choicesBox");
        box.innerHTML = "";

        q.choices.forEach((choice, i) => {
            const id = `q${currentQuestion}_c${i}`;

            const isChecked = answers[currentQuestion] == i;

            box.innerHTML += `
            <div class="form-check exam-choice">
                <input class="form-check-input" type="radio"
                    name="q${currentQuestion}"
                    id="${id}"
                    value="${i}"
                    ${isChecked ? "checked" : ""}>
                    
                <label class="form-check-label w-100" for="${id}">
                    ${choice}
                </label>
            </div>
        `;
        });
    }

    function updateUI() {
        document.getElementById("questionCounter").textContent =
            `${currentQuestion}/${totalQuestions}`;

        renderQuestion();

        document.getElementById("backBtn").style.visibility =
            (currentQuestion === 1) ? "visible" : "hidden";

        document.getElementById("prevBtn").style.display =
            currentQuestion === 1 ? "none" : "inline-block";

        document.getElementById("nextBtn").textContent =
            currentQuestion === totalQuestions ? "Send" : "Send";

        updatePagination();
    }

    function updatePagination() {
        const items = document.querySelectorAll("#pagination .page-item");

        items.forEach((item, index) => {
            item.classList.remove("active", "done");

            if (index < currentQuestion - 1) {
                item.classList.add("done");
            }

            if (index === currentQuestion - 1) {
                item.classList.add("active");
            }
        });
    }
    document.getElementById("prevBtn").addEventListener("click", () => {
        if (currentQuestion > 1) {
            currentQuestion--;
            updateUI();
        }
    });
    document.getElementById("nextBtn").addEventListener("click", () => {

        const selected = document.querySelector(`input[name="q${currentQuestion}"]:checked`);

        if (!selected) {
            alert("กรุณาเลือกคำตอบ");
            return;
        }

        answers[currentQuestion] = selected.value;

        if (currentQuestion < totalQuestions) {
            currentQuestion++;
            updateUI();
        } else {
            const items = document.querySelectorAll("#pagination .page-item");
            items.forEach((item) => item.classList.add("done"));

            document.getElementById("prevBtn").style.display = "none";

            const modal = new bootstrap.Modal(document.getElementById('completeModal'));
            modal.show();
        }
    });

    updateUI();

    document.querySelector("#completeModal .btn").addEventListener("click", () => {
        window.location.href = "summary-exam.php";
    });
</script>

<?php include 'includes/footer.php'; ?>