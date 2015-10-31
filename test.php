<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
<?PHP

include  'connectdb.php';
 $cus_id   = $_POST ['cus_id'];
 $username = $_POST ['Cus_user'];
 $password = $_POST ['Cus_pass'];
 $Initials =$_POST ['Initials'] ;
 $Cus_Name = $_POST ['Cus_Name'];
 $fileUpload= $_FILE['fileUpload'];
 $Cus_card = $_POST ['Cus_card'];
 $Cus_email = ($_POST ['Cus_email']);
 $Cus_phone = $_POST ['Cus_phone'];
 $Cus_Add = $_POST ['Cus_Address'];
 $day1 = $_POST ['tra_Birthday'];
 
 
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))

 $sql  = "insert into customers (cus_id,cus_user,cus_pass,Cus_Initials,cus_name,cus_card,cus_email,cus_phone,cus_add,cus_day,images_cus) VALUES('cus_id','$username','$password','$Initials','$Cus_Name','$Cus_card',
'$Cus_email','$Cus_phone','$Cus_Add','".$day1."','".$_FILES["filUpload"]["name"]."')";

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
รูปประจำตัว : <img src="myfile/<?php echo $objResult["FilesName"];?>" /> <br />
ชื่อ : <?=$Cus_Name?> <br />
เลขบัตรประชาชน : <?=$Cus_card?> <br />
อีเมล์ : <?=$Cus_email?> <br />
เบอร์โทรศัพท์ : <?=$Cus_phone?> <br />
ที่อยู่ :<?=$Cus_Add?> <br />
วัน/เดือน/ปีเกิด :<?=$day1?> <br />
 <?php echo "username คือ $username" ?> <br />
 <?php echo 'password คือ'.$password; ?>
  </p>
  
  
  <form name="form1" method="post" action="">

  <p>
  
   <?php

	include  'connectdb.php';
	//$objConnect = mysql_connect("localhost","root","405359010") or die("Error Connect to Database");
	//$objDB = mysql_select_db("mydatabase");
	/* if($_GET[del]==1){
		 
		       $sql_del= "delete from files WHERE FilesID = '$_GET[FilesID]'"; 
			   
			   mysql_query($sql_del);
			   
			}*/
			$strSQL = "SELECT * FROM customers";
				mysql_query("SET character_set_results=utf8");
				mysql_query("SET character_set_client=utf8");
				mysql_query("SET character_set_connection=utf8");
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
<th width="138"> <div align="center">ลำดับ</div></th>
<th width="163"> <div align="center">รูป</div></th>
<th width="291"> <div align="center">ชื่อ</div></th>
<th width="169"> <div align="center">ปปช</div></th>
<th width="101"> <div align="center">อีเมลล์</div></th>
<th width="163"> <div align="center">เบอร์โทร</div></th>
<th width="163"> <div align="center">ที่อยู่</div></th>
<th width="163"> <div align="center">วัน เดือน ปี เกิด</div></th>
 <?php echo "username คือ $username" ?> <br />
 <?php echo 'password คือ'.$password; ?>

</tr>
<?php

	while($objResult = mysql_fetch_array($objQuery))
	{?>
<tr>
<td><div align="center"><?php echo $objResult['cus_id ']?></div></td>
<td><center><img src="myfile/<?php echo $objResult["images_cus"];?>"></center></td>
<td><center><?=$Cus_Name?></center></td>
<td><center><?=$Cus_card?></center></td>
<td><center><?=$Cus_email?></center></td>
<td><center><?=$Cus_phone?></center></td>
<td><center><?=$Cus_Add?></center></td>
<td><center><?=$day1?></center></td>
</tr>
 <?php 
   
      }
      ?>
      <a href="customers.php">กลับ</a><input type="reset" name="Reset" id="button" value="Reset" />
</table>
<?php
mysql_close($conn);
?>

  </p>
  
  
  
  

  
 
</form>
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
