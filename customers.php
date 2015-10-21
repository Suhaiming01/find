	<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
 
  <!-----เงื่อนไข-!--->
  <h4>สมาชิก</h4>
  <div class=" col-md-12">
<div class="panel panel-success">
  <div class="panel-body">
    <p>*********กรุณากรอบทุกช่องถ้าไม่มีให้ใช้เครื่องหมาย (-) ******* </p>
  </div>
  <!-----เงื่อนไข-!--->
  
    <form action="customers_action.php" method="post" class="navbar-form navbar-left" role="search">
  <div class="col-md-10">
  <p>
      ชื่อผู้ใช้ :</br>
      <input class="form-control input-sm" type="text" name="Cus_user" placeholder="ชื่อผู้ใช้ *" required />
    </p>
    </div>
     <div class="col-md-10">
    <p>
     <span id="sprypassword3">
      รหัสผ่าน :</br>
<input name="Cus_pass" type="password" class="form-control" id="mem_pass2" placeholder="รหัสผ่าน *" required>
<span class="passwordRequiredMsg">กรุณากรอกข้อมูล.</span></span>
    </p>
    <p>
      <span id="spryconfirm1">
				ยืนยันรหัสผ่าน : </br><input name="mem_repass" type="password" class="form-control" id="mem_repass" placeholder="ยืนยันรหัสผ่าน *">
									<span class="confirmRequiredMsg">กรุณากรอกข้อมูล.</span><span class="confirmInvalidMsg">รหัสผ่านไม่ตรง.</span></span>
    </p>
    </div>
      <div class="col-md-6">
  <select class="form-control input-sm" type="text" name="Initials">
     <option value="คำนำหน้า">--คำนำหน้า--</option>
     <option value="นาย">นาย</option>
     <option value="นาง">นาง</option>
     <option value="นางสาว">นางสาว</option>
    </select>
</div>
      <div class="col-md-10">
    <p>
      ชื่อ-นามสกุล :</br><input class="form-control input-sm" type="text" name="Cus_Name" placeholder="ชื่อ-นามสกุล *" required />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เลขบัตรประชาชน :</br> <input name="Cus_card" type="text" required="required" class="form-control input-sm" placeholder="เลขบัตรประจำตัวประชาชน *" maxlength="13" id="mynumber" onKeyUp="IsNumeric(this.value,this)" />
    </p>
   
    </div>
   <div class="col-md-10">
    <p>
      อีเมล์ :</br><input class="form-control input-sm" type="text" name="Cus_email" placeholder=" อีเมล์ *" required />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เบอร์โทรศัพท์ :</br><input name="Cus_phone" type="text" required="required" class="form-control input-sm" placeholder="เบอร์โทรศัพท์  *" maxlength="10" id="mynumber" onKeyUp="IsNumeric(this.value,this)" />
    </p>
    </div>
     <div class="col-md-12">
   <p>      <span class="form-group">
       ที่อยู่ : </br><textarea class="form-control" rows="3" id="comment" name="Cus_Address" required></textarea>
      </span></p>
    </div>
    <p>
    <div class="col-md-12">
   <p>      <span class="form-group">
  วัน/เดือน/ปีเกิด :</br> <input type="date" class="form-control input-sm" placeholder="วัน/เดือน/ปี" name="tra_Birthday" required="required" />
 </p>
  <button class="btn btn-primary" type="submit">ตกลง</button>
<button class="btn btn-primary" type="reset">ยกเลิก</button>
</form>

 </p>
 
    </div>
  </div>
</div>
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