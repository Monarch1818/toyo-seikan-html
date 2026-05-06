<style>
    body {
        background: #f5f5f5;
        font-family: sans-serif;
    }

    .result-wrapper {
        padding: 40px 0;
        min-height: 80vh;
    }

    .result-box {
        background: #fff;
        border: 1px solid #2f6edb;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .result-header {
        text-align: center;
        padding: 25px;
        color: red;
        font-size: 30px;
    }

    .result-header i {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .result-table .row {
        border-top: 1px solid #ddd;
        padding: 14px 10px;
        margin: 0;
    }

    .score-box {
        background: #fff;
        border: 3px solid #2196f3;
    }

    .score-header {
        border-bottom: 1px solid #ccc;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        color: #0d47a1;
    }

    .score-header span {
        float: right;
        font-size: 35px;
        line-height: 20px;
    }

    .score-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .score-left {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .dot {
        width: 16px;
        height: 16px;
        border-radius: 50%;
    }

    .dot.red {
        background: red;
    }

    .dot.green {
        background: #4caf50;
    }

    .btn-complete {
        background: #2f80ed;
        color: #fff;
        border: none;
        padding: 8px 18px;
        border-radius: 4px;
    }
</style>

<?php include 'includes/header.php'; ?>

<main class="container result-wrapper">

    <div class="row">

        <div class="col-lg-8">

            <div class="result-box">

                <div class="result-header">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <div>Failed</div>
                </div>

            </div>

            <div class="result-box result-table">

                <div class="row">
                    <div class="col-6">
                        Number of question
                    </div>

                    <div class="col-6 text-end">
                        10 Questions
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        Time allowed
                    </div>

                    <div class="col-6 text-end">
                        20 Minutes
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        Time spent
                    </div>

                    <div class="col-6 text-end">
                        2 Minutes
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        Total score
                    </div>

                    <div class="col-6 text-end">
                        10 Points
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        Your score earned
                    </div>

                    <div class="col-6 text-end">
                        2 Points
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        Percent
                    </div>

                    <div class="col-6 text-end">
                        30 .00%
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <button class="btn-complete">
                    Completed
                </button>
            </div>

        </div>

        <div class="col-lg-4">

            <div class="score-box">

                <div class="score-header">
                    Score
                    <span>3</span>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 1
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 2
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 3
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot green"></div>
                        Question 4
                    </div>

                    <div>1</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 5
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot green"></div>
                        Question 6
                    </div>

                    <div>1</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 7
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 8
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot red"></div>
                        Question 9
                    </div>

                    <div>0</div>
                </div>

                <div class="score-item">
                    <div class="score-left">
                        <div class="dot green"></div>
                        Question 10
                    </div>

                    <div>1</div>
                </div>

            </div>

        </div>

    </div>

</main>

<?php include 'includes/footer.php'; ?>