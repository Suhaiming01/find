<?php
	$add_id = $_GET['id'];
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_menu WHERE res_id='$id'");
	$check = mysql_num_rows($sql);
	
	if($check < 1){

?>
<!---imag!--->	
    <div class="alert alert-success">
  <strong><p align="center">กรุณาเพิ่มเมนูอาหารของคุณ</p></strong>
</div>
       
       <a href="?page=addmenu_res"><img src="module/restaurant/images/menu.png"  alt="Responsive image" width="900" height="400" class="img-responsive" /></a>
       
       
       
    <!---imag!--->
<?php
		}else{
?>

      <form class="navbar-form navbar-left" method="POST" action="?page=Search_menu&id=<?= $add_id ?>">
        <div class="form-group">
          ค้นหาเมนูอาหาร: <input type="text" name="q" class="form-control" placeholder="ค้นหาเมนูอาหาร" />
        </div>
  <input type="submit" name="search" class="btn btn-primary" value="ค้นหาเมนูอาหาร" />
  <img src="images/MetroUI_Search_64px_1121898_easyicon.net.png" width="39" height="40">
      </form>
      
      <div class="alert-success">
  <strong><p align="center">ข้อมูลร้านอาหาร<img src="images/Fast_Food_72px_1183913_easyicon.net.png" width="55" height="55" /></p>
  </strong>
</div>
     
 
<table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-hover table-striped">
<tr class="table-bordered">
 
            <td width="95" height="37" align="center" valign="top">ลำดับ <a href="?page=addmenu_res&&id=<?= $add_id ?>"><img src="images/add_shopping_cart_64px_1181636_easyicon.net.png" width="35" height="32" /></a></td>
            <td width="153" align="center">ชื่อเมนูอาหาร</td>
            <td width="300" align="center">ประเภทอาหาร/เครื่องดื่ม</td>
             <td width="126" align="center">ราคา</td>
            <td width="245" align="center">จัดการ</td>
      </tr>
      	
<!----->
<?php
	
	$search = mysql_query("SELECT * FROM add_menu WHERE add_id='$add_id'");
	$i=1;
	while($row = mysql_fetch_array($search)){
		
?>
<!---->
        


		<tr class="table-bordered">
            <td align="center"><?=$i?></td>
			<td align="center"><a href="?page=menuSave&id=<?= $row['add_menu_id'] ?>&add_id=<?= $add_id ?>"><?= $row['add_menu'] ?></a></td>
    		<td align="center"><?= $row['add_type_menu'] ?></td>
            <td align="center"><?= $row['add_price'] ?></td>
            <td align="center">
           
       <a href='?page=editmenu&id=<?= $row['add_menu_id'] ?>&add_id=<?= $add_id ?>'><img src="images/edit.png" width="38" height="37"></a>
                |
      <a href='?page=delete_menu&id=<?= $row['add_menu_id'] ?>&add_id=<?= $add_id ?>'><img src="images/delete.png" width="36" height="37"></a>
            </td>
		</tr>
<?php 
$i++;
	}
}
 ?>
 </table>

 
  