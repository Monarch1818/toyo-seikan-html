<?php include 'includes/header.php'; ?>

<style>
    .main-summary {
        max-width: 1100px;
        margin: auto;
    }

    .main-summary {
        .result-box {
            border: 2px solid #0D2EA0;
            border-radius: 8px;
            text-align: center;
            padding: 25px;
            background: #f9fbff;
        }

        .result-box i {
            font-size: 36px;
            color: red;
        }

        .result-box p {
            margin: 8px 0 0;
            color: red;
            font-weight: 600;
            font-size: 18px;
        }

        .custom-table {
            border: 1px solid #0D2EA0;
            overflow: hidden;
            background: #fff;
            border-collapse: separate;
            border-radius: 5px;
        }

        .custom-table td {
            border-bottom: 1px solid #DEDEDE !important;
            padding: 12px 16px;
            font-size: 14px;
        }

        .custom-table tr:last-child td {
            border-bottom: none !important;
        }

        .custom-table tr:hover {
            background-color: #f5f9ff;
        }

        .score-table {
            background: #fff;
            border-radius: 8px;
        }

        .score-table thead th {
            border-bottom: 3px solid #C2C2C2;
        }


        .score-table td {
            border: none;
            padding: 8px 10px;
            font-size: 14px;
        }

        .score-table tr:hover {
            background-color: #f8f8f8;
        }

        .dot-red {
            color: #ff4d4f;
            font-size: 10px;
            margin-right: 6px;
        }

        .dot-green {
            color: #28a745;
            font-size: 10px;
            margin-right: 6px;
        }

        .btn-completed {
            background-color: #1F7BCC !important;
            border-radius: 6px;
            margin-top: 20px;
            font-weight: 500;
            margin-right: 350px;
        }

        .score-table {
            width: 100%;
            border-style: solid;
            border-width: 1px;
            border-color: white white #C2C2C2 white;
            border-radius: 8px;
            border-collapse: collapse;
            background: #fff;
        }

        .score-table th {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #DEDEDE;
        }


        .score-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #DEDEDE;
        }


        .score-table tr:last-child td {
            border-bottom: 1px solid #DEDEDE;
        }


        @media (max-width: 768px) {
            .result-box {
                padding: 15px;
            }

            .custom-table td {
                padding: 10px;
                font-size: 13px;
            }

            .btn-completed {
                margin: 0 auto;
            }
        }
    }
</style>

<main class="container-fluid mt-4 main-summary">
    <div class="row g-3" style="margin-top: 40px;">

        <!-- LEFT -->
        <div class="col-md-8 col-12">
            <div class="result-box">
                <i class="bi bi-x-circle-fill"></i>
                <p>Failed</p>
            </div>

            <table class="table mt-3 custom-table">
                <tbody>
                    <tr>
                        <td>Number of question</td>
                        <td class="text-end">10 Questions</td>
                    </tr>
                    <tr>
                        <td>Time allowed</td>
                        <td class="text-end">20 Minutes</td>
                    </tr>
                    <tr>
                        <td>Time spent</td>
                        <td class="text-end">2 Minutes</td>
                    </tr>
                    <tr>
                        <td>Total score</td>
                        <td class="text-end">10 Points</td>
                    </tr>
                    <tr>
                        <td>Your score earned</td>
                        <td class="text-end">2 Points</td>
                    </tr>
                    <tr>
                        <td>Percent</td>
                        <td class="text-end">30.00%</td>
                    </tr>
                </tbody>
            </table>


        </div>

        <!-- RIGHT -->
        <div class="col-md-4 col-12">
            <table class="score-table">
                <thead>
                    <tr>
                        <th style="color: #0D2EA0;">Score</th>
                        <th class="text-end" style="color:#0D2EA0;">3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 1</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 2</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 3</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-green"></i>Question 4</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 5</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-green"></i>Question 6</td>
                        <td class="text-end">1</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 7</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 8</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-red"></i>Question 9</td>
                        <td class="text-end">0</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-circle-fill dot-green"></i>Question 10</td>
                        <td class="text-end">1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center completed-wrapper">
            <button class="btn btn-primary btn-completed">Completed</button>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>