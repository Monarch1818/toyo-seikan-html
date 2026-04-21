<?php
$title = "Questions";
include "includes/header.php" ?>

<main class="px-5 py-4">
    <h3 class="text-center mb-5">คำถามที่ผมบ่อย</h3>
    <div class="d-flex justify-content-center">
        <div class="accordion d-grid gap-3 w-100" id="questionAccordion" style="max-width: 750px;">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question1">
                        1. การเรียน/สอบ ผ่านระบบ E-Learning
                    </button>
                </h2>
                <div id="question1" class="accordion-collapse collapse show" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, ullam, molestias cumque
                        nihil facilis incidunt sequi labore vitae nesciunt sed tenetur vel facere eligendi dolorem
                        quibusdam modi similique corporis voluptas.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question2">
                        2. ลืมรหัสผ่าน
                    </button>
                </h2>
                <div id="question2" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question3">
                        3. วิธีแจ้งปัญหาการใช้งาน
                    </button>
                </h2>
                <div id="question3" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question4">
                        4. สามารถใช้งานภาษาอะไรได้บ้าง
                    </button>
                </h2>
                <div id="question4" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#question5">
                        5. วิธีการเรียนตาม Road map
                    </button>
                </h2>
                <div id="question5" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, quidem! Error perspiciatis
                        eius natus, corporis saepe amet incidunt fuga voluptate ex? Dolores quidem, rem iure quae
                        aperiam facilis perspiciatis accusantium!
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "includes/footer.php" ?>