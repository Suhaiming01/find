<?php 
     include("connectdb.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="./css/bootstrap-select.css" />
   		<link rel="stylesheet" type="text/css" href="./js/SpryValidationTextField.css" />
		<link rel="stylesheet" type="text/css" href="./js/SpryValidationPassword.css" />
		<link rel="stylesheet" type="text/css" href="./js/SpryValidationConfirm.css" />
		<style type="text/css">
		a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
        </style>
		<script type="text/javascript" src="./js/jquery.js"></script>
   		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap-select.js"></script>
		<script src="./js/SpryValidationTextField.js" type="text/javascript"></script>
		<script src="./js/SpryValidationPassword.js" type="text/javascript"></script>
		<script src="./js/SpryValidationConfirm.js" type="text/javascript"></script>
        
        
        
		<script src="./js/jquery.uploadify-3.1.min.js" type="text/javascript"></script>

<title>ระบบค้นหาร้านอาหารมุสลิม</title>

<!----header-!-->
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/iuu.png" alt="" width="1274" height="200" /></td>
  </tr>
  <tr>     <td bgcolor="#FFFFFF"><nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="//?page=main">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>   หน้าเเรก</a></li>
   
   <li role="presentation"><a href="map_GPS.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  GIS</a>
       </li>
   
   <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>  ร้านอาหารมุสลิม<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">หน้าหลักร้านอาหาร</a></li>
            <li><a href="#">ร้านอาหารใหม่</a></li>
            <li><a href="#">ข่าวสารร้านอาหาร</a></li>
            </ul>
  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span>  ประเภทร้านอาหารมุสลิม<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ร้านอาหารในโรงเเรม รีสอร์ท</a></li>
            <li><a href="#">ร้านเค้กเเละเบเกอรี่</a></li>
            <li><a href="#">ร้านชา/กาเเฟ</a></li>
            <li><a href="#">ร้านรถเข็น/เเผงลอย</a></li>
            <li><a href="#">ร้านอาหารจัดส่ง</a></li>
            <li><a href="#">ร้านเเวะพักซื้อของฝาก</a></li>
            <li><a href="#">ร้านอาหารทั่วไป</a></li>
            </ul>
          <li role="presentation"><a href="#"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> บทความ</a></li>
             </li>
 
        <li role="presentation"><a href="#"> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  ติดต่อเรา</a>
       </li>
        <li class="dropdown">

   <li role="presentation" class="active"><a href="logout.php"> <span class="glyphicon glyphicon-education" aria-hidden="true"></span>  ออกจากระบบ</a></li>
   <li class="dropdown">   
   <img src="images/rypng.png" alt="" width="390" height="43" />
      </ul>
          </ul>
        </li>
      </ul>
    </div>
</nav>
