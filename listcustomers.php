<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu.php"); ?>
<div class="panel panel-success">
  <div class="panel-body">
  
  <h4>รายชื่อสมาชิก</h4>
  
  <?php
 $sql= "select * from customers";
 $q = mysql_query($sql);
  $num =  mysql_num_rows($q);
?>

<p>มีสมาชิกทั้งหมด <?=$num?> คน<a href="customers.php"><img src="images/Female_user_add_64px_1176947_easyicon.net.png" alt="" width="45" height="45" /></a></p>
  <table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-bordered table-striped">
<tr class="table-bordered">
<td width="277" align="center">ชื่อ-นามสกุล</td>
<td width="602"align="center">ที่อยู่</td>
<td width="602"align="center">วันเกิด</td>
<td width="602"align="center">รายละเอียด</td>
<td width="602"align="center">จัดการ</td>
</tr>
<?php
   while ($result = mysql_fetch_array($q)){
    
  ?>
   <tr>
   
<tr class="table-bordered">
<td width="277" align="center">
<!---เเก้ไข--->
<?=$result['cus_name']?></td>
<td width="602" align="center">
<?=$result['cus_add']?></td>
<td width="602" align="center">
<?=$result['cus_day']?></td>
<!---เเก้ไข--->
<td width="602"align="center"><a href="detailuser.php?id=<?=$result['id']?>"><img src="images/detail_29.212543554007px_1147181_easyicon.net.png" alt="" width="24" height="26" /></td>
<td width="602"align="center"><a href="edit_cus.php?id=<?=$result['cus_id']?>"> <img src="images/Female_user_edit_48px_1176948_easyicon.net.png" alt="" width="36" height="35" /> | <a href="delete_cus.php?cus_id=<?=$result['cus_id']?>"onclick="return confirm('คุณเเน่ใจว่าต้องการจะลบข้อความนี้');"><img src="images/delete_user_32px_1088317_easyicon.net.png" alt="" width="32" height="32" /></td>
</tr>
<?php
	}
  ?> 

</table>

</td>
   
  
   
    </div>
