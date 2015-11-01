<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
     <div class=" col-md-9">
     <div class="panel panel-success">
     <div class="panel-body">
  
  <?PHP
include  'connectdb.php';
 $res_id   = $_POST ['res_id'];
 $username = $_POST ['Res_user'];
 $password = $_POST ['Res_pass'];
 $Initials=$_POST ['Initials'] ;
 $Res_name = ($_POST ['Res_name']);
 $fileUpload= $_FILE['fileUpload'];
 $Res_card = $_POST ['Res_card'];
 $Res_email = $_POST ['Res_email'];
 $Res_phone = ($_POST ['Res_phone']);
$day1 = $_POST ['tra_Birthday'];

if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))

$sql= "insert into restaurant (res_id,res_user,res_pass,res_Initials,res_name,res_card,res_email,res_phone,res_day,images_res) VALUES('res_id','$username','$password','$Initials','$Res_name','$Res_card','$Res_email','$Res_phone','".$day1."','".$_FILES["filUpload"]["name"]."')";


$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
if($qr)

{
	echo "<script language='javascript'>alert('คุณได้เพิ่มเจ้าของร้านอาหารใหม่เรียบร้อย');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=./listres_Save.php'>";
				exit();
	//echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มเจ้าของร้านอาหารเรียบร้อย</h2>";
	header("refresh:2;url:listuser.php");
	}else{
		echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มเจ้าของร้านอาหารได้</h2>";
		}

?>




  
  </div>
   <?PHP include("footer.php");?>
</div>


  
</div>
</div>