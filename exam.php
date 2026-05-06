<style>
    body {
        background: #f5f5f5;
        font-family: sans-serif;
    }

    .exam-wrapper {
        background: #fff;
        padding: 40px;
        min-height: 80vh;
    }

    .timer-box {
        width: 210px;
        height: 60px;
        border: 1px solid #cfcfcf;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;
        background: #fff;
    }

    .timer-box span {
        color: red;
        margin-left: 8px;
    }

    .question-bar {
        display: flex;
        width: 100%;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .question-tab {
        flex: 1;
        background: #d9d9d9;
        color: #000;
        text-align: center;
        padding: 8px;
        border-right: 1px solid #fff;
        font-size: 14px;
        cursor: pointer;
    }

    .question-tab.active {
        background: #4caf50;
        color: #fff;
        font-weight: bold;
    }

    .question-tab.done {
        background: #7bc67e;
        color: #fff;
    }

    .choice-box {
        position: relative;
        border: 1px solid #cfcfcf;
        height: 38px;
        display: flex;
        align-items: center;
        padding-left: 20px;
        margin-bottom: 8px;
        background: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .choice-box input[type="radio"] {
        display: none;
    }

    .custom-radio {
        width: 18px;
        height: 18px;
        border: 3px solid #bfbfbf;
        border-radius: 50%;
        background: #fff;
        margin-right: 12px;
        position: relative;
    }

    .choice-box input[type="radio"]:checked+.custom-radio::after {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 8px;
        height: 8px;
        background: #1e3fb4;
        border-radius: 50%;
    }

    .btn-custom {
        min-width: 90px;
    }

    .footer-custom {
        background: #0047a3;
        color: #fff;
        padding: 15px;
        font-size: 14px;
    }
</style>

<?php include 'includes/header.php'; ?>

<main class="container-fluid p-0">

    <div class="exam-wrapper container">

        <div class="d-flex justify-content-end mb-4">
            <small>
                หน้าแรก > หลักสูตร > บทที่ 1
            </small>
        </div>

        <div class="timer-box mb-5">
            Time:
            <span id="timer">00:19:31</span>
        </div>

        <div class="d-flex justify-content-between">
            <div>Question</div>
            <div id="questionCount">1/10</div>
        </div>

        <hr>

        <div class="question-bar" id="questionBar"></div>

        <p class="mt-4 mb-2">
            The exams can choose only one answer.
        </p>

        <h5 id="questionText"></h5>

        <div class="mt-4" id="choiceContainer"></div>

        <div class="text-center mt-4">
            <button class="btn btn-outline-primary btn-custom" id="prevBtn">
                Previous
            </button>

            <button class="btn btn-success btn-custom" id="nextBtn">
                Send
            </button>
        </div>

    </div>

</main>

<div class="footer-custom">
    <div class="container d-flex justify-content-between">
        <div>
            สงวนลิขสิทธิ์ © 2021 Toyo Seikan (Thailand) Co., Ltd.
        </div>

        <div>
            สงวนลิขสิทธิ์ © 2021 Toyo Seikan (Thailand) Co., Ltd.
        </div>
    </div>
</div>

<script>

    const questions = [];

    for (let i = 1; i <= 10; i++) {

        questions.push({
            question: i + ". Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            choices: [
                "Lorem ipsum dolor sit amet.",
                "Lorem ipsum dolor sit amet.",
                "Lorem ipsum dolor sit amet.",
                "Lorem ipsum dolor sit amet."
            ]
        });

    }

    let currentQuestion = 0;
    let answers = [];

    const questionText = document.getElementById("questionText");
    const choiceContainer = document.getElementById("choiceContainer");
    const questionBar = document.getElementById("questionBar");
    const questionCount = document.getElementById("questionCount");

    function loadQuestion() {

        const q = questions[currentQuestion];

        questionText.innerText = q.question;

        questionCount.innerText =
            (currentQuestion + 1) + "/10";

        choiceContainer.innerHTML = "";

        q.choices.forEach((choice, index) => {

            choiceContainer.innerHTML += `
                <label class="choice-box">

                    <input
                        type="radio"
                        name="answer"
                        value="${choice}"
                        ${answers[currentQuestion] == choice ? 'checked' : ''}
                    >

                    <span class="custom-radio"></span>

                    ${index + 1}

                </label>
            `;

        });

        document.querySelectorAll('input[name="answer"]')
            .forEach((radio) => {

                radio.addEventListener('change', function () {

                    answers[currentQuestion] = this.value;

                    loadQuestion();

                });

            });

        questionBar.innerHTML = "";

        for (let i = 0; i < questions.length; i++) {

            let tabClass = "question-tab";

            if (i == currentQuestion) {
                tabClass += " active";
            }
            else if (answers[i]) {
                tabClass += " done";
            }

            questionBar.innerHTML += `
                <div
                    class="${tabClass}"
                    onclick="goQuestion(${i})"
                >
                    ${i + 1}
                </div>
            `;

        }

    }

    function goQuestion(index) {

        currentQuestion = index;

        loadQuestion();

    }

    document.getElementById("nextBtn")
        .addEventListener("click", function () {

            if (currentQuestion < questions.length - 1) {

                currentQuestion++;

                loadQuestion();

            } else {

                alert("ส่งข้อสอบเรียบร้อยแล้ว");

                console.log(answers);

            }

        });

    document.getElementById("prevBtn")
        .addEventListener("click", function () {

            if (currentQuestion > 0) {

                currentQuestion--;

                loadQuestion();

            }

        });

    loadQuestion();

</script>

<?php include 'includes/footer.php'; ?>