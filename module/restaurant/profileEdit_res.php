<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM restaurant WHERE res_id='$id'");
	$row = mysql_fetch_array($sql);
	?>
    <div class="alert alert-success">
  <strong><align="center">เเก้ไขข้อมูลเจ้าของร้าน</strong>* สัญลักษณ์เครื่องหมายดอกจัน คือ ข้อมูลที่จำเป็นต้องระบุ
</div>
    
    </br>

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=profileEditSave_res">	
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">ชื่อผู้ใช้:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Res_user" value="<?= $row['res_user'] ?>" />
    	</div>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">คำนำหน้า:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Initials">
               <option value="คำนำหน้า">คำนำหน้า</option>
           <option value="นาย" <?=$row['res_Initials'] == 'นาย' ? ' selected="selected"' : ''?>>นาย</option>
           <option value="นาง" <?=$row['res_Initials'] == 'นาง' ? ' selected="selected"' : ''?>>นาง</option>
           <option value="นางสาว" <?=$row['res_Initials'] == 'นางสาว' ? ' selected="selected"' : ''?>>นางสาว</option>
            </select>
    	</div>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">รูปภาพประจำตัว:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="file" name="images_res" placeholder="รูปภาพประจำตัว *"  />
    	</div>
  </div>
  
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">ชื่อ-นามสกุล:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Res_name" value="<?= $row['res_name'] ?>" />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">เลขบัตรประชาชน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text"  name="Res_card" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber" onKeyUp="IsNumeric(this.value,this)"value="<?=$row['res_card']?>" /> 
            
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">อีเมล์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Res_email" value="<?= $row['res_email'] ?>" />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">เบอร์โทรศัพท์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Res_phone" placeholder="เบอร์โทรศัพท์ *"  maxlength="10" id="mynumber" onKeyUp="IsNumeric(this.value,this)"value="<?=$row['res_phone']?>" /> 
    	</div>
  </div>
      <div class="form-group">
         <span class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">วัน/เดือน/ปีเกิด :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="date"  name="tra_Birthday"  value="<?=$row['res_day']?>" />
    	</div>
        </div>
   
   		 <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
       <input type="hidden" name='id' value="<?= $id ?>" />
             	<button type="submit" class="btn btn-primary">บันทึก</button>
                 <button type="reset" class="btn btn-primary">ยกเลิก</button>
                 
            </div>
  		</div>
</form>
  