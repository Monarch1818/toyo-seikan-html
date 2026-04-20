<?php include 'includes/header.php'; ?>

<style>

    @font-face {
    font-family: 'SupermarketCustom'; /* ตั้งชื่อฟอนต์ตามที่คุณต้องการ */
    src: url('../assets/fonts/supermarket-ttf/supermarket.ttf') format('truetype'); /* ตรวจสอบชื่อไฟล์และ Path ให้ถูกต้อง */
    font-weight: normal;
    font-style: normal;
}
    .news-detail-breadcrumb {
        padding: 10px 80px;
        font-size: 24px;
        /* border-bottom: 1px solid #E5E5E5; */
    }

    .news-detail-breadcrumb .breadcrumb-item,
    .news-detail-breadcrumb .breadcrumb-item a {
        font-size: 18px;
        color: #464646;
        text-decoration: none;
    }

    .news-detail-breadcrumb .breadcrumb-item.active {
        color: #464646;
    }
</style>

<!-- ===== BREADCRUMB BAR ===== -->
<div class="news-detail-breadcrumb d-flex justify-content-between align-items-center">

    <!-- ซ้าย -->
    <span>ข่าวประชาสัมพันธ์</span>

    <!-- ขวา -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">ข่าวประชาสัมพันธ์</li>
        </ol>
    </nav>

</div>

<main class="container mt-5">
    
</main>
