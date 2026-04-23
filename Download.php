<?php include 'includes/header.php'; ?>

<style>
    .container-download {

        h4 {
            margin-left: 5%;
            margin-top: 2%;
        }

        h5 {
            margin-left: 10%;
            margin-top: 2%;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-download {
            background-color: #1F7BCC !important;
            color: white !important;
            border-radius: 5%;
        }

        .exam-card {
            max-width: 500px;
            border: 2px solid #1F7BCC;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        .exam-card hr {
            border-top: 1px solid #999;
        }

        @media (max-width: 992px) {
            .col-10 {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        @media (max-width: 576px) {
            .col-10 {
                padding-left: 15px;
                padding-right: 15px;
            }

            .table {
                font-size: 13px;
            }
        }

        .btn-download {
            background-color: #1F7BCC !important;
            color: white !important;
            border-radius: 6px;
            padding: 6px 14px;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .btn-download {
                padding: 4px 8px;
                font-size: 12px;
            }

            .btn-download i {
                font-size: 12px;
            }
        }

        @media (max-width: 768px) {
            .table {
                overflow: hidden;
            }

            .table td,
            .table th {
                padding: 8px;
            }
        }
    }
</style>

<main class="container-fluid">
    <div class="container-download">
        <h4>เอกสารดาวน์โหลด</h4>
        <h5>เอกสารล่าสุด</h5>
        <div class="row">
            <div class="col-10 mx-auto">
                <table class="table table-bordered border-secondary">
                    <thead class="text-white text-center">
                        <tr>
                            <th scope="col" style="background-color: #1F7BCC; color: white;">ลำดับ</th>
                            <th scope="col" style="background-color: #1F7BCC; color: white;">รายการ</th>
                            <th scope="col" style="background-color: #1F7BCC; color: white;">วันที่ประกาศ</th>
                            <th scope="col" style="background-color: #1F7BCC; color: white;">ดาวน์โหลด</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download"> ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download">ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download">ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download">ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download">ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td class="text-start">The standard chunk of Lorem Ipsum used since the 1500s</td>
                            <td>29/07/2565</td>
                            <td><button class="btn btn-primary btn-download">ดาวน์โหลด <i class="bi bi-file-earmark-arrow-down-fill"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>