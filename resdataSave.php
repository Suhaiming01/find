<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
  
  
  
  
  <?php if($_GET[res_id]!=''){  $_SESSION[sres_id]=$_GET[res_id]  ;   } 
	  	//echo "sres_id=".$_SESSION[sres_id];?>
<?php

	include  'connectdb.php';
	//$objConnect = mysql_connect("localhost","root","405359010") or die("Error Connect to Database");
	//$objDB = mysql_select_db("mydatabase");
	/* if($_GET[del]==1){
		 
		       $sql_del= "delete from files WHERE FilesID = '$_GET[FilesID]'"; 
			   
			   mysql_query($sql_del);
			   
			}*/
			$strSQL = "SELECT * FROM restaurant  WHERE res_id = '".$_GET['res_id']."'";
				mysql_query("SET character_set_results=utf8");
				mysql_query("SET character_set_client=utf8");
				mysql_query("SET character_set_connection=utf8");
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<?php

	while($objResult = mysql_fetch_array($objQuery))
	{?>
    
    
 <h4>ข้อมูลการสมัคร</h4> 
 <?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM restaurant WHERE res_id = '".$_GET['res_id']."'");
	$row = mysql_fetch_array($sql);
?>


<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
  
    <td width="30%" height="24" align="right">รูปภาพประจำตัว:</td>
    
    <td width="70%"align="left"><img src="myfile/<?php echo $objResult["images_res"];?>"></td>
  </tr>
   <tr>
    <td height="23" align="right">ชื่อผู้ใช้:</td>
    <td><?=$row['res_user']?></td>
  </tr>
   <tr>
    <td height="23" align="right">คำนำหน้า:</td>
    <td><?= $row['res_Initials']?></td>
  </tr>
  <tr>
    <td height="23" align="right">ชื่อ-นามสกุล :</td>
    <td><?= $row['res_name']?></td>
  </tr>
  <tr>
    <td height="24" align="right">เลขบัตรประจำตัวประชาชน :</td>
    <td><?=$row['res_card']?></td>
  </tr>
  <tr>
    <td height="24" align="right">อีเมล์ :</td>
    <td><?= $row['res_email'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">เบอร์โทรศัพท์ :</td>
    <td><?=$row['res_phone']?></td>
  </tr>
   <tr>
    <td height="22" align="right">วัน/เดือน/ปีเกิด :</td>
    <td><?=$row['res_day']?></td>
  </tr>
  
  
  <?php 
   
      }
      ?>
     </table>
      <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
      <a href="listres_Save.php"><button type="reset" class="btn btn-primary">ถอยกลับ</button></a> 
      </div>
</div>