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
	$sql = mysql_query("SELECT * FROM customers WHERE cus_id='$id'");
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
 <p> ชื่อ - สกุล : <?= $row['cus_name'] ?> </p>
 <p> สถานะผู้ใช้งาน : <b>สมาชิก</b></p>     
***********************************
    </form>
  </div>
 
  <h5>ข้อมูลร้านอาหารมุสลิม</h5>
				<ul>
                  <li><a href="#">รายการร้านอาหาร</a></li>
                  <li><a href="#">ประเภทร้านอาหาร</a></li>
                  <li><a href="#">เพิ่มร้านอาหาร</a></li>
                  <li><a href="#">ค้นหาร้านอาหาร</a></li>
                  <li><a href="#">ข่าวสารร้านอาหาร</a></li>
                 </ul>
			<h5>ข้อมูลการลงทะเบียน</h5>
				<ul>
                  <li><a href="#">เจ้าของร้านอาหาร</a></li>
                  <li><a href="#">ผู้ใช้ทั่วไป</a></li>
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