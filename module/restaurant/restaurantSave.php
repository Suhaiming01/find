<?php
            $id = $_GET["id"];
            $add_restaurant = mysql_query("SELECT * FROM add_restaurant WHERE add_id='$id'");
            $rowadd_restaurant = mysql_fetch_array($add_restaurant);
			
			$resimage = mysql_query("SELECT * FROM resimage WHERE add_id='$id' and type='2'");
?>

<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
  
    <td width="30%" height="24" align="right">รูปภาพร้านอาหาร:</td>
    
    <td width="70%"align="left">
   <?php
   	while($rowresimage = mysql_fetch_array($resimage)){
   ?>
   <img src="resimage/<?= $rowresimage["name"];?>" class="img-rounded" width="110px" height="140px">&nbsp;
   <?php
	}
   ?>
    </td>
  </tr>
   <tr>
    <td height="23" align="right">ชื่อร้านอาหาร:</td>
    <td><?=$rowadd_restaurant['add_name']?></td>
  </tr>
   <tr>
    <td height="23" align="right">ประเภทร้านอาหาร:</td>
    <td><?= $rowadd_restaurant['add_type_res']?></td>
  </tr>
  <tr>
    <td height="23" align="right">เลขทะเบียนการค้า :</td>
    <td><?= $rowadd_restaurant['add_Registration']?></td>
  </tr>
  <tr>
    <td height="24" align="right">รหัสฮาลาล :</td>
    <td><?=$rowadd_restaurant['add_halal']?></td>
  </tr>
  <tr>
    <td height="24" align="right"> บ้านเลขที่ :</td>
    <td><?= $rowadd_restaurant['add_House'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">ถนน/ซอย:</td>
    <td><?=$rowadd_restaurant['add_road']?></td>
  </tr>
   <tr>
    <td height="22" align="right">หมู่ที่ :</td>
    <td><?=$rowadd_restaurant['add_mu']?></td>
  </tr>
  <tr>
    <td height="24" align="right">ตำบล :</td>
    <td><?=$rowadd_restaurant['district']?></td>
  </tr>
  <tr>
    <td height="24" align="right">อำเภอ:</td>
    <td><?= $rowadd_restaurant['amphoe'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">จังหวัด :</td>
    <td><?=$rowadd_restaurant['province']?></td>
  </tr>
   <tr>
    <td height="22" align="right">รหัสไปษณีย์ :</td>
    <td><?=$rowadd_restaurant['zipcode']?></td>
  </tr>
  <tr>
    <td height="24" align="right">วันเปิดบริการ :</td>
    <td><?=$rowadd_restaurant['add_time']?></td>
  </tr>
  <tr>
    <td height="24" align="right">เวลาเปิดบริการ :</td>
    <td><?= $rowadd_restaurant['add_Day'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">จำนวนที่นั่ง :</td>
    <td><?=$rowadd_restaurant['add_seat']?></td>
  </tr>
   <tr>
    <td height="22" align="right">รายละเอียด :</td>
    <td><?=$rowadd_restaurant['add_Description']?></td>
  </tr>
  <tr>
    <td height="24" align="right">เว็บไซต์ :</td>
    <td><?= $rowadd_restaurant['add_web'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">หมายเหตุ :</td>
    <td><?=$rowadd_restaurant['add_Notes']?></td>
  </tr>
   <tr>
    <td height="22" align="right">เเผนที่ :</td>
    <td><?=$rowadd_restaurant['res_day']?></td>
  </tr>
  <tr>
    <td height="24" align="right">ละติจูล :</td>
    <td><?= $rowadd_restaurant['add_latitude'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">ลองติจูล :</td>
    <td><?=$rowadd_restaurant['add_latitude']?></td>
  </tr>
  
     </table>
     
      <ul class="pager">
  <li class="previous"><a href="?page=main">ถอยกลับ</a></li>
  </ul>
  
  