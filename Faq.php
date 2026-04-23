<?php include 'includes/header.php'; ?>

<style>
    .container-faq {


        .accordion {
            width: 60%;
            margin: auto;
        }

        h4 {
            margin-left: 5%;
            margin-top: 2%;
        }

        h3 {
            text-align: center;
            margin-top: 2%;
        }

        p {
            font-size: 16px !important;
        }
    }
</style>
<main class="container-fluid ">
    <div class="container-faq">

        <h4>คำถามที่พบบ่อย</h4>

        <div class="accordion" id="accordionExample">
            <h3>คำถามที่พบบ่อย</h3>
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        1.การเรียน/สอบ ผ่านระบบ E-Learning
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. ลืมรหัสผ่าน
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. วิธีแจ้งปัญหาการใช้งาน
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. สามารถใช้งานภาษาอะไรได้บ้าง
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>1. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                        <p>2. "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat distinctio beatae, eligendi earum laboriosam dicta quam quod neque praesentium sequi quibusdam minus? Culpa ex velit commodi possimus quaerat tempora eveniet nostrum, non quos facilis quidem ut voluptate nam expedita nobis quae, et excepturi autem ea laudantium dolore, consequatur pariatur! Nulla!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>