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
 include("home_res.php"); 
 include  'connectdb.php';
 ?> 
 <head>

 <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
<script>
	var map;
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 6.237006, lng: 101.243813},
		zoom: 5
	  });
	}
	</script>
</head>      
        <div class=" col-md-9">
			<div class="panel panel-success">
  				<div class="panel-body">
  					<?php
						$page=$_GET['page']
;
						switch($page){
							case 'restaurantAdd';
								include'module/restaurant/restaurantAdd.php';
								ิbreak;
							case 'restaurantAddSave';
								include'module/restaurant/restaurantAddSave.php';
								ิbreak;

							}
					?>
  				</div>
			</div>
		</div>
        