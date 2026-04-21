<?php include 'includes/header.php'; ?>

<style>
    .btn-back {
        border-radius: 3px !important;
        margin-top: 60px;
        margin-left: 68px;
        background-color: #1F7BCC !important;
    }

    .title-box {
        display: inline-block;
    }

    .custom-hr {
        border-top: 6px solid #1F7BCC;
        border-radius: 10px;
        margin: 5px 0 0 0;
        width: 100%;
    }

    h3 {
        text-align: center;
    }

    .card {
        border-radius: 8px;
    }

    .card-header {
        font-weight: bold;
    }

    video {
        border-radius: 8px;
    }

    .col-lg-8 {
        flex: 0 0 auto;
        width: 50%;
        margin-left: 130px;
    }

    .btn-sm {
        border-radius: 3px !important;
        margin-top: 60px;
        margin-left: 68px;
        background-color: #1F7BCC !important;
    }

    .custom-btn {
        font-size: 13px;
        padding: 3px 10px;
        border-radius: 8px;
        background-color: #1F7BCC !important;
        margin-left: 10px;
    }

    .full-hr {
        margin-left: -20px;
        margin-right: -20px;
    }

    .btn-warning {
        color: white;
        width: 350px;
        display: block;
        /* สำคัญ */
        margin: 10px auto;
    }

    .btn-warning:hover {
        color: white;

    }

    .form-control {
        height: 100px;
        width: 260px;
        margin-inline: auto;
        margin-top: 20px;
    }

    .text-bg-light {
        width: 100%;
        margin-top: 20px
    }

    .accordion-button {
        background-color: #1F7BCC;
        color: white;
    }

    .accordion-button:not(.collapsed) {
        background-color: #1F7BCC !important;
        color: white;
    }

    .accordion-button::after {
        filter: brightness(0) invert(1);
    }

    .form-floating>label {
        background: transparent !important;
    }

    .form-floating>label::after {
        background: transparent !important;
    }

    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label {
        background: transparent !important;
    }
</style>

<main class="container-fluid ">
    <button type="button" class="btn btn-primary btn-back">
        &lt; Back
    </button>
    <div class="text-center">
        <div class="title-box">
            <h3>Course</h3>
            <hr class="custom-hr opacity-75">
        </div>
    </div>
    <div class="mt-3 ml-130">
        <div class="row">
            <!-- LEFT -->
            <div class="col-lg-8">
                <div class="card mb-2 p-2 d-flex flex-row align-items-center gap-2">
                    <i class="bi bi-bullseye" style="color: #1F7BCC;"></i>
                    <h6 class="mb-0">Introduction</h6>
                </div>
                <!-- Video -->
                <video controls width="100%">
                    <source src="https://cdn.pixabay.com/video/2026/04/08/345244_large.mp4" type="video/mp4">
                </video>

                <div class="card mb-2 p-2 d-flex flex-row align-items-center gap-2">
                    <i class="bi bi-bullseye" style="color: #1F7BCC;"></i>
                    <h6 class="mb-0">Chapter1 : Introduction</h6>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-4">

                <!-- LIST -->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-list-ul me-2 "></i> List
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Chapter 1: Introduction</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0">Introduction</p>
                                        <span class="custom-btn text-white">
                                            Completed
                                        </span>
                                    </div>
                                </div>
                                <hr class="full-hr">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0">Chapter 1: Introduction</p>
                                        <span class="custom-btn text-white">
                                            Completed
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-pencil-square me-2"></i> Note
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px; width:400px;"></textarea>
                                <label for="floatingTextarea2" class="w-100 text-center ">Type a message and take notes.</label>
                                <button type="button" class="btn btn-warning">Note</button>
                            </div>
                        </div>
                    </div>
                    <div class="card text-bg-light mb-3">
                        <div class="card-header text-center">Note</div>
                        <div class="card-body" style="margin-bottom: 20px;">
                            <p class="card-text">1.I Think..</p>
                            <p class="card-text">2.Very good..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>