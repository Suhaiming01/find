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
 
  <h4>จัดการข้อมูลสมาชิก</h4>
				<ul>
                  <li><a href="?page=cusdataSave">ข้อมูลการสมัคร</a></li>
                  <li><a href="?page=profileEdit">แก้ไขข้อมูลส่วนตัว</a></li>
                  <li><a href="?page=cus_password">เปลี่ยนรหัสผ่าน</a></li>
                  
                 </ul>
			<h4>ข้อมูลการลงทะเบียน</h4>
				<ul>
                  <li><a href="#">เจ้าของร้านอาหาร</a></li>
                  <li><a href="#">ผู้ใช้ทั่วไป</a></li>
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