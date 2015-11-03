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
	$sql = mysql_query("SELECT * FROM admin WHERE admin_id='$id'");
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
 <p> ชื่อ - สกุล : <b><?= $row['admin_name'] ?></b> </p> 
 <p> สถานะผู้ใช้งาน : <b>ผู้ดูเเลระบบ</b>    
***********************************
    </form>
  </div>
 
  <h4>รายละเอียดร้านอาหารมุสลิม</h4>
				<ul>
                  <li><a href="#">ข้อมูลร้านอาหาร</a></li>
                  <li><a href="#">ข้อมูลประเภทอาหาร</a></li>
                  <li><a href="#">ข้อมูลจังหวัด</a></li>
                  <li><a href="#">ข้อมูลเมนูอาหาร</a></li>
                  <li><a href="#">ข้อมูลประเภทเมนูอาหาร</a></li>
                  <li><a href="#">ข่าวสารร้านอาหาร</a></li>
                   
				</ul>
			<h4>ข้อมูลการลงทะเบียน</h4>
				<ul>
                  <li><a href="?page=listcus_admin">ข้อมูลสมาชิก</a></li>
                  <li><a href="?page=listres_admin">ข้อมูลเจ้าของร้าน</a></li>
               </ul>
            <h4>ข้อมูลส่วนตัว</h4>
				<ul>
                  <li><a href="#">ประวัติผู้เเลระบบ</a></li>
                  <li><a href="?page=adminpass">เปลี่ยนรหัสผ่าน</a></li>
                  
           </ul>
 </div>
</div>
</div>
</script>
    		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiRqDUY4KSI3Wo6iAMp_SqR2FRXet0bP4&callback=initMap"
        async defer>
        </script>