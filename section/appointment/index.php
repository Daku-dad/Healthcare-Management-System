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
            display:flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            max-width: 800px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #283779;
            animation: slideIn 1s ease-in-out;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #00aaff;
            box-shadow: 0 0 8px rgba(0, 170, 255, 0.3);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #283779;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #008ecc;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <!-- header -->
        <?php
        include("../include/header.php");
        ?>

        <!-- <section class="py-xxl-10 pb-0" id="home">
            <div class="bg-holder bg-size" style="
            background-image: url(/assets/img/gallery/hero-bg.png);
            background-position: top center;
            background-size: cover;
          "></div>
            /.bg-holder-->

            <!-- <div class="container">
                <div class="row min-vh-xl-100 min-vh-xxl-25">
                    <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
                        <img class="pt-7 pt-md-0 w-100" src="/assets/img/gallery/hero.png" alt="hero-header" />
                    </div>
                    <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
                        <h1 class="fw-light font-base fs-6 fs-xxl-7">
                            We're <strong>determined </strong>for<br />your&nbsp;<strong>better life.</strong>
                        </h1>
                        <p class="fs-1 mb-5">
                            You can get the care you need 24/7 – be it online or in
                            <br />person. You will be treated by caring specialist doctors.
                        </p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </section>  -->

        <!-- About Section Start -->



        <!-- ============================================-->
        <!-- <section> begin ============================-->


        <section class="form-body">

            <div class="form-container">
                <h2>Book an Appointment</h2>
                <form action="#" method="POST">
                    <div class="input-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="date">Appointment Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="time">Appointment Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>


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