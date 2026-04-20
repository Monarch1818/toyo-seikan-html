<?php include 'includes/header.php'; ?>
<style>
.new-body .list-group-item{
    border: none;
}
.list-group-numbered > .list-group-item::before {
    color: orange;
    font-weight: bold; 
}
</style>

<main class="container ">
    <div class="container-fluid d-flex justify-content-between px-4 py-2">
        <p>ข่าวประชาสัมพันธ์</p>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-reset">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">ข่าวประชาสัมพันธ์</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-inline-block">
            <div class="container d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                </svg>
                <p class="ps-2">300</p>
            </div>
            <hr class="border border-primary border-3 opacity-100 rounded-pill m-0">
        </div>
    </div>

    <div class="container d-flex justify-content-center py-4">
        <img src="assets/images/robot.jpg" style="width:40%; height:auto;">
    </div>

    <div class="container d-flex flex-column align-items-center">
        <p class="heading4 pb-2">เปิดงาน Mobile World Congress 2026 - "The IQ Era"</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
        </svg>
        
        <ol class="list-group list-group-numbered new-body list-group-flush py-2" style="padding: 0 20%; border: none;">
            <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque debitis quibusdam cupiditate reprehenderit excepturi, iusto obcaecati optio aut amet accusamus error. Veniam doloremque aliquid facere!</li>
            <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, neque! Fugit obcaecati quo quis sint explicabo eos, beatae consectetur soluta aperiam vero, incidunt veritatis quaerat.</li>
            <li class="list-group-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium neque voluptate ullam voluptates eaque optio corrupti aliquam, corporis voluptatibus in veniam mollitia quia saepe magnam?</li>
        </ol>
        <img src="assets/images/robot.jpg" style="width:40%; height:auto;">
        <p class="small">reference picture</p>
        <div class="d-flex" style="padding: 0 30%;">
            <div class="vr bg-primary opacity-100" style="width: 5px;"></div>
                <p class="mb-0 ms-3">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Iste consequatur minima quasi vel aperiam facilis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, error repellendus facilis in enim sapiente voluptas.
                 Consequatur perferendis, maiores voluptatem eos consectetur quibusdam libero laudantium officiis sit autem quas quis!
                </p>
            </div>
        </div>
</main>

<?php include 'includes/footer.php'; ?>