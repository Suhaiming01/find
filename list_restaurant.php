<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu.php"); ?>
<div class="panel panel-success">
  <div class="panel-body">
  
 
  <h4>รายชื่อเจ้าร้านอาหาร</h4>
  <?php
 $sql= "select * from restaurant";
 $q = mysql_query($sql);
  $num =  mysql_num_rows($q);
?>
<p>มีเจ้าของร้านอาหารทั้งหมด <?=$num?> คน
  <a href="Restaurant_ow.php"><img src="images/Female_user_add_64px_1176947_easyicon.net.png" alt="" width="45" height="45" /></a>
  <table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">

<td width="277" align="center">ชื่อ-นามสกุล</td>
<td width="602"align="center">เบอร์โทรศัพท์</td>
<td width="602"align="center">วันเกิด</td>
<td width="602"align="center">รายละเอียด</td>
<td width="602"align="center">จัดการ</td>
</tr>
<?php
   while ($result = mysql_fetch_array($q)){
    
  ?>
<tr class="table-bordered">
<!--hi--->
<td width="277" align="center"><?=$result['res_name']?></td>
<td width="602" align="center"><?=$result['res_phone']?></td>
<td width="602" align="center"><?=$result['res_day']?></td>
<!--hi--->
<td width="602"align="center"><a href="detailuser.php?id=<?=$result['id']?>"><img src="images/detail_29.212543554007px_1147181_easyicon.net.png" alt="" width="24" height="26" /></td>
<td width="602"align="center"><a href="edituser.php?id=<?=$result['id']?>"><img src="images/Female_user_edit_48px_1176948_easyicon.net.png" alt="" width="36" height="35" /> | <a href="deleteuser.php?id=<?=$result['id']?>"onclick="return confirm('คุณเเน่ใจว่าต้องการจะลบข้อความนี้');"> <img src="images/delete_user_32px_1088317_easyicon.net.png" alt="" width="32" height="32" /></td>
</tr>
<?php
	}
  ?> 
</table>
</td>
   
  
   
    </div>
