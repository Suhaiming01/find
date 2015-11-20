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
 include("header_res.php"); 
 include("manu1.php"); 
 include("home_res.php"); 
 include  'connectdb.php';
 ?><head>

 <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

</head>      
       
 <div class=" col-md-9">
			<div class="panel panel-success">
  				<div class="panel-body">
  					<?php
						$page = $_GET['page'];
							switch( $page ) {
							   case 'restaurantAdd' : include 'module/restaurant/restaurantAdd.php'; break;
							   case 'restaurantAddSave' : include 'module/restaurant/restaurantAddSave.php'; break;
							   case 'main' : include 'module/restaurant/main.php'; break;
							   case 'delete' : include 'module/restaurant/delete.php'; break;
						       case 'profileEdit_res' : include 'module/restaurant/profileEdit_res.php'; break;
						       case 'profileEditSave_res' : include 'module/restaurant/profileEditSave_res.php'; break;
							   case 'addmenu_res' : include 'module/restaurant/addmenu_res.php'; break;
							   case 'addmenu_Save' : include 'module/restaurant/addmenu_Save.php'; break;
							   case 'editrestaurant' : include 'module/restaurant/editrestaurant.php'; break;
							   case 'editrestaurantSave' : include 'module/restaurant/editrestaurantSave.php'; break;
							   case 'res_password' : include 'module/restaurant/res_password.php'; break;
							   case 'respassSave' : include 'module/restaurant/respassSave.php'; break;
							   case 'main_menu' : include 'module/restaurant/main_menu.php'; break;
							   case 'delete_menu' : include 'module/restaurant/delete_menu.php'; break;
							   case 'editmenu' : include 'module/restaurant/editmenu.php'; break;
							   case 'editmenuSave' : include 'module/restaurant/editmenuSave.php'; break;
							   case 'resdataSave' : include 'module/restaurant/resdataSave.php'; break;
							   case 'Search_menu' : include 'module/restaurant/Search_menu.php'; break;
							   case 'restaurantSave' : include 'module/restaurant/restaurantSave.php'; break;
							   case 'menuSave' : include 'module/restaurant/menuSave.php'; break;
							  
							}

					?>
  				</div>
			</div>
		</div>
        