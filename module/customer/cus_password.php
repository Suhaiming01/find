 <div class="alert alert-success">
  <strong><align="center">เปลี่ยนรหัสผ่าน</strong>* สัญลักษณ์เครื่องหมายดอกจัน คือ ข้อมูลที่จำเป็นต้องระบุ
</div>
 
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=cuspassSave">	
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-3 control-label">รหัสผ่านเดิม:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="password" name="oldPass" placeholder="รหัสผ่านเดิม *"  />
    	</div>
  </div>
  
   
   <div class="form-group">
   <span id="sprypassword3">
    	<label for="inputEmail3" class="col-sm-3 control-label">รหัสผ่านใหม่:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="password" name="newPass" placeholder="รหัสผ่านใหม่ *"  />
            <span class="passwordRequiredMsg">กรุณากรอกข้อมูล.</span></span>
    	</div>
  </div>
   <div class="form-group">
   <span id="spryconfirm1">
    	<label for="inputEmail3" class="col-sm-3 control-label">ยืนยันรหัสผ่าน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="password" name="Add_menu" placeholder="ยืนยันรหัสผ่านใหม่ *"  />
            <span class="confirmRequiredMsg">กรุณากรอกข้อมูล.</span><span class="confirmInvalidMsg">รหัสผ่านไม่ตรง.</span></span>
    	</div>
  </div>
  
   
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
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