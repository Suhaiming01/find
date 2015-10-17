<?php
  session_start();
  unset($_SESSION['cus_user1']);
  header("Refresh : 0; url=userlogin.php");
  echo"กรุณารอสักครู่ กำลังออกจากระบบภายใน 0 วินาที";
  ?>