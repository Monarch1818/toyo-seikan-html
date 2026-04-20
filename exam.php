<?php include "includes/header.php" ?>
<main class="pt-3">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            <button class="btn btn-primary" style="border-radius: 5px;">
                < Back </button>
        </div>
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">หน้าหลัก</li>
                    <li class="breadcrumb-item">หลักสูตร</li>
                    <li class="breadcrumb-item active">บทที่ 1</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid text-center d-flex justify-content-center">
        <div class="card py-3 border border-dark" style="width: 18rem;">
            <h3>Time: <span class="text-danger">00:20:00</span></h3>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="m-0">Question</h3>
            <span>0/10</span>
        </div>
        <hr class="my-3" />
        <div class="row text-center g-0 mb-3">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <div class="col">
                    <button type="button" class="w-100 btn <?php echo ($i == 0) ? "btn-info text-light" : ""; ?>"
                        style="border-radius: 0;">
                        <?php echo $i + 1 ?>
                    </button>
                </div>
            <?php endfor ?>
        </div>
        <h5>The exams can choose only one answer.</h5>
        <div class="p-3">
            <h5>1. Lorem ipsum dolor sit amet.</h5>
            <div class="px-5">
                <div class="form-check">
                    <input type="radio" name="answer" id="answer1" class="form-check-input">
                    <label for="answer1" class="form-check-label">Lorem, ipsum dolor sit
                        amet consectetur
                        adipisicing
                        elit.</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="answer" id="answer2" class="form-check-input">
                    <label for="answer2" class="form-check-label">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="answer" id="answer3" class="form-check-input">
                    <label for="answer3" class="form-check-label">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="answer" id="answer4" class="form-check-input">
                    <label for="answer4" class="form-check-label">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit.</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-2">
            <button type="button" class="btn btn-outline-primary" style="width: 5rem;">Previous</button>
            <button type="button" class="btn btn-success" style="width: 5rem;">Send</button>
        </div>
    </div>
</main>
<?php include "includes/footer.php" ?>