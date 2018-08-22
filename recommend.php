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
            $url='home.php';
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

    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">



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
    <?php include "connect.php"?>
    <div style="margin-top: 1px;font-size: 15px;">
        <header id="gtco-header" class="gtco-cover-md" role="banner"
                style="background-image: url(images/img_2.jpg);height: auto">
            <div class="container" >
                <?php
                $age = $_POST['age'];
                $weight = $_POST['weight'];
                $mhr = $_POST['mhr'];
                //echo $age;
                //echo $weight;
                //echo $mhr;

                $sql = "SELECT * FROM warm";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    if (($row['age'] == $age) && ($row['weight'] == $weight) && ($row['mhr'] == $mhr)) {
                        echo '<center><img style="width:50%; height:400px;border-radius:12px ;margin:20px;"; src="data:image;base64,' . base64_encode($row['recommend_image']) . '"/></center>';
                        echo '<center><p style="width: 730px;text-align: justify;font-family: \'Itim\', cursive;">'.$row['recommend'].'</p></center>';

                    }
                }
                $conn->close();
                ?>

            </div>

        </header>
    </div>

<center><div style="background-color:#3c763d;color:white;margin:auto 0 0 0;padding:10px;height:auto;">@Copyright Computer Science Program, Suan Sunandha Rajabhat University.</div></center>


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