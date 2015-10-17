<?php
@session_start();
if ($_SESSION['cus_user1']=="") {
	echo "<script type=\"text/javascript\">";
	echo "alert('กรุณาล็อคอินก่อนครับ')";
	echo "</script>";
	echo "<meta http-equiv='refresh' content='1 ;url='userlogin.php'>";
	exit();
}
@session_start();
 include("header.php"); 
 include("manu1.php"); 
 include("home.php"); ?>       
        <div class="col-md-8">
<div class="panel panel-success">
  <div class="panel-body">
  เนื้อหา
 
  </div>
  
</div>
</div>