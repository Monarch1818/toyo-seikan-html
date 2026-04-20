<?php include 'includes/header.php'; ?>

<style>
    @font-face {
    font-family: 'SupermarketCustom'; /* ตั้งชื่อฟอนต์ตามที่คุณต้องการ */
    src: url('../assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype'); /* ตรวจสอบชื่อไฟล์และ Path ให้ถูกต้อง */
    font-weight: normal;
    font-style: normal;
}
    .news-page {
        padding: 20px 80px;
    }

    .news-breadcrumb {
        font-size: 24px;
        color: #464646;
        padding: 10px 0 10px ;
        margin-bottom: 30px;
    }

    .news-title {
        text-align: center;
        font-size: 32px;
        color: #000;
        margin-bottom: 40px;
    }

    .news-card {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 24px;
        cursor: pointer;
        aspect-ratio: 4 / 3;
    }

    .news-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .news-card:hover img {
        transform: scale(1.05);
    }

    .news-card .news-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px 18px 16px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.5) 60%, rgba(0, 0, 0, 0) 100%);
        color: #fff;
    }

    .news-card .news-card-title {
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 8px;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-card .news-date {
        font-size: 14px;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        column-gap: 6px;
    }

    .news-card .news-name {
        font-size: 14px;
        opacity: 0.9;
    }

    /* ===== PRE-FOOTER (Report Problem) ===== */
    .pre-footer {
        background-color: #fff;
        padding: 20px 80px 20px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .report-problem-btn {
        background-color: #1F7BCC;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        padding: 10px 18px;
        border-radius: 10px;
        border: none;
        width: 200px;
        height: 45px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 8px;
    }

    .report-problem-btn::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-top: 19px solid #1F7BCC;
        border-left: 13px solid transparent;
        border-right: 13px solid transparent;
    }

    .report-problem-btn:hover {
        background-color: #1559A8;
        color: #fff;
    }

    /* ===== FOOTER ===== */
    .site-footer {
        background-color: #09479D;
        padding: 16px 8px;
        text-align: center;
    }

    .footer-text {
        color: #fff;
        font-size: 16px;
        margin: 0;
    }

    /* Responsive: mobile */
    @media (max-width: 576px) {
        .news-page {
            padding: 15px 20px;
        }

        .news-title {
            font-size: 24px;
            margin-bottom: 24px;
        }

        .pre-footer {
            padding: 20px 20px 40px;
            justify-content: center;
        }
    }
</style>

<main class="news-page">

    <div class="news-breadcrumb">ข่าวประชาสัมพันธ์</div>

    <h1 class="news-title">ข่าวประชาสัมพันธ์</h1>

    <div class="row">
        <?php
        $newsItems = [
            ['img' => 'assets/images/unnamed.jpg', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
            ['img' => 'assets/images/unnamed.jpg', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
            ['img' => 'assets/images/unnamed.jpg', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
            ['img' => 'assets/images/banner.png', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
            ['img' => 'assets/images/course1.png', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
            ['img' => 'assets/images/Gemini_Generated_Image_d13pzbd13pzbd13p.png', 'title' => 'Lorem Ipsum is simply dummy text of the', 'date' => '10 เมษายน 2564', 'name' => 'Name What is Lorem Ipsum'],
        ];
        ?>

        <?php foreach ($newsItems as $news): ?>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="news-card">
                    <img src="<?= $news['img'] ?>" alt="<?= $news['title'] ?>">
                    <div class="news-overlay">
                        <p class="news-card-title"><?= $news['title'] ?></p>
                        <p class="news-date">
                            <i class="fa-regular fa-calendar"></i>
                            <?= $news['date'] ?>
                        </p>
                        <p class="news-name"><?= $news['name'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</main>

<!-- ===== PRE-FOOTER (Report Problem) ===== -->
<div class="pre-footer">
    <button type="button" class="report-problem-btn">
        <i class="fa-solid fa-triangle-exclamation"></i>
        Report problem
    </button>
</div>

<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <p class="footer-text">สงวนลิขสิทธิ์ ฉ 2021 Toyo Seikan (Thailand) Co., Ltd.</p>
</footer>

<!-- <?php include 'includes/footer.php'; ?> -->
