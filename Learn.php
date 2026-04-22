<?php include 'includes/header.php'; ?>

<style>
    .btn-back {
        border-radius: 6px;
        background-color: #1F7BCC !important;
        margin-top: 10px;
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
        width: 200px;
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

    .offcanvas {
        z-index: 1055;
    }
</style>

<main class="container-fluid ">
    <button type="button" class="btn btn-primary btn-back"
        onclick="window.location.href='course-detail.php'">
        &lt; Back
    </button>
    <div class="text-center">
        <div class="title-box">
            <h3>Course</h3>
            <hr class="custom-hr opacity-75">
        </div>
    </div>
    <div class="mt-3 ml-130">
        <button class="btn btn-light d-lg-none"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileMenu"
            style="margin-bottom: 10px;">
            ☰
        </button>

        <div class="row">
            <!-- LEFT -->
            <div class="col-12 col-lg-8">
                <div class=" card mb-2 p-2 d-flex flex-row align-items-center gap-2">
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
            <div class="col-12 col-lg-4 d-none d-lg-block">

                <!-- LIST -->
                <div class=" accordion" id="accordionExample">
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
                                <textarea class="form-control note-input" id="floatingTextarea2"></textarea>
                                <label for="floatingTextarea2" class="w-100 text-center">Type a message and take notes.</label>
                                <button type="button" class="btn btn-warning text-white save-note">
                                    Note
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card text-bg-light mb-3">
                        <div class="card-header text-center">Note</div>
                        <div class="card-body" id="noteDisplay" style="margin-bottom: 20px;">
                            <p class="card-text">1. I Think..</p>
                            <p class="card-text">2. Very good..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>

<div class="offcanvas offcanvas-start d-lg-none"
    tabindex="-1"
    id="mobileMenu"
    style="width: 320px;">

    <div class="offcanvas-body">

        <div class="accordion" id="mobileAccordion">

            <!-- LIST -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#m1">
                        List
                    </button>
                </h2>

                <div id="m1" class="accordion-collapse collapse show"
                    data-bs-parent="#mobileAccordion">
                    <div class="p-2">
                        <p>Chapter 1: Introduction</p>

                        <p>Introduction</p>
                        <span class="custom-btn text-white">Completed</span>

                        <hr>

                        <p>Chapter 1: Introduction</p>
                        <span class="custom-btn text-white">Completed</span>
                    </div>
                </div>
            </div>

            <!-- NOTE -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#m2">
                        Note
                    </button>
                </h2>

                <div id="m2" class="accordion-collapse collapse"
                    data-bs-parent="#mobileAccordion">
                    <div class="p-2">
                        <div class="form-floating">
                            <textarea class="form-control note-input" id="floatingTextMobile" placeholder=" "></textarea>
                            <label for="floatingTextMobile">Type a message and take notes.</label>
                        </div>
                        <button type="button" class="btn btn-warning text-white save-note">
                            Note
                        </button>

                    </div>
                </div>
            </div>

        </div>

        <!-- NOTE CARD -->
        <div class="card text-bg-light mt-3">
            <div class="card-header text-center">Note</div>
            <div class="card-body">
                <p>1. I Think..</p>
                <p>2. Very good..</p>
            </div>
        </div>

    </div>
</div>

<script>
    document.querySelectorAll(".save-note").forEach(btn => {

        btn.addEventListener("click", function() {

            let textarea = this.parentElement.querySelector(".note-input");
            let noteText = textarea.value.trim();

            if (noteText === "") {
                alert("กรุณาพิมพ์ข้อความก่อน");
                return;
            }

            // นับจากฝั่ง desktop
            let count = document.querySelectorAll("#noteDisplay p").length + 1;

            let pDesktop = document.createElement("p");
            pDesktop.className = "card-text";
            pDesktop.textContent = count + ". " + noteText;

            // clone สำหรับ mobile
            let pMobile = pDesktop.cloneNode(true);

            // ===== Desktop =====
            document.getElementById("noteDisplay").appendChild(pDesktop);

            // ===== Mobile (offcanvas) =====
            let mobileNoteBox = document.querySelector(".offcanvas .card-body");
            if (mobileNoteBox) {
                mobileNoteBox.appendChild(pMobile);
            }

            textarea.value = "";
        });

    });
</script>

<?php include 'includes/footer.php'; ?>