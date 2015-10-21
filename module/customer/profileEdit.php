<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM customers WHERE cus_id='$id'");
	$row = mysql_fetch_array($sql);
?>
<form action="?page=profileEditSave" method="post" class="navbar-form navbar-left" role="search">
  <div class="col-md-10">
  <p>
      ชื่อผู้ใช้ :</br>
      <input class="form-control input-sm" type="text" name="Cus_user"  value="<?= $row['cus_user'] ?>" />
    </p>
    </div>
    
      <div class="col-md-6">
  <select class="input-sm" type="text" name="Initials" />
     <option value="คำนำหน้า">--คำนำหน้า--</option>
     <option value="นาย" <?=$row['Cus_Initials'] == 'นาย' ? ' selected="selected"' : ''?>>นาย</option>
     <option value="นาง" <?=$row['Cus_Initials'] == 'นาง' ? ' selected="selected"' : ''?>>นาง</option>
     <option value="นางสาว" <?=$row['Cus_Initials'] == 'นางสาว' ? ' selected="selected"' : ''?>>นางสาว</option>
    </select>
</div>
      <div class="col-md-10">
    <p>
 ชื่อ-นามสกุล :</br>
 <input class="form-control input-sm" type="text" name="Cus_Name"  value="<?= $row['cus_name'] ?>" />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เลขบัตรประชาชน :</br> <input name="Cus_card" type="text" required="required" class="form-control input-sm" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber"value="<?=$row['cus_card']?>" /> 
    </p>
   
    </div>
   <div class="col-md-10">
    <p>
      อีเมล์ :</br><input class="form-control input-sm" type="text" name="Cus_email"  value="<?= $row['cus_email'] ?>" />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เบอร์โทรศัพท์ :</br><input name="Cus_phone"  type="text" required="required" class="form-control input-sm" placeholder="เบอร์โทรศัพท์  *" maxlength="10" id="mynumber" value="<?=$row['cus_phone']?>" /> 
     
    </p>
    </div>
     <div class="col-md-12">
   <p>      <span class="form-group">
       ที่อยู่ : </br><textarea class="form-control" rows="3" id="comment" name="Cus_Address"><?=$row['cus_add']?></textarea>
      </span></p>
    </div>
    <p>
    <div class="col-md-12">
   <p>      <span class="form-group">
  วัน/เดือน/ปีเกิด :</br> <input type="date" class="form-control input-sm" placeholder="วัน/เดือน/ปี" name="tra_Birthday" value="<?=$row['cus_day']?>" />
 </p>
 <input type="hidden" name='id' value="<?= $id ?>" />
  <button class="btn btn-primary" type="submit">บันทึก</button>
<button class="btn btn-primary" type="reset">ยกเลิก</button>
</form>
