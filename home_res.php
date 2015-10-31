<?php
@session_start();
if ($_SESSION['cus_user1']=="") {
	echo "<script type=\"text/javascript\">";
	echo "alert('กรุณาล็อคอินก่อนครับ')";
	echo "</script>";
	echo "<meta http-equiv='refresh' content='1 ;url=index.php'>";
	exit();
}
	$id = $_SESSION['cus_user1'];
	$sql = mysql_query("SELECT * FROM restaurant WHERE res_id='$id'");
	$row = mysql_fetch_array($sql);

?>
<div class="panel panel-success">
  <div class="panel-body"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	
    
    
        <link rel="stylesheet" href="file:///C|/Users/piman/Downloads/css/bootstrap.min.css">
	<script src="file:///C|/Users/piman/Downloads/.js/bootstrap.min.js"></script>
<body>
<!-----menu---!-->
<div class=" col-md-3">
<div class="panel panel-success">
 <div class="panel-body">
 <div class="wrapper">
    <form action="login.php" method="post" class="form-signin">
    <h4>ยินดีต้อนรับเข้าสู่ระบบ</h4>
 <p> ชื่อ - สกุล : <b><?= $row['res_name'] ?></b> </p> 
 <p> สถานะผู้ใช้งาน : <b>เจ้าของร้าน</b>    
***********************************
    </form>
  </div>
 
  <h4>ข้อมูลร้านอาหารมุสลิม</h4>
				<ul>
                  <li><a href="?page=main">หน้าร้านของฉัน</a></li>
                  <li><a href="?page=restaurantAdd">เพิ่มข้อมูลร้านอาหาร</a></li>
                  <li><a href="?page=branch">เพิ่มสาขา</a></li>
                  <li><a href="?page=main_menu">หน้าเมนูอาหาร</a></li>
                  <li><a href="?page=addmenu_res">เพิ่มเมนูอาหาร</a></li>
                  <li><a href="#">ข่าวสารร้านอาหาร</a></li>
                   
				</ul>
			<h4>จัดการข้อมูลเจ้าของร้าน</h4>
				<ul>
                  <li><a href="?page=profileEdit_res">แก้ไขข้อมูลส่วนตัว</a></li>
                  <li><a href="?page=res_password">เปลี่ยนรหัสผ่าน</a></li>
               </ul>
            <h4>ข้อมูลทั่วไป</h4>
				<ul>
                  <li><a href="#">เเผนที่ GPS</a></li>
                  <li><a href="#">เเสดงความคิดเห็น</a></li>
                  <li><a href="#">ข่าวสารทั่วไป</a></li>
           </ul>
 </div>
</div>
</div>
</script>
    		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiRqDUY4KSI3Wo6iAMp_SqR2FRXet0bP4&callback=initMap"
        async defer>
        </script>