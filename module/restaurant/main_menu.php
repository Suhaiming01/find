<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_menu WHERE res_id='$id'");
	$check = mysql_num_rows($sql);
	
	if($check < 1){
?>
	<!---imag!--->	
        <img src="module/restaurant/images/add_menu.png" alt="Responsive image" width="880" height="60" class="img-responsive">
       
        
   <a href="?page=addmenu_res"><img src="module/restaurant/images/menu.png"  alt="Responsive image" width="900" height="400" class="img-responsive" /></a>
       
       
       
    <!---imag!--->
<?php
		}else{
?>
<p>ข้อมูลเมนูอาหาร    </p>
    <table width="359" class="table table-bordered table-striped">
<tr class="table-bordered">
   	  <tr>
        	<td width="90" align="center">ชื่อเมนูอาหาร</td>
            <td width="65" align="center">ประเภทอาหาร</td>
             <td width="65" align="center">ราคา</td>
            <td width="65" align="center">จัดการ</td>
      </tr>
<?php
	while($row = mysql_fetch_array($sql)){
?>
		<tr>
			<td align="center"><?= $row['add_menu'] ?></td>
    		<td align="center"><?= $row['add_type_menu'] ?></td>
            <td align="center"><?= $row['add_price'] ?></td>
            <td align="center">
           
       <a href='?page=editmenu&id=<?= $row['add_menu_id'] ?>'><img src="images/edit.png" width="38" height="37"></a>
                |
      <a href='?page=delete_menu&id=<?= $row['add_menu_id'] ?>'onclick="return confirm('คุณเเน่ใจว่าต้องการจะลบข้อความนี้');">
      <img src="images/delete.png" width="36" height="37"></a>
            </td>
		</tr>
<?php 
	}
}
 ?>
 </table>