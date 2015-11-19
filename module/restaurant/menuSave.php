<?php
            $id = $_GET["id"];
            $add_menu = mysql_query("SELECT * FROM add_menu WHERE add_menu_id='$id'");
            $rowadd_menu = mysql_fetch_array($add_menu);
			
			$resimage_menu = mysql_query("SELECT * FROM resimage_menu WHERE add_menu_id='$id'");
			
?>

           <table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
  
    <td width="30%" height="24" align="right">รูปภาพร้านอาหาร:</td>
    
    <td width="70%"align="left">
   <?php
   	while($rowresimage_menu = mysql_fetch_array($resimage_menu)){
   ?>
   <img src="resimage_menu/<?=$rowresimage_menu["name"];?>" class="img-rounded" width="110px" height="140px">&nbsp;
  
   <?php
	}
   ?>
   
     </td>
  </tr>
   <tr>
    <td height="23" align="right">ชื่อเมนูอาหาร:</td>
    <td><?=$rowadd_menu['add_menu']?></td>
  </tr>
   <tr>
    <td height="23" align="right">ประเภทอาหาร:</td>
    <td><?=$rowadd_menu['add_type_menu']?></td>
  </tr>
  <tr>
    <td height="23" align="right">รายละเอียด :</td>
    <td><?=$rowadd_menu['add_Description']?></td>
  </tr>
  <tr>
    <td height="24" align="right">ราคา :</td>
    <td><?=$rowadd_menu['add_price']?></td>
  </tr>
 
  
   </table>
     
     