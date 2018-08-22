<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>สร้างโพรไฟล์ผู้ใช้งาน </title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="gtco-loader"></div>
<?php include "header.php" ?>
<div id="page">
    <?php include "nevber.php" ?>
    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="container">
                    <div class="py-5 text-center">
                        <h2>Create Profile
                    </div>
                    <div class="col-md-12 order-md-1">
                        <h4 class="mb-3">INFO</h4>
                        <form class="needs-validation" action="profile_check.php" method="get">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstName"
                                           placeholder=""
                                           value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastName" placeholder=""
                                           value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username">Username</label>
                                <div class="input-group">

                                    <input type="text" class="form-control" name="username" id="username"
                                           placeholder="Username"
                                           required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username">Password</label>
                                <div class="input-group">

                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="Password"
                                           required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your password is required.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="address">Weight</label>
                                    <input type="number" class="form-control" name="weight" id="weight"
                                           placeholder=".............................................................................."
                                           required min="0">
                                    <div class="invalid-feedback">
                                        Please enter your shipping Weight.
                                    </div>

                                    <label for="address">Congenital Disease</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">No</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <div class="row">
                                            <div class="col-2">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Yes</label>
                                            </div>
                                            <div class="col-10"><input type="text" class="form-control" placeholder="...................................................."></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"><strong>Age</strong></label><br>
                                    <input type="radio" name="age" value="yong">&nbsp; 10 - 24<br>
                                    <input type="radio" name="age" value="adult"> &nbsp;25 - 40<br>
                                    <input type="radio" name="age" value="Midage"> &nbsp;41 - 59<br>
                                    <input type="radio" name="age" value="elderly" checked>&nbsp; 60 Up<br>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"><strong>Free Time</strong></label><br>
                                    <input type="radio" name="time" value="05.00 - 7.00"> &nbsp;05.00 - 7.00<br>
                                    <input type="radio" name="time" value="11.00 - 13.00"> &nbsp;11.00 - 13.00<br>
                                    <input type="radio" name="time" value="16.00 - 18.00"> &nbsp;16.00 - 18.00<br>
                                    <input type="radio" name="time" value="20.00 - 22.00" checked> &nbsp;20.00 -
                                    22.00<br>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration"><strong>Sex</strong></label><br>
                                    <input type="radio" name="sex" value="M">&nbsp; Male<br>
                                    <input type="radio" name="sex" value="F">&nbsp; FeMale<br>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                    </div>

                    <hr class="mb-6">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Health</button>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <?php include "footer.php" ?>
</div>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>

<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>

<!-- Datepicker -->
<script src="js/bootstrap-datepicker.min.js"></script>


<!-- Main -->
<script src="js/main.js"></script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
