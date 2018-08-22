<?php
if (!empty($_SESSION['user_id'])) {
    $session_uid = $_SESSION['user_id'];
    include('addDB.php');
    $addDB = new addDB();
}
if (empty($session_uid)) {
    $url = 'home.php';
    header("Location: $url");
}
?>