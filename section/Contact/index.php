<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="ICSE School">
    <meta name="keywords" content="ICSE School">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title></title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico" />
    <link rel="manifest" href="/assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/assets/css/theme.css" rel="stylesheet" />
    <style>
    .form-body {
        font-family: Arial, sans-serif;
        background-color: #FFFEFE;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding-top: 3%;
        
    }

    .contact-container {
        display: flex;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 900px;
        width: 100%;
        height: 100%;
    }

    .contact-form {
        padding: 40px;
        flex: 1;
    }

    .h1 {
        padding-top: 10%;
    }

    .contact-form h2 {
        margin-bottom: 20px;
        color: #3d3d3d;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
        color: #555;
    }

    .contact-form textarea {
        resize: none;
        height: 100px;
    }

    .contact-form button {
        width: 100%;
        padding: 12px;
        background-color: #00b4d8;
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #0077b6;
    }

    .contact-map {
        display: none;
        flex: 1;
    }

    @media screen and (min-width: 768px) {
        .contact-container {
            flex-direction: row;
        }

        .contact-map {
            display: block;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 0 10px 10px 0;
        }
    }
</style>

<body>
    <main class="main" id="top">
        <?php
        include("../include/header.php");
        ?>

        <center>
            <h1 style="padding-top:50px;">Contact Us</h1>
        </center>

        <section class="form-body">
            <div class="contact-container">
                <div class="contact-form">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509618!2d144.95373631531868!3d-37.81627927975151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf57709bb4d45b6b2!2sEnvato!5e0!3m2!1sen!2sus!4v1603143034770!5m2!1sen!2sus"
                        allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
            </div>
        </section>
    </main>
</body>
    <!-- About Section End -->

        <section class="py-0 bg-secondary">
            <div class="bg-holder opacity-25" style="
            background-image: url(/assets/img/gallery/dot-bg.png);
            background-position: top left;
            margin-top: -3.125rem;
            background-size: auto;
          "></div>
            <!--/.bg-holder-->

            <!-- Include the footer -->

            <?php
            include("../include/footer.php");
            ?>

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 bg-primary">
                <div class="container">
                    <div class="row justify-content-md-between justify-content-evenly py-4">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                            <p class="fs--1 my-2 fw-bold text-200">
                                All rights Reserved &copy; Your Company, 2021
                            </p>
                        </div>
                        <div class="col-12 col-sm-8 col-md-6">
                            <p class="fs--1 my-2 text-center text-md-end text-200">
                                Made with&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12"
                                    height="12" fill="#F95C19" viewBox="0 0 16 16">
                                    <path
                                        d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                    </path>
                                </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/"
                                    target="_blank">Ayush
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
        </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/vendors/@popperjs/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap"
        rel="stylesheet" />
</body>

</html>