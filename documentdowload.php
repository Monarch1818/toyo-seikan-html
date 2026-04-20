<?php include 'includes/header.php'; ?>

<body class="d-flex flex-column min-vh-100">
    <main class="container-fluid flex-grow-1">
        <div class="container px-4 py-4">
            <p class="h6">เอกสารดาวน์โหลด</p>
        </div>
        <div class="container ">
            <p class="h3 text-start"> เอกสารล่าสุด </p>
            <!-- Table -->
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                    <th scope="col"><p class="text-center">ลำดับ</p></th>
                    <th scope="col"><p>รายการ</p></th>
                    <th scope="col"><p class="text-center">วันที่ประกาศ</p></th>
                    <th scope="col"><p class="text-center">ดาวน์โหลด</p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><p class="text-center">1</p></th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, tenetur.</td>
                    <td><p class="text-center">29/07/2565</p></td>
                    <td class="text-center">
                        <button type="button" class="btn-link btn-primary">
                            ดาวน์โหลด 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0"/>
                            </svg>
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>