<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_restaurant WHERE res_id='$id'");
	$check = mysql_num_rows($sql);
	
	if($check < 1){
?>

	<div class="alert alert-success">
  <strong><p align="center">กรุณาเพิ่มร้านอาหารมุสลิมของคุณ</p></strong>
</div>
       
         <a href="?page=restaurantAdd"><img src="module/restaurant/images/salam.png"  alt="Responsive image" width="900" height="400" class="img-responsive" /></a>
       
       
       
    <!---imag!--->
<?php
		}else{
?>
<div class="alert-success">
  <strong><h5 align="center">ข้อมูลร้านอาหารของคุณ<img src="images/burger_fast_food_hamburger_junk_64px_811_easyicon.net.png" width="53" height="54" /></h5>
  </strong>
</div>
<table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-hover table-striped">
<tr class="table-bordered">
            <td width="40" align="center">ลำดับ<a href="?page=restaurantAdd"><img src="images/add_to_photos_48px_1181637_easyicon.net.png" width="32" height="32" /></a></td>
        	<td width="50" align="center">ชื่อร้าน</td>
            <td width="70" align="center">ประเภทร้านอาหาร</td>
             <td width="60" align="center">จังหวัด</td>
             <td width="65" align="center">เมนูอาหาร</td>
             <td width="65" align="center">เพิ่มเมนูอาหาร</td>
            <td width="65" align="center">จัดการ</td>
      </tr>
<?php
$i=1;
	while($row = mysql_fetch_array($sql)){
		$id = $row['add_id'];
?>

		 <tr class="table-bordered">
            <td align="center"><?=$i?></td>
			<td align="center"><a href="?page=restaurantSave&id=<?=$id?>"><?= $row['add_name'] ?></a></td>
    		<td align="center"><?= $row['add_type_res'] ?></td>
            <td align="center"><?= $row['province'] ?></td>
            <!---->
            <td align="center"><a href="?page=main_menu&id=<?= $id ?>"><img src="images/burger_33.491525423729px_1150135_easyicon.net.png" width="33" height="31" /></a></td>
            <td align="center"><a href="?page=addmenu_res&id=<?= $id ?>"><img src="images/add_shopping_cart_64px_1181636_easyicon.net.png" width="39" height="37" /></a></td>
           <td align="center">
           
                <a href='?page=editrestaurant&id=<?= $row['add_id'] ?>'><img src="images/edit.png" width="38" height="37"></a>
                |
                <a href='?page=delete&id=<?= $row['add_id'] ?>'><img src="images/delete.png" width="36" height="37"></a>
            </td>
		</tr>
<?php 
$i++;
	}
}
 ?>
 </table>