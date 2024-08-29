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
            /* height: 100vh; */
            margin: 0;
            padding-top: 3%;

        }

        .billing-container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .hidden {
            display: none;
        }

        #receipt {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="form-body">
            <div class="billing-container">
                <h2>Healthcare Billing Form</h2>
                <form id="billingForm">
                    <label for="patientName">Patient Name:</label>
                    <input type="text" id="patientName" name="patientName" required>

                    <label for="serviceDescription">Service Description:</label>
                    <textarea id="serviceDescription" name="serviceDescription" required></textarea>

                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" required>

                    <button type="button" id="payButton">Pay Now</button>
                </form>

        </section>

        <div id="receipt" class="hidden">
            <h2>Receipt</h2>
            <p><strong>Patient Name:</strong> <span id="receiptPatientName"></span></p>
            <p><strong>Service Description:</strong> <span id="receiptServiceDescription"></span></p>
            <p><strong>Amount Paid:</strong> $<span id="receiptAmount"></span></p>
        </div>
        </div>
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
    <script>
        document.getElementById('payButton').addEventListener('click', function () {
            // Get form values
            const patientName = document.getElementById('patientName').value;
            const serviceDescription = document.getElementById('serviceDescription').value;
            const amount = document.getElementById('amount').value * 100; // Razorpay works with paise, so multiply by 100

            var options = {
                "key": "rzp_test_R4iagT5bnJl94Q", // Replace with your Razorpay key ID
                "amount": amount, // Amount in paise
                "currency": "INR",
                "name": "Healthcare Management",
                "description": serviceDescription,
                "handler": function (response) {
                    // Display receipt
                    document.getElementById('receiptPatientName').innerText = patientName;
                    document.getElementById('receiptServiceDescription').innerText = serviceDescription;
                    document.getElementById('receiptAmount').innerText = (amount / 100).toFixed(2); // Convert paise to INR

                    document.getElementById('receipt').classList.remove('hidden');
                },
                "prefill": {
                    "name": patientName,
                    "email": "patient@example.com" // Replace with patient email or remove if not needed
                },
                "theme": {
                    "color": "#3399cc"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        });

    </script>


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