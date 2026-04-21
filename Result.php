<?php include 'includes/header.php'; ?>

<style>
    .container-result {
        h4 {
            margin-top: 30px;
            padding-left: clamp(24px, 10vw, 70px);
        }

        .card-header {
            background-color: #0D2EA0;
            color: white;
            font-weight: bold;
        }

        .result-fail {
            color: #FF0909;
            font-weight: bold;
        }

        .result-pass {
            color: #4CAF50;
            font-weight: bold;
        }

        .btn-test {
            border-radius: 8px !important;
            background-color: #0D2EA0 !important;
            margin-top: 30px;
            width: 150px;
            border: none;
        }

        .table td {
            padding: 12px 16px;
            word-break: break-word;
        }

        .table td:first-child {
            border-right: 1px solid #dee2e6;
            font-weight: 500;
        }

        .custom-card {
            max-width: 980px;
            width: 100%;
            margin: 0 auto;
        }

        @media (max-width: 576px) {

            .custom-card {
                width: 90%;
                max-width: 420px;
                margin: 0 auto;
            }

            .table {
                max-width: 400px;
                width: 90%;
                margin: 20px auto 20px auto;
                font-size: 13px;
            }

            .table tr {
                margin-bottom: 10px;
                border-radius: 8px;
                overflow: hidden;
            }

            .table td {
                display: flex;
                justify-content: space-between;
                padding: 8px 12px;
                /* ลด padding */
                border: none;
            }

            .table td:first-child {
                border-right: none;
                font-weight: bold;
                background: #a1a6ac86;
                border-radius: 6px;
            }

            .btn-test {
                width: clamp(80px, 25%, 100px);
                padding: 6px 12px;
                font-size: 16px;
            }

        }
    }
</style>

<main class="container-fluid">
    <div class="container-result">
        <h4>ชื่อหลักสูตร</h4>

        <div class="card mt-3  custom-card">
            <div class="card-header text-center">
                <i class="bi bi-pencil-square"></i> Pre-Test result
            </div>
            <div class="card-body p-0 ">
                <table class="table mb-0">
                    <tr>
                        <td>Course name</td>
                        <td>Test course</td>
                    </tr>
                    <tr>
                        <td>Lesson</td>
                        <td>test1</td>
                    </tr>
                    <tr>
                        <td>Score</td>
                        <td>2 / 3 score</td>
                    </tr>
                    <tr>
                        <td>Score (%)</td>
                        <td>66.67 %</td>
                    </tr>
                    <tr>
                        <td>Test result</td>
                        <td class="result-fail" style="color: #FF0909;">Fail</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card mt-4 custom-card">
            <div class="card-header text-center">
                <i class="bi bi-pencil-square"></i> Post-Test result (1)
            </div>
            <div class="card-body p-0">
                <table class="table mb-0 ">
                    <tr>
                        <td>Course name</td>
                        <td>Test course</td>
                    </tr>
                    <tr>
                        <td>Lesson</td>
                        <td>test1</td>
                    </tr>
                    <tr>
                        <td>Score</td>
                        <td>3 / 3 score</td>
                    </tr>
                    <tr>
                        <td>Score (%)</td>
                        <td>100 %</td>
                    </tr>
                    <tr>
                        <td>Test result</td>
                        <td class="result-pass" style="color:#4CAF50;">Pass</td>
                    </tr>
                </table>
            </div>
        </div>

        <button class="btn btn-primary btn-test d-block mx-auto"
            onclick="window.location.href='course-main.php'">Back</button>
    </div>



</main>

<?php include 'includes/footer.php'; ?>