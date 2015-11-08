<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
     <div id="content">
     <div class=" col-md-9">
     <div class="panel panel-success">
     <div class="panel-body">
  
  
<?PHP
include  'connectdb.php';
 $cus_id   = $_POST ['cus_id'];
 $username = $_POST ['Cus_user'];
 $password = $_POST ['Cus_pass'];
 $Initials=$_POST ['Initials'] ;
 $Cus_Name = $_POST ['Cus_Name'];
 $fileUpload= $_FILE['fileUpload'];
 $Cus_card = $_POST ['Cus_card'];
 $Cus_email = ($_POST ['Cus_email']);
 $Cus_phone = $_POST ['Cus_phone'];
 $Cus_Add = $_POST ['Cus_Address'];
 $day1 = $_POST ['tra_Birthday'];
 
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))

$sql  = "insert into customers 
(cus_id,cus_user,cus_pass,Cus_Initials,cus_name,cus_card,cus_email,cus_phone,cus_add,cus_day,images_cus) VALUES('cus_id','$username','$password','$Initials','$Cus_Name','$Cus_card',
'$Cus_email','$Cus_phone','$Cus_Add','".$day1."','".$_FILES["filUpload"]["name"]."')";
$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
if($qr)
{
		echo "<script language='javascript'>alert('คุณได้เพิ่มสมาชิกใหม่เรียบร้อย');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=./cus_Save.php'>";
				exit();
    //echo "<h4 style='color:#CC0066;'>คุณได้เพิ่มสมาชิกใหม่เรียบร้อย</h4>";
	header("location:listcus_Save.php");
	}else{
		echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มสมาชิกได้</h2>";
		}
?>


  
  </div>
   <?PHP include("footer.php");?>
</div>


  
</div>
</div>