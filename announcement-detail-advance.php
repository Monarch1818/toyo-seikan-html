<?php include "includes/header.php" ?>
<?php class Announcement
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

$selectedId = $_GET["id"] ?? null;
$selectedAnnouncement = null;

if ($selectedId) {
    foreach ($announcements as $announcement) {
        if ($announcement->id == $selectedId) {
            $selectedAnnouncement = $announcement;
        }
    }
} else {
    header("Location: announcement.php");
}

?>
<main class="pt-5">
    <div class="container-fluid d-flex justify-content-between">
        <h3>ข่าวประชาสัมพันธ์</h3>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">ข่าวประชาสัมพันธ์/li>
            </ol>
        </nav>
    </div>
    <h5 class="text-primary text-center">300 views</h5>
    <div>
        <img src="<?php echo $selectedAnnouncement->image ?>" alt="image" >
    </div>

</main>
<?php include "includes/footer.php" ?>