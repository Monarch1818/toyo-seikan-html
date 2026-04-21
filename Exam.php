<?php include 'includes/header.php'; ?>

<style>
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

    .exam-card {
        max-width: 234px;
        max-height: 67px;
        border: 2px solid #C2C2C2;
        border-radius: 8px;
        background-color: #f8f9fa;
    }

    .exam-card hr {
        border-top: 1px solid #999;
    }

    .full-hr {
        max-width: 988px;
        width: 100%;
        margin: 0 auto;
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
        /* ให้แต่ละช่องเท่ากัน */
        text-align: center;
    }

    .custom-pagination .page-link {
        width: 100%;
        color: black;
        /* ปกติ = ดำ */
        border: 1px solid #ddd;
    }

    /* active */
    .custom-pagination .page-item.active .page-link {
        background-color: #0077DD;
        color: white;
        /* active = ขาว */
        border-color: #0077DD;
    }

    /* hover (เพิ่มความสวย) */
    .custom-pagination .page-link:hover {
        background-color: #0077DD;
        color: white;
    }


    .exam-container {
        max-width: 988px;
        margin: 0 auto;
    }

    .exam-choice {
        margin: 0 auto;
        max-width: 900px;
        border: 1px solid #ddd;
        padding: 12px;
        margin-bottom: 10px;
        border-radius: 4px;
        display: flex;
        align-items: center;
    }

    .exam-choice:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .form-check-input {
        margin-right: 10px;
    }

    .header-box {
        max-width: 988px;
        width: 100%;
        margin: 0 auto;
        padding: 0 20px;
        /* กันชิดขอบ */
    }

    .btn-pv {
        border-color: #0D2EA0;
        color: #0D2EA0;
    }
</style>

<main class="container-fluid ">
    <div class="d-flex align-items-center justify-content-between mt-5 px-5">
        <button type="button" class="btn btn-primary btn-back">
            &lt; Back
        </button>

        <nav class="breadcrumb-container" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                <li class="breadcrumb-item"><a href="#">หลักสูตร</a></li>
                <li class="breadcrumb-item"><a href="#">บทที่ 1</a></li>
            </ol>
        </nav>
    </div>

    <div class="exam-card mx-auto mt-5 p-3">
        <h5 class="text-center mb-3">Time: <span class="text-danger">00:20:00</span></h5>
    </div>

    <div class="header-box d-flex align-items-center justify-content-between mt-5">
        <h6>Question</h6>
        <h6>0/10</h6>
    </div>
    <hr class="full-hr">
    <nav aria-label="Page navigation example" style="margin-top:10px; margin-bottom:10px;">
        <ul class="pagination custom-pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">7</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#">9</a></li>
            <li class="page-item"><a class="page-link" href="#">10</a></li>
        </ul>
    </nav>

    <div class="exam-container mt-3">

        <p>The exams can choose only one answer.</p>

        <p style="margin-left: 20px;margin-bottom:10px;">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <!-- Choices -->
        <div class="form-check exam-choice">
            <input class="form-check-input" type="radio" name="q1" id="c1">
            <label class="form-check-label w-100" for="c1">Lorem</label>
        </div>

        <div class="form-check exam-choice">
            <input class="form-check-input" type="radio" name="q1" id="c2">
            <label class="form-check-label w-100" for="c2">Lorem</label>
        </div>

        <div class="form-check exam-choice">
            <input class="form-check-input" type="radio" name="q1" id="c3">
            <label class="form-check-label w-100" for="c3">Lorem</label>
        </div>

        <div class="form-check exam-choice">
            <input class="form-check-input" type="radio" name="q1" id="c4">
            <label class="form-check-label w-100" for="c4">Lorem</label>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-center mt-4 gap-2">
            <button class="btn btn-outline-primary btn-pv">Previous</button>
            <button class="btn btn-success" style="background-color: #4CAF50 !important; border: none;">Send</button>
        </div>

    </div>
</main>

<?php include 'includes/footer.php'; ?>