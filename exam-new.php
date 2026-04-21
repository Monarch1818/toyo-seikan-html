<?php include "includes/header.php"; ?>

<style>
    .exam-new-page-style {}
</style>

<main class="exam-new-page-style p-sm-5 p-2">
    <div class="d-flex justify-content-between mb-5">
        <div>
            <a href="#" class="btn text-light" style="background-color: #1F7BCC;">Back</a>
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
                <h5 class="m-0">Time: <span class="text-danger">00:20:00</span></h5>
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
                <button type="button" class="btn <?php if ($i <= 2)
                    echo "btn-success" ?>
                <?php if ($i == 3)
                    echo "btn-primary m-0" ?> <?php if ($i > 3)
                    echo "btn-outline-secondary" ?>">
                    <?php echo $i ?>
                </button>
            <?php endfor ?>
        </div>
        <div>
            <h5>The exams can choose only one answer.</h5>
            <h4>2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>

            <div class="p-md-5 fs-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers" id="answer1">
                    <label class="form-check-label border border-2 w-100" for="answer1">
                        1. Lorem ipsum dolor sit amet.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers" id="answer2">
                    <label class="form-check-label border border-2 w-100" for="answer2">
                        2. Lorem, ipsum dolor.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers" id="answer3">
                    <label class="form-check-label border border-2 w-100" for="answer3">
                        3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answers" id="answer4">
                    <label class="form-check-label border border-2 w-100" for="answer4">
                        4. Lorem ipsum dolor sit amet consectetur adipisicing.
                    </label>
                </div>

            </div>
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn btn-outline-primary">Previous</button>
                <button type="button" class="btn btn-success px-4" data-bs-toggle="modal"
                    data-bs-target="#sendModal">Send</button>
            </div>
        </div>
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



<?php include "includes/footer.php"; ?>