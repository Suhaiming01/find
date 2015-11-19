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
*****************************************
    </form>
    <SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function greeting() {
var today = new Date();
var hrs = today.getHours();
document.writeln("<CENTER>");
document.write("คุณเข้าชมหน้านี้ในวันที่ ");
dayStr = today.toLocaleString();
document.write(dayStr);
document.writeln("</CENTER>");
}
function montharr(m0, m1, m2, m3, m4, m5, m6, m7, m8, m9, m10, m11)
{
this[0] = m0;
this[1] = m1;
this[2] = m2;
this[3] = m3;
this[4] = m4;
this[5] = m5;
this[6] = m6;
this[7] = m7;
this[8] = m8;
this[9] = m9;
this[10] = m10;
this[11] = m11;
}
function calendar()
{
var monthNames = "JanFebMarAprMayJunJulAugSepOctNovDec";
var today = new Date();
var thisDay;
var monthDays = new montharr(31, 28, 31, 30, 31, 30, 31, 31, 30,31, 30, 31);
year = today.getYear() + 0;
thisDay = today.getDate();
if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0))
monthDays[1] = 29;
nDays = monthDays[today.getMonth()];
firstDay = today;
firstDay.setDate(1); 
testMe = firstDay.getDate();
if (testMe == 2)
firstDay.setDate(0); 
startDay = firstDay.getDay();
document.writeln("<CENTER>");
document.write("<TABLE BORDER>");
document.write("<TR><TH COLSPAN=7>");
document.write(monthNames.substring(today.getMonth() * 3,
(today.getMonth() + 1) * 3));
document.write(". ");
document.write(year);
document.write("<TR><TH>sun<TH>mon<TH>tue<TH>wed<TH>thu<TH>fri<TH>sat");
document.write("<TR>");
column = 0;
for (i=0; i<startDay; i++) {
document.write("<TD>");
column++;
}
for (i=1; i<=nDays; i++) {
document.write("<TD>");
if (i == thisDay)
document.write("<FONT COLOR=\"#FF0000\">")
document.write(i);
if (i == thisDay)
document.write("</FONT>")
column++;
if (column == 7) {
document.write("<TR>"); 
column = 0;
}
}
document.write("</TABLE>");
document.writeln("</CENTER>");
}
greeting();
document.write("</br>");
calendar();
document.write("");
// End -->
</SCRIPT>
  </div>
_______________________________ 
  <h4>รายละเอียดร้านอาหารมุสลิม</h4>
				<ul class="nav nav-pills nav-stacked">
                  <li><a href="#">ข้อมูลร้านอาหาร</a></li>
                  <li><a href="#">ข้อมูลประเภทอาหาร</a></li>
                  <li><a href="#">ข้อมูลจังหวัด</a></li>
                  <li><a href="#">ข้อมูลเมนูอาหาร</a></li>
                  <li><a href="#">ข้อมูลประเภทเมนูอาหาร</a></li>
                  <li><a href="#">ข่าวสารร้านอาหาร</a></li>
                   
				</ul>
			<h4>ข้อมูลการลงทะเบียน</h4>
				<ul class="nav nav-pills nav-stacked">
                  <li><a href="?page=listcus_admin">ข้อมูลสมาชิก</a></li>
                  <li><a href="?page=">ข้อมูลเจ้าของร้าน</a></li>
                  <li><a href="?page=approval_admin">คำร้องขอเปิดร้าน</a></li>
                  <li><a href="?page=">ร้านที่ไม่อนุมัติ</a></li>
               </ul>
            <h4>ข้อมูลส่วนตัว</h4>
				<ul class="nav nav-pills nav-stacked">
                  <li><a href="#">ประวัติผู้ดูเเลระบบ</a></li>
                  <li><a href="?page=adminpass">เปลี่ยนรหัสผ่าน</a></li>
                  
           </ul>
 </div>
</div>
</div>
</script>
    		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiRqDUY4KSI3Wo6iAMp_SqR2FRXet0bP4&callback=initMap"
        async defer>
        </script>