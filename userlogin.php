<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CLEAN BLUE</title>
<meta name="viewport" content="initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
      #map {
        height: 450px;
		width:850px;
      }
    </style>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 6.237006, lng: 101.243813},
    zoom: 5
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOO7sPpQq0vroi7cvVhtndHM7MUhBhRrk&callback=initMap"
        async defer></script>
</head>
<body>
<div id="container"> 
<?php include("header.php"); ?>
<?php include("manu1.php"); ?>

<div class="panel panel-success">
  <div class="panel-body">
<div class=" col-md-3">
<div class="panel panel-success">
 <div class="panel-body">
 <div class="wrapper">
    <form class="form-signin" action="login_check.php" method="post">       
       <h3 class="form-signin-heading">กรุณาเข้าสู่ระบบ<img src="images/Login_48px_583562_easyicon.net.png" width="48" height="48"></h3>
      
       <p>
         <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" required autofocus />
         <label>
           
         </label>
         <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required/>
       </p>
       <button class="btn  btn-primary " type="submit">เข้าสู่ระบบ</button>
       <a href="forgot_pass.php">ลืมรหัสผ่าน</a> ____________________________
</form>
    
        <h5>ข้อมูลร้านอาหารมุสลิม			</h5>
        <ul>
              <li><a href="#">รายการร้านอาหาร</a></li>
                  <li><a href="#">ประเภทร้านอาหาร</a></li>
                  <li><a href="#">เพิ่มร้านอาหาร</a></li>
                  <li><a href="#">ค้นหาร้านอาหาร</a></li>
                  <li><a href="#">ข่าวสารร้านอาหาร</a></li>
            </ul>
			<h5>ข้อมูลการลงทะเบียน</h5>
				<ul>
                  <li><a href="list_restaurant.php">รายชื่อเจ้าของร้านอาหาร</a></li>
                  <li><a href="listcustomers.php">รายชื่อสมาชิก</a></li>
               </ul>
            <h5>ข้อมูลทั่วไป</h5>
				<ul>
                  <li><a href="#">เเผนที่ GPS</a></li>
                  <li><a href="#">เเสดงความคิดเห็น</a></li>
                  <li><a href="#">ข่าวสารทั่วไป</a></li>
           </ul>
  </div>
  </div>
 
  </div>
  </div>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
<!-----map--->
<img src="images/iioi.jpg" alt="" width="200" height="30" />
<div id="map"></div>
   <img src="images/topic_infnews.png" alt="" width="200" height="24" /> 
   </div>
  
</div>
</div>
</body>
</html>