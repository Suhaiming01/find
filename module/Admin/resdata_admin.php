 <?php if($_GET[res_id]!=''){  $_SESSION[sres_id]=$_GET[res_id]  ;   } 
 	$res_id = $_GET['res_id'];
	//echo $res_id;
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
 
 <div class="alert alert-success">
  <strong><h5 align="center">ข้อมูลการสมัครของเจ้าของร้าน</h5></strong>
</div>  
    <?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM restaurant WHERE res_id = '".$_GET['res_id']."'");
	$row = mysql_fetch_array($sql);
?>


<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
  
    <td width="30%" height="24" align="right">รูปภาพประจำตัว:</td>
    
    <td width="70%"align="left">
   <img src="myfile/<?= $objResult["images_res"];?>" class="img-rounded" width="110px" height="140px">
   </td>
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
            <div class="col-sm-offset-3 col-sm-10">
            	<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=save_status">
                	<input type="hidden" name="res_id" value="<?= $res_id ?>" />
                	<button type="submit" name="save" vale="commit" class="btn btn-primary">ยืนยัน</button>
           			<button type="submit" name="save" value="uncommit" class="btn btn-primary">ยกเลิก</button>
                </form>
           </div>
  		</div>
     
     <ul class="pager">
  <li class="previous"><a href="?page=listres_admin">ถอยกลับ</a></li>
  </ul>
  
  
 
 