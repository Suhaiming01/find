<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM customers WHERE cus_id='$id'");
	$row = mysql_fetch_array($sql);
?>
<h4>เเก้ข้อมูลสมาชิก</h4>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=profileEditSave">

 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_user" value="<?= $row['cus_user'] ?>" />
    	</div>
  </div>
   
  
   
  
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">คำนำหน้า:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Initials">
        <option value="คำนำหน้า">--คำนำหน้า--</option>
        <option value="นาย" <?=$row['Cus_Initials'] == 'นาย' ? ' selected="selected"' : ''?>>นาย</option>
        <option value="นาง" <?=$row['Cus_Initials'] == 'นาง' ? ' selected="selected"' : ''?>>นาง</option>
        <option value="นางสาว" <?=$row['Cus_Initials'] == 'นางสาว' ? ' selected="selected"' : ''?>>นางสาว</option>
            </select>
    	</div>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รูปภาพประจำตัว:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="file" name="filUpload"  value="<?= $row['images_cus'] ?>" />
    	</div>
  </div>
  
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อ-นามสกุล:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_Name"  value="<?= $row['cus_name'] ?>" />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เลขบัตรประชาชน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text"  name="Cus_card" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber" onKeyUp="IsNumeric(this.value,this)"value="<?=$row['cus_card']?>" /> 
            
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_email"  value="<?= $row['cus_email'] ?>" />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เบอร์โทรศัพท์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_phone" placeholder="เบอร์โทรศัพท์ *"  maxlength="10" id="mynumber" onKeyUp="IsNumeric(this.value,this) "value="<?=$row['cus_phone']?>" /> 
    	</div>
  </div>
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่:</label>
    	<div class="col-sm-5">
      		<textarea name="Cus_Address" rows="4"  class="form-control" id="comment"><?=$row['cus_add']?></textarea>
    	</div>
        </div>
        
         <div class="form-group"><span class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">วัน/เดือน/ปีเกิด :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="date"  name="tra_Birthday"  value="<?=$row['cus_day']?>" />
    	</div>
        </div>
   
   		 <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
       <input type="hidden" name='id' value="<?= $id ?>" />
             	<button type="submit" class="btn btn-primary">บันทึก</button>
                 <button type="reset" class="btn btn-primary">ยกเลิก</button>
                 
            </div>
  		</div>
</form>
  