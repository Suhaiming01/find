<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
 
  <!-----เงื่อนไข-!--->
  
   <h4>ข้อมูลสมาชิก</h4>
  
  <?php
 $sql= "select * from customers";
 $q = mysql_query($sql);
  $num =  mysql_num_rows($q);
 ?>
 
  <table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-bordered table-striped">
<tr class="table-bordered">
<td width="277" align="center">ลำดับ</td>
<td width="602"align="center">ชื่อ-นามสกุล</td>
<td width="602"align="center">ที่อยู่</td>
<td width="602"align="center">วันเกิด</td>
<td width="602"align="center">รายละเอียด</td>
</tr>

<?php
   while ($result = mysql_fetch_array($q)){
    
  ?>
 
 <tr class="table-bordered">
<td width="277" align="center"></td>
<td width="602" align="center"><?=$result['cus_name']?></td>
<td width="602" align="center"><?=$result['cus_add']?></td>
<td width="602"align="center"><?=$result['cus_day']?></td>
<td width="602"align="center"><a href="cusdataSave1.php">ข้อมูล....>></a></td>
</tr>
<?php
	}
  ?> 
</table>
</td>
   
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
    </div>