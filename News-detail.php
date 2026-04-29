<?php include 'includes/header.php'; ?>

<style>
    .container-newsdetail {

        .custom-hr {
            border-top: 6px solid;
            width: 100%;
            border-radius: 10px;
            margin: 0 auto;
            color: #1F7BCC;
        }

        .imgnews {
            width: 100%;
            max-width: 571px;
            height: auto;
            margin-top: 50px;
        }

        .news-item {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;

        }

        .number {
            color: #FFC572;
            font-size: 20px;
            font-weight: bold;
            margin: end;
        }

        .content {
            font-size: 20px;
        }

        .img-fluid {
            width: 100%;
            max-width: 924px;
            height: auto;
            border-radius: 5px;
            margin: 60px auto 0 auto;
            display: block;
        }

        .vertical-hr {
            border: none !important;
            width: 30px !important;
            height: 60px !important;
            background-color: #1F7BCC;
            border-radius: 10px;
            display: block;
            margin: 20px auto;
            border: none;
        }

        .text-with-line {
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 571px;
            margin: 0 auto;
            gap: 30px;
            font-size: 20px;
        }

        .d-flex[style*="max-width:600px"] {
            width: 100%;
            max-width: 600px;
            padding: 0 15px;
        }

        @media (max-width: 768px) {

            .content,
            .text-with-line,
            .d-flex[style*="font-size:20px"] {
                font-size: 16px !important;
            }

            .text-warning {
                font-size: 18px !important;
            }
        }

        .text-with-line {
            flex-direction: row;
            width: 100%;
            max-width: 571px;
            padding: 0 15px;
        }

        @media (max-width: 576px) {
            .text-with-line {
                flex-direction: column;
                text-align: center;
            }

            .vertical-hr {
                width: 300px !important;
                height: 6px !important;
            }
        }
    }
</style>

<main class="container-fluid ">
    <div class="container-newsdetail">

        <div class="d-flex justify-content-between align-items-center p-3">
            <h4 class="m-0">ข่าวประชาสัมพันธ์</h4>
            <div>
                Home <span class="mx-2"> > </span> ข่าวประชาสัมพันธ์
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center d-inline-block">
                <div class="d-flex align-items-center gap-2 justify-content-center">
                    <i class="bi bi-eye"></i>
                    <span>300</span>
                </div>
                <hr class="custom-hr">
            </div>
        </div>

        <img class="imgnews d-block mx-auto" src="https://cdn.pixabay.com/photo/2026/02/25/10/04/doodleplaystudio-wall-art-10142794_1280.jpg" class="rounded mx-auto d-block" alt="">
        <h5 class="mb-3 mt-5 text-center">เปิดงาน Mobile World Congress 2026 – “The IQ Era”</h5>
        <div class="d-flex justify-content-center gap-2">
            <span class="bg-secondary rounded-circle" style="width:8px;height:8px;"></span>
            <span class="bg-secondary rounded-circle" style="width:8px;height:8px;"></span>
            <span class="bg-secondary rounded-circle" style="width:8px;height:8px;"></span>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">1.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">2.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">3.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">4.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">5.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-start" style="max-width:600px; font-size:20px">
                <div class="text-warning fw-bold fs-4">6.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <div class="d-flex gap-3 align-items-center" style="max-width:600px;">
                <div class="text-warning fw-bold fs-4">7.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate temporibus, nobis ducimus corporis eum, sint obcaecati ad quisquam totam fugiat molestias quidem a recusandae quia fuga distinctio, facilis quam?</div>
            </div>
        </div>

        <img src="https://cdn.pixabay.com/photo/2025/07/16/21/22/la-mure-village-9718387_1280.jpg" class="img-fluid" alt="...">
        <small class="headpicture d-block text-center text-secondary fs-20 mt-2">
            "reference picture"
        </small>

        <div class="text-with-line mt-5">
            <hr class="vertical-hr">
            <p style=" text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maiores, itaque, at blanditiis debitis ipsa adipisci suscipit excepturi quaerat quo optio atque minima maxime in repellat tenetur ea quae laudantium, earum libero impedit nemo. Beatae recusandae, dolores aliquid maxime, qui ducimus repellat corporis doloribus facilis animi eius inventore est corrupti.
            </p>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>