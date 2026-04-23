<?php include "includes/header.php"; ?>

<style>
    .exam-new-page-style {}
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

        <div class="btn-group w-100 mb-3">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <?php if ($i <= 2): ?>
                    <button type="button" class="btn btn-success" data-bs-toggle="collapse"
                        data-bs-target="#question<?php echo $i ?>" aria-expanded="false"
                        aria-controls="question<?php echo $i ?>"><?php echo $i ?></button>
                <?php elseif ($i == 3): ?>
                    <button type="button" class="btn btn-primary m-0" data-bs-toggle="collapse"
                        data-bs-target="#question<?php echo $i ?>" aria-expanded="true"
                        aria-controls="question<?php echo $i ?>"><?php echo $i ?></button>
                <?php else: ?>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        data-bs-target="#question<?php echo $i ?>" aria-expanded="false"
                        aria-controls="question<?php echo $i ?>"><?php echo $i ?></button>
                <?php endif ?>
            <?php endfor ?>
        </div>
        <form id="questionsForm">
            <div id="questions">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div class="collapse <?php if ($i == 3)
                        echo "show" ?>" id="question<?php echo $i ?>" data-bs-parent="#questions">
                        <h5>The exams can choose only one answer.</h5>
                        <h4>
                            <?php echo $i ?>. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h4>

                        <div class="px-md-5 py-md-3 fs-5">
                            <div class="form-check position-relative ps-0">
                                <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                    name="answers" id="answer1">
                                <label class="form-check-label border border-2 w-100 ps-3" for="answer1">
                                    1. Lorem ipsum dolor sit amet.
                                </label>
                            </div>
                            <div class="form-check  position-relative ps-0">
                                <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                    name="answers" id="answer2">
                                <label class="form-check-label border border-2 w-100 ps-3" for="answer2">
                                    2. Lorem, ipsum dolor.
                                </label>
                            </div>
                            <div class="form-check  position-relative ps-0">
                                <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                    name="answers" id="answer3">
                                <label class="form-check-label border border-2 w-100 ps-3" for="answer3">
                                    3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </label>
                            </div>
                            <div class="form-check position-relative ps-0">
                                <input class="form-check-input position-absolute" style="left: 20px; top: 1px;" type="radio"
                                    name="answers" id="answer4">
                                <label class="form-check-label border border-2 w-100 ps-3" for="answer4">
                                    4. Lorem ipsum dolor sit amet consectetur adipisicing.
                                </label>
                            </div>

                        </div>

                    </div>
                <?php endfor ?>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-outline-primary">Previous</button>
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

<div class="modal" id="failModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="assets/images/exam/Fail.png" alt="Fail image" class="img-fluid mb-3">
                    <h4 class="mb-3">Failed, please try again.</h4>
                    <button class="btn px-4 text-light" style="background-color: #1F7BCC;" data-bs-dismiss="modal"
                        aria-label="Close">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms));

    //ฟังชั่นตอนกด Submit
    const questionsForm = document.getElementById("questionsForm");
    questionsForm.addEventListener("submit", async function (event) {
        event.preventDefault();

        await delay(2000); //สมมุตว่ากำลังส่งข้อมูล

        const randomResponse = Math.random() < 0.5; //สุ่มว่าจะสำเร็จหรือไม่

        console.log(randomResponse)

        //อันนี้สมมุตว่าส่งข้อมูลสำเร็จ แบบไม่มี error นะฮะ
        if (randomResponse) {
            const modal = new bootstrap.Modal(document.getElementById("sendModal"));
            modal.show();
        } else {
            const modal = new bootstrap.Modal(document.getElementById("failModal"));
            modal.show();
        }

    })

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