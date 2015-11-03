	<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
 
  <!-----เงื่อนไข-!--->
  <h4>สมาชิก</h4>
  
    <p>*********กรุณากรอบทุกช่องที่มีใช้เครื่องหมาย (*) ******* </p>
  </div>
  <!-----เงื่อนไข-!--->
 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="customers_action.php">	
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อผู้ใช้:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_user" placeholder="ชื่อผู้ใช้ *"  />
    	</div>
  </div>
   
   <div class="form-group">
    <span id="sprypassword3">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสผ่าน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="password" name="Cus_pass" id="mem_pass2" placeholder="รหัสผ่าน *"  />
    	<span class="passwordRequiredMsg">กรุณากรอกข้อมูล.</span>
        </div>
 </div>
  <div class="form-group">
     <span id="spryconfirm1">
   <label for="inputEmail3" class="col-sm-2 control-label">ยืนยันรหัสผ่าน:</label>
  <div class="col-sm-3">
 <input class="form-control input-sm"  type="password" name="mem_repass" id="mem_repass" placeholder="ยืนยันรหัสผ่าน *"  />
 <span class="confirmRequiredMsg">กรุณากรอกข้อมูล.</span><span class="confirmInvalidMsg">รหัสผ่านไม่ตรง.</span>
    	</div>
  			</div>
   
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">คำนำหน้า:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Initials">
               <option value="คำนำหน้า">คำนำหน้า</option>
               <option value="นาย">นาย</option>
               <option value="นาง">นาง</option>
               <option value="นางสาว">นางสาว</option>
            </select>
    	</div>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รูปภาพประจำตัว:</label>
    	<div class="col-sm-3">
    	  <input class="form-control input-sm"  type="file" name="filUpload" placeholder="รูปภาพประจำตัว *"  />
    	</div>
  </div>
  
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อ-นามสกุล:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_Name" placeholder="ชื่อ-นามสกุล *"  />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เลขบัตรประชาชน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text"  name="Cus_card" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber" onKeyUp="IsNumeric(this.value,this)" />
            
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">อีเมล์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_email" placeholder="อีเมล์ *"  />
    	</div>
  </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เบอร์โทรศัพท์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Cus_phone" placeholder="เบอร์โทรศัพท์ *"  maxlength="10" id="mynumber" onKeyUp="IsNumeric(this.value,this)" />
    	</div>
  </div>
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ที่อยู่:</label>
    	<div class="col-sm-5">
      		<textarea name="Cus_Address" rows="4"  class="form-control" id="comment"></textarea>
    	</div>
        </div>
        
         <div class="form-group"><span class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">วัน/เดือน/ปีเกิด :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="date"  name="tra_Birthday" placeholder="วัน/เดือน/ปีเกิด   *"  />
    	</div>
        </div>
   
   		 <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
             	<button type="submit" class="btn btn-primary">บันทึก</button>
                 <button type="reset" class="btn btn-primary">ยกเลิก</button>
                 
            </div>
  		</div>
</form>
  
       <script type="text/javascript">
			var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {
				validateOn : ["blur"]
			});
			var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
			var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
			var sprypassword3 = new Spry.Widget.ValidationPassword("sprypassword3");
			var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "mem_pass2", {
				validateOn : ["blur"]
			});
		</script>