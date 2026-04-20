<?php include 'includes/header.php'; ?>

<body class="d-flex flex-column min-vh-100 bg-light">
    <main class="container flex-grow-1 py-4">
        <div class="mb-3 px-2">
            <p class="h4 text-secondary">Profile</p>
        </div>

        <div class="container border border-3 border-primary bg-white p-5 shadow" style="border-radius: 30px; max-width: 1000px;">
            
            <div class="text-center mb-4">
                <div class="text-primary mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                    </svg>
                <p class="h5 text-primary fw-bold">Admin</p>
                
                <div class="my-3">
                    <img src="assets/images/user.png" class="img-fluid rounded-circle border shadow-sm" alt="user" style="width: 120px; height: 120px; object-fit: cover;">
                </div>

                <button class="btn btn-outline-primary rounded-pill px-5 py-1" type="button" style="font-size: 0.9rem;">Edit</button>
            </div>

            <div class="row justify-content-center g-5">
                
                <div class="col-md-5">
                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Organization</label>
                        <select class="form-select border-primary">
                            <option selected>Toyo Seikan</option>
                            <option value="1">Organization#1</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Department</label>
                        <select class="form-select border-primary">
                            <option selected>Admin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Email</label>
                        <input class="form-control border-primary bg-white" type="text" value="ascnetwork@brother.co.th" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Full name</label>
                        <input class="form-control border-primary bg-white" type="text" value="Administrator" readonly>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Company</label>
                        <select class="form-select border-primary">
                            <option selected>Toyo Seikan</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Position</label>
                        <select class="form-select border-primary">
                            <option selected>Admin</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Password</label>
                        <input class="form-control border-primary bg-white" type="text" value="Admin" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary fw-semibold">Employee ID</label>
                        <input class="form-control border-primary bg-white" type="text" value="1010101010" readonly>
                    </div>
                </div>

            </div> 
        </div> 
    </main>
</body>
    <?php include 'includes/footer.php'; ?>
