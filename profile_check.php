<?php
require 'connect.php';
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$uname = $_GET['username'];
$pword = $_GET['password'];
$ename = $_GET['email'];
$wname = $_GET['weight'];
$cname = $_GET['congenital'];
$age = $_GET['age'];
$freet = $_GET['time'];
$sex = $_GET['sex'];
$pword_h = hash('sha256', $pword);

$sql1 = "INSERT INTO users (user_name, user_email, user_pass) VALUES ('" . $uname . "','" . $ename . "','" . $pword_h . "')";

$sql2 = "INSERT INTO profile (fname,lname,uname,pword,ename,wname,cname,age,freet,sex) 
		VALUES ('" . $fname . "','" . $lname . "','" . $uname . "','".$pword_h."','" . $ename . "','" . $wname . "','" . $cname . "','" . $age . "','" . $freet . "','" . $sex . "')";




$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);

if ($query1) {
    echo "Record add successfully";
    echo "<script language=\"JavaScript\">";
    echo "alert('เพิ่มมูลเรียบร้อยแล้ว');";
    echo 'window.location= "home.php"';
    echo "</script>";
}else {
    echo "Nooooo";
}

if ($query2) {
    echo "Record add successfully";
    echo "<script language=\"JavaScript\">";
    echo "alert('เพิ่มมูลเรียบร้อยแล้ว');";
    echo 'window.location= "home.php"';
    echo "</script>";
}else {
    echo "Nooooo";
}

mysqli_close($conn);
?>