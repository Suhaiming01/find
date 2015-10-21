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


<div class="col-md-9">
	<div class="panel panel-success">
		<div class="panel-body">
  					<?php
						$page = $_GET['page'];
							switch( $page ) {
								case 'profileEdit' : include 'module/customer/profileEdit.php'; break;
								case 'profileEditSave' : include 'module/customer/profileEditSave.php'; break;
								case 'cus_password' : include 'module/customer/cus_password.php'; break;
								case 'cuspassSave' : include 'module/customer/cuspassSave.php'; break;
							}
					?>
  		</div>
	</div>
</div>

