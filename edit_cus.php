<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-8">
<div class="panel panel-success">
  <div class="panel-body">
  
  <?php
$id = $_GET['cus_id'];
$sql ="select * from customers where cus_id=$cus_id";
$querydb = mysql_query($sql);
$result = mysql_fetch_array($querydb);
?>
 
  <!-----เงื่อนไข-!--->
  <h4>เเก้ไขข้อมูลสมาชิกที่ไอดีที่<?=$cus_id?></h4>
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
      <input class="form-control input-sm" type="text" name="Cus_user" value="<?=$result['cus_user']?>" placeholder="ชื่อผู้ใช้ *" required />
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
  <select class="input-sm"  type="text" name="Initials"> 
     <option selected value="<?=$result['Cus_Initials']?>"><?=$result['Cus_Initials']?></option>
     <option value="คำนำหน้า">--คำนำหน้า--</option>
     <option value="นาย">นาย</option>
     <option value="นาง">นาง</option>
     <option value="นางสาว">นางสาว</option>
    </select>
</div>
      <div class="col-md-10">
    <p>
      ชื่อ-นามสกุล :</br><input class="form-control input-sm" type="text" name="Cus_Name" value="<?=$result['cus_name']?>" placeholder="ชื่อ-นามสกุล *" required />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เลขบัตรประชาชน :</br><input class="form-control input-sm" type="text" name="Cus_card" value="<?=$result['cus_card']?>"placeholder="เลขบัตรประชาชน *" required />
    </p>
   
    </div>
   <div class="col-md-10">
    <p>
      อีเมล์ :</br><input class="form-control input-sm" type="text" name="Cus_email" value="<?=$result['cus_email']?>" placeholder=" อีเมล์ *" required />
    </p>
    </div>
     <div class="col-md-10">
    <p>
      เบอร์โทรศัพท์ :</br><input class="form-control input-sm" type="text" name="Cus_phone" value="<?=$result['cus_phone']?>" placeholder="เบอร์โทรศัพท์ *" required />
    </p>
    </div>
     <div class="col-md-12">
   <p>      <span class="form-group">
       ที่อยู่ : </br><textarea class="form-control" rows="3" id="comment" name="Cus_Address" required><?=$result['cus_add']?></textarea>
      </span></p>
    </div>
    <p>
    <div class="col-md-12">
   <p>      <span class="form-group">
  วัน/เดือน/ปีเกิด :</br> <input type="date" class="form-control input-sm" value="<?=$result['cus_day']?>" placeholder="วัน/เดือน/ปี" name="tra_Birthday" required="required" />
 </p>
  <button class="btn btn-default" type="submit">เเก้ไขสมาชิก</button>
<button class="btn btn-default" type="reset">ล้างข้อมูล</button>
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