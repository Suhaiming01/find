<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM restaurant WHERE res_id='$id'");
	$row = mysql_fetch_array($sql);
	
	echo $id;
?>
<form action="?page=profileEditSave_res" method="post" class="navbar-form navbar-left" role="search">
  <div class="col-md-10">
  <p>
      ชื่อผู้ใช้ :</br>
      <input class="form-control input-sm" type="text" name="Res_user"  value="<?= $row['res_user'] ?>" />
    </p>
    </div>
    
      <div class="col-md-6">
  <select class="input-sm" type="text" name="Initials" />
     <option value="คำนำหน้า">--คำนำหน้า--</option>
     <option value="นาย" <?=$row['res_Initials'] == 'นาย' ? ' selected="selected"' : ''?>>นาย</option>
     <option value="นาง" <?=$row['res_Initials'] == 'นาง' ? ' selected="selected"' : ''?>>นาง</option>
     <option value="นางสาว" <?=$row['res_Initials'] == 'นางสาว' ? ' selected="selected"' : ''?>>นางสาว</option>
    </select>
</div>
      <div class="col-md-10">
    <p>
 ชื่อ-นามสกุล :</br>
 <input class="form-control input-sm" type="text" name="Res_name"  value="<?= $row['res_name'] ?>" />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เลขบัตรประชาชน :</br> <input name="Res_card" type="text" class="form-control input-sm" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber"value="<?=$row['res_card']?>" /> 
    </p>
   
    </div>
   <div class="col-md-10">
    <p>
      อีเมล์ :</br><input class="form-control input-sm" type="text" name="Res_email"  value="<?= $row['res_email'] ?>" />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เบอร์โทรศัพท์ :</br><input name="Res_phone"  type="text"  class="form-control input-sm" placeholder="เบอร์โทรศัพท์  *" maxlength="10" id="mynumber" value="<?=$row['res_phone']?>" /> 
     
    </p>
    </div>
    
    <p>
    <div class="col-md-12">
   <p>      <span class="form-group">
  วัน/เดือน/ปีเกิด :</br> <input type="date" class="form-control input-sm" placeholder="วัน/เดือน/ปี" name="tra_Birthday" value="<?=$row['res_day']?>" />
 </p>
 <input type="hidden" name='id' value="<?= $id ?>" />
  <button class="btn btn-primary" type="submit">บันทึก</button>
<button class="btn btn-primary" type="reset">ยกเลิก</button>
</form>
