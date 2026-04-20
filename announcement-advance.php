<?php include "includes/header.php"; ?>

<?php
class Announcement
{
    public $id;
    public $title;
    public $image;
    public $time;
    public $description;

    public function __construct($id, $title, $image, $time, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->time = $time;
        $this->description = $description;
    }
}

$announcements = [
    new Announcement(1, "ประกาศปิดปรับปรุงระบบ", "https://picsum.photos/100/100", "12 มกราคม 2567", "ระบบจะปิดให้บริการชั่วคราว"),
    new Announcement(2, "แจ้งเปลี่ยนเวลาทำการ", "https://picsum.photos/101/101", "10 เมษายน 2567", "ปรับเวลาเปิด-ปิดใหม่"),
    new Announcement(3, "กิจกรรมสงกรานต์ประจำปี", "https://picsum.photos/102/102", "1 กันยายน 2567", "เชิญร่วมสนุกกับกิจกรรม"),
    new Announcement(4, "อัปเดตฟีเจอร์ใหม่", "https://picsum.photos/103/103", "20 สิงหาคม 2560", "เพิ่มความสามารถใหม่ในระบบ"),
    new Announcement(5, "แจ้งเตือนด้านความปลอดภัย", "https://picsum.photos/104/104", "10 เมษายน 2567", "โปรดระวังการใช้งานบัญชี"),
    new Announcement(6, "ประกาศผลการคัดเลือก", "https://picsum.photos/105/105", "10 เมษายน 2567", "รายชื่อผู้ผ่านการคัดเลือก"),
];
?>

<main class="pt-5">
    <h1 class="container-fluid text-center mb-3">
        ข่าวประชาสัมพันธ์
    </h1>
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-5">
            <?php foreach ($announcements as $announcement): ?>
                <div class="col">
                    <a class="card p-0 text-light overflow-hidden"
                        href="announcement-detail.php?id=<?php echo $announcement->id ?>">
                        <img src="<?php echo $announcement->image ?>" alt="img" class="card-img">
                        <div class="card-img-overlay d-flex flex-column p-0">
                            <div class="mt-auto p-2" style="background: rgba(0,0,0,0.5);">
                                <h5 class="card-title"><?php echo $announcement->title ?></h5>
                                <p class="card-text"><img src="assets/images/cer1.png" width="15">
                                    <?php echo $announcement->time ?></p>
                                <p class="card-text"><?php echo $announcement->description ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</main>

<?php include "includes/footer.php"; ?>