<?php include 'includes/header.php'; ?>
<style>
    .container-video {

        h4 {
            margin-left: 5%;
            margin-top: 2%;
        }

        .search-container {
            display: flex;
            width: 400px;
            border: 2px solid #2c6fb7;
            border-radius: 10px;
            overflow: hidden;
        }

        .search-input {
            flex: 1;
            padding: 10px;
            outline: none;
            font-size: 18px;
            margin: 0 auto;
        }

        .search-btn {
            width: 60px;
            background-color: #2c6fb7;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #1d5aa0;
        }

        .search-container {
            display: flex;
            border: 2px solid #2c6fb7;
            border-radius: 8px;
            overflow: hidden;
        }

        .search-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        .search-label {
            margin: 0;
            margin-right: 30px;
        }

        .video {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .justify-content-center {
            margin-top: 30px;
        }

        .custom-tabs .nav-link,
        .custom-tabs .nav-link.active {
            background: none;
            border: none;
            color: #000;
            box-shadow: none;
        }

        .custom-tabs .nav-link:hover,
        .custom-tabs .nav-link.active:hover {
            color: #0077DD;
        }

        .search-input {
            border: 1px solid #fff;
        }


        .btn-outline-dark.custom-btn:hover {
            background-color: #1F7BCC;
            color: #fff;
            border-color: #1F7BCC;
        }

        .btn-outline-dark.custom-btn:active,
        .btn-outline-dark.custom-btn.active {
            background-color: #1F7BCC !important;
            color: #fff !important;
            border-color: #1F7BCC !important;
        }

        .btn-outline-dark.custom-btn:focus {
            box-shadow: 0 0 0 0.2rem rgba(31, 123, 204, 0.5);
        }
    }
</style>

<main class="container-fluid ">
    <div class="container-video">


        <h4 class="text-left mb-4 mt-3">วิดีโอแนะนำ</h4>

        <div class="search-wrapper">
            <h4 class="search-label">Search</h4>

            <div class="search-container">
                <input type="text" placeholder="search" class="search-input">

                <button class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="white" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="container text-center">
            <div class="row justify-content-center g-4">
                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card col-4 mx-3" style="width: 18rem; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#videoModal1">
                    <video width="100%" height="100%" style="object-fit: cover;" muted autoplay loop>
                        <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <p class="card-text text-start">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <video id="modalVideo1" width="100%" controls autoplay>
                                    <source src="https://cdn.pixabay.com/video/2026/02/17/335040_large.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>