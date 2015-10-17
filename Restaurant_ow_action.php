<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
<?PHP

include  'connectdb.php';
 $res_id   = $_POST ['res_id'];
 $username = $_POST ['Res_user'];
 $password = $_POST ['Res_pass'];
 $Initials=$_POST ['Initials'] ;
 $Res_name = ($_POST ['Res_name']);
 $Res_card = $_POST ['Res_card'];
 $Res_email = $_POST ['Res_email'];
 $Res_phone = ($_POST ['Res_phone']);
$day1 = $_POST ['tra_Birthday'];

$sql= "insert into restaurant (res_id,res_user,res_pass,res_Initials,res_name,res_card,res_email,res_phone,res_day) VALUES('res_id','$username','$password','$Initials','$Res_name','$Res_card','$Res_email','$Res_phone','".$day1."')";


$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
if($qr)

{
	echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มเจ้าของร้านอาหารเรียบร้อย</h2>";
	header("refresh:2;url:listuser.php");
	}else{
		echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มเจ้าของร้านอาหารได้</h2>";
		}

?>
<p>
ชื่อเจ้าของร้าน : <?=$Res_name?>  <br /> 
เลขบัตรประชาชน : <?=$Res_card?> <br />
อีเมล์ : <?=$Res_email?> <br />
เบอร์โทรศัพท์ : <?=$Res_phone?> <br />
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