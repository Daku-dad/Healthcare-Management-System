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


        <!-- About Section Start -->



        <!-- =============<!-- Section Begin -->
        <section class="py-5" id="departments">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-3">
                        <div class="bg-holder bg-size" style="
                  background-image: url(assets/img/gallery/bg-departments.png);
                  background-position: top center;
                  background-size: contain;
                "></div>
                        <!--/.bg-holder-->

                        <h1 class="text-center" style="margin-bottom: 0.2rem;">OUR DEPARTMENTS</h1>
                    </div>
                </div>
            </div>
            <!-- end of .container-->
        </section>
        <!-- Section Close -->

        <!-- Section Begin -->
        <style>
            .department-icon {
                width: 50px;
                height: 50px;
            }

            .department-icon-hover {
                display: none;
            }

            .icon-box:hover .department-icon {
                display: none;
            }

            .icon-box:hover .department-icon-hover {
                display: block;
            }

            .filter-card {
                border: 1px solid #ccc;
                padding: 20px;
                margin-bottom: 20px;
                display: block;
            }

            @media (max-width: 768px) {
                .department-icon {
                    width: 40px;
                    height: 40px;
                }

                .filter-card {
                    margin-bottom: 15px;
                }
            }

            @media (max-width: 576px) {
                .department-icon {
                    width: 35px;
                    height: 35px;
                }

                .filter-card {
                    margin-bottom: 10px;
                }
            }
        </style>

        <section class="py-0">
            <div class="container">
                <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                    <!-- Neurology Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="neurology"
                                    href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/neurology.png"
                                        alt="Neurology" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/neurology.svg"
                                        alt="Neurology" />
                                    <p class="fs-1 fs-xxl-2 text-center">Neurology</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Eye Care Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="eye-care"
                                    href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/eye-care.png"
                                        alt="Eye Care" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/eye-care.svg"
                                        alt="Eye Care" />
                                    <p class="fs-1 fs-xxl-2 text-center">Eye care</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Cardiac Care Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="cardiac-care"
                                    href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/cardiac.png"
                                        alt="Cardiac Care" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/cardiac.svg"
                                        alt="Cardiac Care" />
                                    <p class="fs-1 fs-xxl-2 text-center">Cardiac care</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Heart Care Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="heart-care"
                                    href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/heart.png"
                                        alt="Heart Care" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/heart.svg"
                                        alt="Heart Care" />
                                    <p class="fs-1 fs-xxl-2 text-center">Heart care</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Osteoporosis Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="osteoporosis"
                                    href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/osteoporosis.png"
                                        alt="Osteoporosis" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/osteoporosis.svg"
                                        alt="Osteoporosis" />
                                    <p class="fs-1 fs-xxl-2 text-center">Osteoporosis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ENT Filter Button -->
                    <div class="col-6 col-md-4 col-lg-auto text-xl-start mb-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-box text-center">
                                <a class="text-decoration-none filter-btn" data-filter="ent" href="javascript:void(0);">
                                    <img class="mb-3 department-icon" src="/assets/img/icons/ent.png" alt="ENT" />
                                    <img class="mb-3 department-icon-hover" src="/assets/img/icons/ent.svg" alt="ENT" />
                                    <p class="fs-1 fs-xxl-2 text-center">ENT</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Close -->

        <!-- Show All Button -->
        <div class="col-auto col-md-4 col-lg-auto text-xl-start">
            <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center">
                    <a class="text-decoration-none filter-btn" data-filter="all" href="javascript:void(0);">


                        <p class="fs-1 fs-xxl-2 text-center">Show All</p>
                    </a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </section>

        <!-- Patient Cards Section -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <!-- Neurology Patient Card -->
                    <div class="col-md-4 filter-card neurology">
                        <h3>Patient 1</h3>
                        <p>Disease: Neurology</p>
                        <p>Description: Neurological issue.</p>
                    </div>
                    <!-- Eye Care Patient Card -->
                    <div class="col-md-4 filter-card eye-care">
                        <h3>Patient 2</h3>
                        <p>Disease: Eye Care</p>
                        <p>Description: Eye problem.</p>
                    </div>
                    <!-- Cardiac Care Patient Card -->
                    <div class="col-md-4 filter-card cardiac-care">
                        <h3>Patient 3</h3>
                        <p>Disease: Cardiac Care</p>
                        <p>Description: Cardiac condition.</p>
                    </div>
                    <!-- Heart Care Patient Card -->
                    <div class="col-md-4 filter-card heart-care">
                        <h3>Patient 4</h3>
                        <p>Disease: Heart Care</p>
                        <p>Description: Heart issue.</p>
                    </div>
                    <!-- Osteoporosis Patient Card -->
                    <div class="col-md-4 filter-card osteoporosis">
                        <h3>Patient 5</h3>
                        <p>Disease: Osteoporosis</p>
                        <p>Description: Bone condition.</p>
                    </div>
                    <!-- ENT Patient Card -->
                    <div class="col-md-4 filter-card ent">
                        <h3>Patient 6</h3>
                        <p>Disease: ENT</p>
                        <p>Description: ENT problem.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript -->
        <script>
            // Function to filter cards
            function filterCards(disease) {
                const allCards = document.querySelectorAll('.filter-card');
                allCards.forEach(card => {
                    if (disease === 'all' || card.classList.contains(disease)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Event listeners for filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterValue = button.getAttribute('data-filter');
                    filterCards(filterValue);
                });
            });

            // Show all cards by default
            filterCards('all');
        </script>

        <!-- <section> close ============================-->
        <!-- ============================================-->





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