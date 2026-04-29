<?php include 'includes/header.php'; ?>

<style>
    .container-contact {
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

        .icon-fixed {
            margin-top: 15px;
            margin-right: 50px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .icon-fixed svg {
            color: #32aadd;
        }

        .contact-box {
            margin-bottom: 20px;
            background-color: #f9f7f7;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .iconsocial {
            display: flex;
            justify-content: flex-end;
            gap: 20px;

        }

        @media (max-width: 992px) {
            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        @media (max-width: 768px) {

            .imgco-ltd,
            .textcontact {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .imgco-ltd img {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .contact-box {
                padding: 20px;
            }

            .contact-box h5 {
                font-size: 16px;
            }

            .contact-box p {
                font-size: 14px;
            }
        }


        @media (max-width: 768px) {
            .icon-fixed {
                margin-right: 15px;
                margin-top: 5px;
            }

            .icon-fixed svg {
                width: 24px;
                height: 24px;
            }
        }

        @media (max-width: 576px) {
            .iconsocial {
                justify-content: center;
            }

            .iconsocial svg {
                width: 24px;
                height: 24px;
            }
        }

        @media (max-width: 768px) {
            .accordion {
                width: 100%;
            }
        }

        iframe {
            display: block;
            margin: 40px auto 0 auto;
            width: 80%;
            max-width: 100%;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            iframe {
                width: 100%;
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            h4 {
                margin-left: 15px;
                font-size: 18px;
            }

            h3 {
                font-size: 20px;
            }
        }
    }
</style>
<main class="container-fluid ">
    <div class="container-contact">

        <h4>ติดต่อเรา</h4>
        <div class="container">
            <h3 class="text-center" style="margin-bottom: 30px;">ติดต่อเรา</h3>
            <div class="row">
                <div class="imgco-ltd col-6">
                    <img src="https://www.toyoseikan.co.th/boffice/picdata/home/693e4927124b601a62416a765751acc9.jpg" alt="Company Location" class="img-fluid" style="margin-bottom: 50px;">
                </div>
                <div class=" textcontact col-6">
                    <div class="contact-box">

                        <!-- ที่ตั้ง -->
                        <div class="d-flex mb-4">
                            <div class="icon-fixed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="mb-1" style="color: #32aadd;">ที่ตั้ง</h5>
                                <p class="mb-0">
                                    95 หมู่ 3, สวนอุตสาหกรรมโรจนะ 2,<br>
                                    ตำบล บ้านช้าง, อำเภอ อุทัย,<br>
                                    จังหวัด พระนครศรีอยุธยา. 13210 ประเทศไทย
                                </p>
                            </div>
                        </div>

                        <!-- อีเมล -->
                        <div class=" d-flex mb-4">
                            <div class="icon-fixed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-info mb-1" style="color: #32aadd;">อีเมล</h5>
                                <p class="mb-0">info@toyoseikan.co.th</p>
                            </div>
                        </div>

                        <!-- โทรศัพท์ -->
                        <div class="d-flex">
                            <div class="icon-fixed">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="text-info mb-1" style="color: #32aadd;">โทรศัพท์</h5>
                                <p class="mb-0">+66-35-746-655</p>
                            </div>
                        </div>

                        <div class="iconsocial text-end mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color=" #1877F2" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" color="#FF0000" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.3392943677554!2d100.67093657434177!3d14.323083783812365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d8966aaaaaaab%3A0x84604855c1631415!2zVG95byBTZWlrYW4oVGhhaWxhbmQpIENvLixMdGQuICjguJrguKPguLTguKnguLHguJcg4LmC4LiV4LmC4LiiIOC5hOC4i-C4geC4seC4mSAo4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4LiiKSDguIjguLPguIHguLHguJQp!5e1!3m2!1sth!2sth!4v1775620405093!5m2!1sth!2sth" width="600" height="450" style="border:0; margin: top 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>