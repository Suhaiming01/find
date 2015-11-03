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
 include("home_admin.php"); ?>       


<div class="col-md-9">
	<div class="panel panel-success">
		<div class="panel-body">
  					<?php
						$page = $_GET['page'];
							switch( $page ) {
								  case 'adminpass' : include 'module/Admin/adminpass.php'; break;
								  case 'adminpassSave' : include 'module/Admin/adminpassSave.php'; break;
								  case 'listcus_admin' : include 'module/Admin/listcus_admin.php'; break;
								  case 'cusdata_admin' : include 'module/Admin/cusdata_admin.php'; break;
								  case 'listres_admin' : include 'module/Admin/listres_admin.php'; break;
								  case 'resdata_admin' : include 'module/Admin/resdata_admin.php'; break;
								
							}
					?>
  		</div>
	</div>
</div>

