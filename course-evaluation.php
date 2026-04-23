<?php include "includes/header.php"; ?>

<style>
    .course-evaluation-page-style {}
</style>

<main class="course-evaluation-page-style p-sm-5 p-2">
    <div class="d-flex justify-content-between">
        <div>
            <h5>แบบประเมินหลักสูตร</h5>
        </div>
        <div>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แบบประเมินหลักสูตร</li>
                </ol>
            </nav>
        </div>
    </div>
    <form class="p-lg-5" method="post">
        <h5 class="text-primary">>> แบบประเมินความพึงพอใจหลักสูตร</h5>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col" rowspan="2">ลำดับ</th>
                        <th scope="col" rowspan="2">หัวข้อประเมิน</th>
                        <th scope="col" colspan="5">ระดับคะแนน</th>
                    </tr>
                    <tr>
                        <th scope="col">5<br>คะแนน</th>
                        <th scope="col">4<br>คะแนน</th>
                        <th scope="col">3<br>คะแนน</th>
                        <th scope="col">2<br>คะแนน</th>
                        <th scope="col">1<br>คะแนน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">
                            1
                        </th>
                        <td class="text-break w-50">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit officia unde asperiores!
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio1">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio1">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio1">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio1">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio1">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">
                            2
                        </th>
                        <td class="text-break w-50">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit officia unde asperiores!
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio2">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio2">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio2">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio2">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio2">
                        </td>

                    </tr>
                    <tr>
                        <th scope="col">
                            3
                        </th>
                        <td class="text-break w-50">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit officia unde asperiores!
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio3">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio3">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio3">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio3">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio3">
                        </td>

                    </tr>
                    <tr>
                        <th scope="col">
                            4
                        </th>
                        <td class="text-break w-50">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit officia unde asperiores!
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio4">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio4">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio4">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio4">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio4">
                        </td>

                    </tr>
                    <tr>
                        <th scope="col">
                            5
                        </th>
                        <td class="text-break w-50">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit officia unde asperiores!
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio5">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio5">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio5">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio5">
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="radio5">
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">ความคิดเห็นหรือข้อเสนอแนะ</h4>
                <textarea name="comment" rows="5" class="form-control" placeholder="เขียนความคิดเห็นของคุณ"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn px-5 text-light" style="background-color: #1F7BCC;">ส่ง</button>
        </div>
    </form>

</main>

<?php include "includes/footer.php"; ?>