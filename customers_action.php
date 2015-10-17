<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
<?PHP

include  'connectdb.php';
 $cus_id   = $_POST ['cus_id'];
 $username = $_POST ['Cus_user'];
 $password = $_POST ['Cus_pass'];
 $Initials=$_POST ['Initials'] ;
 $Cus_Name = $_POST ['Cus_Name'];
 $Cus_card = $_POST ['Cus_card'];
 $Cus_email = ($_POST ['Cus_email']);
 $Cus_phone = $_POST ['Cus_phone'];
 $Cus_Add = $_POST ['Cus_Address'];
 $day1 = $_POST ['tra_Birthday'];

$sql= "insert into customers (cus_id,cus_user,cus_pass,Cus_Initials,cus_name,cus_card,cus_email,cus_phone,cus_add,cus_day) VALUES('cus_id','$username','$password','$Initials','$Cus_Name','$Cus_card','$Cus_email','$Cus_phone','$Cus_Add','".$day1."')";


$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
if($qr)

{
	echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มสมาชิกใหม่เรียบร้อย</h2>";
	header("refresh:2;url:listuser.php");
	}else{
		echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มสมาชิกได้</h2>";
		}

?>
<p>ชื่อ : <?=$Cus_Name?> <br />
เลขบัตรประชาชน : <?=$Cus_card?> <br />
อีเมล์ : <?=$Cus_email?> <br />
เบอร์โทรศัพท์ : <?=$Cus_phone?> <br />
ที่อยู่ :<?=$Cus_Add?> <br />
วัน/เดือน/ปีเกิด :<?=$day1?> <br />
 <?php echo "username คือ $username" ?> <br />
 <?php echo 'password คือ'.$password; ?>
  </p>
  
  </div>
   <?PHP include("footer.php");?>
</div>

</body>
</html>

<div class=" col-md-8">
<div class="panel panel-success">
  <div class="panel-body">
  เนื้อหา
  </div>
  
</div>
</div>
