<?php include 'includes/header.php'; ?>

<body class="d-flex flex-column min-vh-100">
    <main class="container flex-grow-1">
        <div class="container px-4 py-2">
            <p class="h3">คอร์สเรียนออนไลน์</p>
        </div>
        <div class="container d-flex flex-column align-items-center">
          <div class="container d-flex justify-content-center">
              <p class="h3 me-2">Search</p>
            <!-- search input -->
            <div class="input-group mb-3 w-25 me-2"> 
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-text bg-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </span>
            </div>
            <!-- course select -->
            <div class="dropdown me-2">
                <button class="btn btn-primary btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    course
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">course1</a></li>
                    <li><a class="dropdown-item" href="#">course2</a></li>
                    <li><a class="dropdown-item" href="#">course3</a></li>
                </ul>
            </div>
          </div>
          <!-- Nav Tabs -->
            <div class="container mb-4">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <p class="h3"><a class="nav-link active " aria-current="page" href="#">Course</a></p>
                    </li>
                    <li class="nav-item">
                        <p class="h3"><a class="nav-link text-dark" href="#">My Course</a></p>
                    </li>
                    <li class="nav-item">
                        <p class="h3"><a class="nav-link text-dark" href="#">Compleated</a></p>
                    </li>
                </ul>
                <hr class="border border-primary border-2 opacity-100 rounded-pill m-0">
            </div>
            <!-- Nav Tabs End -->

            <!-- Card -->
            <div class="card" style="width: 18rem;">
                <img src="assets/images/desktop.jpg" class="card-img-top" alt="Computer">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                        </svg>
                        ประเภทหลักสูตร
                    </h6>
                    <h5 class="card-title">หลักสูตรการนำเสนออย่างมืออาชีพ</h5>
                    <div class="container d-flex align-items-center justify-content-between">
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                            </svg>
                            1 ชม. 30 นาที
                        </h6>
                        <a href="#" class="btn btn-primary">เข้าเรียน</a>
                    </div>
                </div>
            </div>
            <!-- Card End -->
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>