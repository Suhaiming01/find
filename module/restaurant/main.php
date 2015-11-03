<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_restaurant WHERE res_id='$id'");
	$check = mysql_num_rows($sql);
	
	if($check < 1){
?>

	<!---imag!--->	
        <img src="module/restaurant/images/uyrouo.png" alt="Responsive image" width="880" height="60" class="img-responsive">
       
        
       <a href="?page=restaurantAdd"><img src="module/restaurant/images/salam.png"  alt="Responsive image" width="900" height="400" class="img-responsive" /></a>
       
       
       
    <!---imag!--->
<?php
		}else{
?>
<p>ข้อมูลร้านอาหารของคุณ </p>

<table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-hover table-striped">
<tr class="table-bordered">
            <td width="40" align="center">ลำดับ</td>
        	<td width="70" align="center">ชื่อร้านอาหาร</td>
            <td width="65" align="center">ประเภทร้านอาหาร</td>
             <td width="65" align="center">จังหวัด</td>
            <td width="65" align="center">จัดการ</td>
      </tr>
<?php
$i=1;
	while($row = mysql_fetch_array($sql)){
?>

		 <tr class="table-bordered">
            <td align="center"><?=$i?></td>
			<td align="center"><?= $row['add_name'] ?></td>
    		<td align="center"><?= $row['add_type_res'] ?></td>
            <td align="center"><?= $row['province'] ?></td>
            <td align="center">
           
                <a href='?page=editrestaurant&id=<?= $row[add_id] ?>'><img src="images/edit.png" width="38" height="37"></a>
                |
                <a href='?page=delete&id=<?= $row[add_id] ?>'><img src="images/delete.png" width="36" height="37"></a>
            </td>
		</tr>
<?php 
$i++;
	}
}
 ?>
 </table>