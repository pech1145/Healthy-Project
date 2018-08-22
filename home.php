<?php

include 'addDB.php';
$addDB = new addDB();


if (isset($_POST['submit'])) {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];


    try {
        $uid= $addDB->userLogin($username,$password);
        if($uid)
        {
            include('session.php');
            $userDetails=$addDB->userDetails($session_uid);
            $url='profile.php';
            header("Location: $url"); // Page redirecting to home.php
        }
        else
        {
            $errorMsgLogin="Please check login details.";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
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



    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="gtco-loader"></div>
<?php include "header.php"?>
<div id="page">
    <!-- <div class="page-inner"> -->
    <!-- <div class="page-inner"> -->
    <?php include "nevber.php"?>
    <header id="gtco-header" class="gtco-cover-md" role="banner"
            style="background-image: url(images/img_2.jpg);height: auto">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="overlay"></div>
                    <div class="row row-mt-15em">
                        <div class="col-md-6 mt-text animate-box" style="margin-top: -80px" data-animate-effect="fadeInUp">
                            <div class="form-wrap">
                                <div class="tab">
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <center><h3><Admin><b>MY HEALTH</b></Admin></h3></center><br>
                                            <form action="recommend.php" method="post">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">อายุ</label>
                                                    <select class="form-control" name="age" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="10-24">10-24</option>
                                                        <option value="25-40">25-40</option>
                                                        <option value="41-59">41-59</option>
                                                        <option value="60Up">60 Up</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">น้ำหนัก</label>
                                                    <select class="form-control" name="weight" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="30-40">30-40</option>
                                                        <option value="41-50">41-50</option>
                                                        <option value="51-60">51-60</option>
                                                        <option value="61-70">61-70</option>
                                                        <option value="71-80">71-80</option>
                                                        <option value="81-90">81-90</option>
                                                        <option value="91-100">91-100</option>
                                                        <option value="101-110">101-110</option>
                                                        <option value="111-120">111-120</option>
                                                        <option value="121+">121 Up</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">อัตราการเต้นของหัวใจสูงสุด</label>
                                                    <select class="form-control" name="mhr" required>
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="40-50">40-50</option>
                                                        <option value="51-60">51-60</option>
                                                        <option value="61-70">61-70</option>
                                                        <option value="71-80">71-80</option>
                                                        <option value="81-90">81-90</option>
                                                        <option value="91-100">91-100</option>
                                                        <option value="101-110">101-110</option>
                                                        <option value="111-120">111-120</option>
                                                        <option value="121+">121 ขึ้นไปอันตราย</option>
                                                    </select>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" class="btn btn-primary btn-block"
                                                               value="SUGGESTION">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 animate-box" style=" margin-top: -80px; data-animate-effect="fadeInRight">
                        <div class="form-wrap">
                            <div class="tab">
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <center><h3><Admin><b>LOGIN</b></Admin></h3></center><br>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"required>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit"  class="btn btn-primary btn-block"
                                                           value="เข้าสู่ระบบ">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <a href="create.php" class="btn btn-default btn-block">
                                                        สมัครสมาชิก
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



   <?php include "footer.php" ?>
    <!-- </div> -->

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

</body>
</html>