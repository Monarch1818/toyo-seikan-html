<?php include "includes/header.php"; ?>

<style>
    .exam-summary-page-style {}
</style>

<main class="exam-summary-page-style p-sm-5 p-2">
    <div class="row px-md-5 mx-md-5 px-sm-2 mx-sm-2">
        <div class="col-md-8 col-12 mb-3">
            <div class="card border-primary mb-3">
                <div class="card-body text-center py-3">
                    <div>
                        <img src="assets/images/exam/Fail.png" alt="Fail image" class="img-fluid text-center"
                            width="50px">
                    </div>

                    <h5 class="text-danger">Failed</h5>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Number of question</span>
                    <span>10 Question</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Time allowed</span>
                    <span>20 Minutes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Time spent</span>
                    <span>2 Minutes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total score</span>
                    <span>10 Points</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Your score earned</span>
                    <span>3 points</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Percent</span>
                    <span>30.00%</span>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-12">
            <div class="d-flex justify-content-between text-primary border-bottom border-2">
                <h5>Score</h5>
                <h5>3</h5>
            </div>
            <ul class="list-group list-group-flush">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <?php if ($i % 3 == 0): ?>
                        <li class="list-group-item d-flex justify-content-between px-0"><span class=" text-success"><img
                                    src="assets/images/exam/green-dot.png" alt="">Question
                                <?php echo $i ?></span><span class="text-success">1</span></li>
                    <?php else: ?>
                        <li class="list-group-item d-flex justify-content-between px-0"><span><img
                                    src="assets/images/exam/red-dot.png" alt="">Question
                                <?php echo $i ?></span><span>0</span></li>
                    <?php endif ?>
                <?php endfor ?>
            </ul>
        </div>
    </div>
    <div class="text-center">
        <button class="btn text-light" style="background-color: #1F7BCC;">Completed</button>
    </div>
</main>




<?php include "includes/footer.php"; ?>