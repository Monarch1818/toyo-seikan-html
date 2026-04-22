<?php include 'includes/header.php'; ?>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('resize', function() {
                var offcanvasElement = document.getElementById('sidebarOffcanvas');
                if (offcanvasElement) {
                    var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
                    if (window.innerWidth >= 992 && offcanvasInstance) {
                        offcanvasInstance.hide();
                    }
                }
            });

        });
</script>

<style>
    .accordion-button {
        background-color: var(--bs-primary) !important; 
        color: white !important;           
    }

    .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);     /* ปรับลูกศรให้เป็นสีขาวตอนเปิด */
    }

</style>

    <main class="container flex-grow-1 py-4">
        <div class="contaier d-flex flex-column">
            <div class="row mb-4">
                <div class="col">
                    <button class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                        </svg> 
                        Back
                    </button>
                </div>
                <div class="col">
                    <p class="h3 text-center">Course</p>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="shadow-sm d-flex align-items-center rounded-pill mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bullseye text-primary" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                        <p class="ms-3 fw-bold" style="font-size:20px;">Introduction</p>
                    </div>
                    <div class="ratio ratio-16x9 mb-2">
                        <iframe src="https://www.youtube.com/embed/wDchsz8nmbo?si=nxQe7uoCDwgr3dSy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="shadow-sm d-flex align-items-center rounded-pill mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bullseye text-primary" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        </svg>
                        <p class="ms-3 fw-bold" style="font-size:20px;">Chapter 1 : Introduction</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-lg-none d-flex justify-content-center">
                        <button class="btn btn-primary  mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
                            Menu
                        </button>
                    </div>
                    
                    <div class="d-none d-lg-block d-md-none mb-3">
                        <!-- accordion 1 -->
                        <div class="accordion mb-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    List
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Chaper 1 : Introduction<br>
                                    <h3>Introduction <span class="badge text-bg-primary-subtle text-primary">Compleated</span></h3>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- accordion 2 -->
                        <div class="accordion mb-3" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    Note
                                </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <textarea class="Note-area w-100 mb-2" id="Note-text" placeholder="Type a messeage and take a note" rows="3"></textarea>
                                            <button type="button" class="btn btn-warning w-100">Note</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded mb-3">
                            <p class="h3 text-center mt-3">Note</p>
                            <hr class="w-75 mx-auto">
                            <p class="leading ms-4 mb-4"> 1. I think....<br>2.Very Good.....</p>
                        </div>
                    </div>
                    <!-- Mobile -->
                     <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="sidebarOffcanvas" aria-labelledby="sidebarOffcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="sidebarOffcanvasLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="d-sm-block mb-3">
                                    <!-- accordion 1 -->
                                    <div class="accordion mb-3" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                List
                                            </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Chaper 1 : Introduction<br>
                                                <h3>Introduction <span class="badge text-bg-primary-subtle text-primary">Compleated</span></h3>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion 2 -->
                                    <div class="accordion mb-3" id="accordionExample2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                Note
                                            </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body">
                                                    <div class="mb-3">
                                                        <textarea class="Note-area w-100 mb-2" id="Note-text" placeholder="Type a messeage and take a note" rows="3"></textarea>
                                                        <button type="button" class="btn btn-warning w-100">Note</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border rounded mb-3">
                                        <p class="h3 text-center mt-3">Note</p>
                                        <hr class="w-75 mx-auto">
                                        <p class="leading ms-4 mb-4"> 1. I think....<br>2.Very Good.....</p>
                                    </div>
                            </div>
                        <!-- End offcanvas-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include 'includes/footer.php'; ?>
