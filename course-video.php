<?php include "includes/header.php"; ?>

<style>
    .course-video-page-style {}
</style>

<main class="course-video-page-style p-xl-5 p-2 w-100 h-100 position-relative">
    <a href="#" class="btn text-light px-4 position-absolute top-10 start-10"
        style="background-color: #1F7BCC;">Back</a>

    <button class="d-xl-none position-absolute top-10 end-0 btn btn-primary" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasUtil" aria-controls="offcanvasUtil">
        Open
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasUtil" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion w-100" id="accordionUtil">
                <div class="accordion-item">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        List
                    </button>
                    <div class="accordion-collapse collapse show" id="collapseOne">
                        <div class="accordion body">
                            <ul class="list-group">
                                <li class="list-group-item">Chapter 1: Introduction<br>
                                    Introduction
                                    <span class="badge text-light" style="background-color: #1F7BCC;">Completed</span>
                                </li>
                                <li class="list-group-item">Chapter 1: Introduction <span class="badge text-light"
                                        style="background-color: #1F7BCC;">Completed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Note
                    </button>
                    <div class="accordion-collapse collapse show" id="collapseTwo">
                        <div class="accordion body p-1">
                            <textarea class="form-control" rows="3"
                                placeholder="Type a message and take notes"></textarea>
                            <button type="button" class="btn btn-warning w-100 text-light">Note</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Note</h5>
                    <div>
                        <ol class="list-group list-group-numbered border-0">
                            <li class="list-group-item border-0">I Think...</li>
                            <li class="list-group-item border-0">Very good.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h4 class="border-bottom border-5 border-primary pb-1 fw-bold">Course</h4>
    </div>


    <div class="row px-xl-5">
        <div class="col-xl-8 col-12">
            <div class="card">
                <div class="card-body fw-bold">
                    <img src="assets/images/course-video/chapter-icon.png" alt="img"> Introduction
                </div>
            </div>
            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/K5KVEU3aaeQ?si=MvZAIjWSucOVODdl"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="card">
                <div class="card-body fw-bold">
                    <img src="assets/images/course-video/chapter-icon.png" alt="img"> Chapter 1 : Introduction
                </div>
            </div>
        </div>

        <div class="col-xl-4 d-xl-block d-none">
            <div class="accordion w-100" id="accordionUtil">
                <div class="accordion-item">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        List
                    </button>
                    <div class="accordion-collapse collapse show" id="collapseOne">
                        <div class="accordion body">
                            <ul class="list-group">
                                <li class="list-group-item">Chapter 1: Introduction<br>
                                    Introduction
                                    <span class="badge text-light" style="background-color: #1F7BCC;">Completed</span>
                                </li>
                                <li class="list-group-item">Chapter 1: Introduction <span class="badge text-light"
                                        style="background-color: #1F7BCC;">Completed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Note
                    </button>
                    <div class="accordion-collapse collapse show" id="collapseTwo">
                        <div class="accordion body p-1">
                            <textarea class="form-control" rows="3"
                                placeholder="Type a message and take notes"></textarea>
                            <button type="button" class="btn btn-warning w-100 text-light">Note</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Note</h5>
                    <div>
                        <ol class="list-group list-group-numbered border-0">
                            <li class="list-group-item border-0">I Think...</li>
                            <li class="list-group-item border-0">Very good.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script></script>

<?php include "includes/footer.php"; ?>