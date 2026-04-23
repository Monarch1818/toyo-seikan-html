<?php include "includes/header.php"; ?>

<style>
    .exam-new-page-style {
        .btn-primary {
            background-color: #1F7BCC !important;
            margin: 0 !important;
            border-radius: 0 !important;
        }
    }
</style>

<main class="exam-new-page-style p-sm-5 p-2">
    <div class="d-flex justify-content-between mb-5">
        <div>
            <a href="exam-enter.php" class="btn text-light" style="background-color: #1F7BCC;">Back</a>
        </div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="#">หลักสูตร</a></li>
                    <li class="breadcrumb-item active" aria-current="page">บทที่ 1</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <div class="card px-5 py-2">
            <div class="card-body">
                <h5 class="m-0">Time: <span class="text-danger" id="countdownDisplay"></span>
                </h5>
            </div>
        </div>
    </div>
    <div class="m-sm-5">
        <div class="border-bottom border-2 d-flex justify-content-between mb-3">
            <h5>Question</h5>
            <h5>0/10</h5>
        </div>

        <div class="btn-group w-100 mb-3" id="questionButtons">
            <button type="button" class="btn btn-primary">1</button>
            <button type="button" class="btn btn-outline-secondary">2</button>
            <button type="button" class="btn btn-outline-secondary">3</button>
            <button type="button" class="btn btn-outline-secondary">4</button>
            <button type="button" class="btn btn-outline-secondary">5</button>
            <button type="button" class="btn btn-outline-secondary">6</button>
            <button type="button" class="btn btn-outline-secondary">7</button>
            <button type="button" class="btn btn-outline-secondary">8</button>
            <button type="button" class="btn btn-outline-secondary">9</button>
            <button type="button" class="btn btn-outline-secondary">10</button>
        </div>
        <form id="questionsForm" method="post">
            <div id="questions">
                <div id="question1">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer1" id="answer1_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer1_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer1" id="answer1_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer1_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer1" id="answer1_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer1_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer1" id="answer1_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer1_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question2" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, tempora!
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer2" id="answer2_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer2_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer2" id="answer2_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer2_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer2" id="answer2_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer2_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer2" id="answer2_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer2_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question3" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        3. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut incidunt voluptas tempore alias
                        corrupti ipsam?
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer3" id="answer3_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer3_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer3" id="answer3_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer3_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer3" id="answer3_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer3_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer3" id="answer3_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer3_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question4" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        4. Lorem, ipsum.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer4" id="answer4_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer4_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer4" id="answer4_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer4_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer4" id="answer4_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer4_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer4" id="answer4_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer4_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question5" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit earum inventore error
                        cumque, fugit illum ducimus aut facere voluptatem saepe?
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer5" id="answer5_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer5_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer5" id="answer5_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer5_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer5" id="answer5_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer5_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer5" id="answer5_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer5_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question6" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer6" id="answer6_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer6_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer6" id="answer6_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer6_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer6" id="answer6_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer6_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer6" id="answer6_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer6_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question7" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer7" id="answer7_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer7_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer7" id="answer7_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer7_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer7" id="answer7_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer7_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer7" id="answer7_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer7_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question8" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer8" id="answer8_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer8_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer8" id="answer8_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer8_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer8" id="answer8_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer8_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer8" id="answer8_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer8_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question9" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer9" id="answer9_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer9_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer9" id="answer9_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer9_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer9" id="answer9_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer9_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer9" id="answer9_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer9_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>
                <div id="question10" class="d-none">
                    <h5>The exams can choose only one answer.</h5>
                    <h4>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="px-md-5 py-md-3 fs-5">
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer10" id="answer10_1">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer10_1">
                                1. Lorem ipsum dolor sit amet.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer10" id="answer10_2">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer10_2">
                                2. Lorem, ipsum dolor.
                            </label>
                        </div>
                        <div class="form-check  position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer10" id="answer10_3">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer10_3">
                                3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </label>
                        </div>
                        <div class="form-check position-relative ps-0">
                            <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                name="answer10" id="answer10_4">
                            <label class="form-check-label border border-2 w-100 ps-3" for="answer10_4">
                                4. Lorem ipsum dolor sit amet consectetur adipisicing.
                            </label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-outline-primary" onclick="previousHandler()">Previous</button>
                <button type="submit" class="btn btn-success px-4">Send</button>
            </div>
        </form>
    </div>


</main>

<div class="modal" id="sendModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="assets/images/exam/Success.png" alt="Success image" class="img-fluid mb-3">
                    <h4 class="mb-3">Completed</h4>
                    <a href="exam-summary.php" class="btn px-4 text-light" style="background-color: #1F7BCC;">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentQuestion = 1;
    //ฟังชั่นตอนกด Submit
    const questionsForm = document.getElementById("questionsForm");
    questionsForm.addEventListener("submit", function (event) {
        event.preventDefault();

        currentQuestion++;
        updateQuestion();

        if (currentQuestion > 10) {

            const modal = new bootstrap.Modal(document.getElementById("sendModal"));
            modal.show();
        }
    })

    function previousHandler() {
        if (currentQuestion > 1) {
            currentQuestion--;
            updateQuestion();
        }

    }

    function updateQuestion() {
        const questionButtons = document.getElementById("questionButtons");
        const questions = document.getElementById("questions");


        for (i = 1; i <= 10; i++) {
            const button = questionButtons.children[i - 1];
            const question = questions.children[i - 1];
            if (i < currentQuestion) {
                button.setAttribute("class", "btn btn-success");
                if (currentQuestion == 11 && i == 10) {

                    question.setAttribute("class", "d-block");
                } else {
question.setAttribute("class", "d-none");
                }

            } else if (i == currentQuestion) {
                button.setAttribute("class", "btn btn-primary");
                question.setAttribute("class", "d-block");
            } else {
                button.setAttribute("class", "btn btn-outline-secondary")
                question.setAttribute("class", "d-none");

            }
        }
    }

    //ตัวนับถอยหลัง
    function startCountdown(minutes) {
        let timeInSec = minutes * 60;
        const display = document.getElementById("countdownDisplay");

        const interval = setInterval(() => {
            const mins = Math.floor(timeInSec / 60);
            const secs = timeInSec % 60;

            display.textContent = `00:${String(mins).padStart(2, '0')}:${String(secs).padStart(2, "0")}`

            if (timeInSec <= 0) {
                clearInterval(interval);
                display.textContent = "Time's Up!";
            }

            timeInSec--;
        }, 1000)
    }

    startCountdown(1);
</script>

<?php include "includes/footer.php"; ?>