<?php
$session_uid = false;
if($uid != null){

    include('session.php');
    $userDetails=$addDB->userDetails($session_uid);
}
?>
<nav class="gtco-nav" style="background-color: #3c763d" role="navigation">
    <div class="gtco-container">
        <div class="row">
            <div class="col-xs-8 text-right  menu-1">
                <ul>
                    <b><li style="padding-right: 30px;"><a href="home.php" style="opacity: 2;color: white" >หน้าแรก</a></li>
                    <li  class="has-dropdown"style="padding-right: 30px;" >
                        <a href="#" style="color: white">การออกกำลังกาย</a>
                        <ul class="dropdown" style="width: 220px">
                            <li><a href="mhr.php">วิธีวัดค่า MHR</a></li>
                            <li><a href="warm.php">การวอร์ม</a></li>
                            <li><a href="#">วิธีวัดค่า 1RM/10RM</a></li>
                            <li><a href="#">การยืด</a></li>
                        </ul>
                    </li>
                    <li style="padding-right: 30px;"><a href="profile.php" style="color: white">คำนวณค่า MHR</a></li>
                        <li class="has-dropdown" style="padding-right: 30px;">
                            <a href="#" style="color: white">แกลลอรี่</a>
                        </li>
                    <li class="has-dropdown" style="padding-right: 30px;">
                        <a href="contact.php" style="color: white">ติดต่อเรา</a>
                    </li>
                    <?php
                    if ($session_uid != null) {
                        ?>
                        <li class="has-dropdown">
                            <a href="#">About us</a>
                            <ul class="dropdown">
                                <li><a href="#">จัดการข้อมูล</a></li>
                                <li><a href="#">ออกจากระบบ</a></li>
                            </ul>
                        </li></b>
                        <?php
                    }
                    ?>

                </ul>
                </div>
        </div>
    </div>
</nav>