<?php
  //session_start();
  //unset($_SESSION['cus_user1']);
  //header("Refresh : 0; url=userlogin.php");
  //echo"กรุณารอสักครู่ กำลังออกจากระบบภายใน 0 วินาที";
  ?>
  
  <?php
   @session_start();
	session_destroy();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";
	echo "<script type='text/javascript'>alert('ออกจากระบบเรียบร้อย');</script>";
    echo "<script type='text/javascript'>window.location='../find/userlogin.php';</script>";// เวลาออกจากระบบ   จะส่งไปหน้าไหน  ตรงนี้  ให้กลับไป  หน้าลอคอินเดิม 
	exit();
	
 mysql_close($conn);

?>