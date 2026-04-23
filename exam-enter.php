<?php include "includes/header.php"; ?>

<style>
    .exam-enter-page-style {
        min-height: 78vh;
    }
</style>

<main class="exam-enter-page-style p-sm-5 p-2">
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
    <div class="d-flex align-items-center flex-column w-100 gap-5">
        <div class="card border-primary w-100 p-3 py-5" style="max-width: 600px;">
            <div class="card-body fs-5">
                <div class="text-center">
                    <h5 class="fs-3">Course Examination</h5>
                    <h5 class="fs-4">Course Name : How to use “IMCT IT Service Desk Tool”</h5>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>Number of questions</span>
                    <span>10 questions</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Time allowed</span>
                    <span>20 Minutes</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Total score</span>
                    <span>10 points</span>
                </div>
            </div>
        </div>
        <div>
            <a href="exam-new.php" class="btn text-light px-5" style="background-color: #1F7BCC;">TEST</a>
        </div>

    </div>

</main>

<?php include "includes/footer.php"; ?>