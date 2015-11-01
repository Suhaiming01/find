<?php
	$id = $_SESSION["cus_user1"];

?>

<p>เพิ่มเมนูอาหาร</p>
    <p>* สัญลักษณ์เครื่องหมายดอกจัน คือ ข้อมูลที่จำเป็นต้องระบุ</p>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=addmenu_Save">	
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อเมนูอาหาร:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Add_menu" placeholder="ชื่อเมนูอาหาร *"  />
    	</div>
  </div>
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รูปภาพ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="book_picture[]" multiple>
    	</div>
  </div>
  
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ประเภทอาหาร:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Add_type_menu">
                 <option value="ประเภทอาหาร">ประเภทอาหาร</option>
                 <option value="อาหารจานเดียว">อาหารจานเดียว</option>
                 <option value="อาหารคาว">อาหารคาว</option>
                 <option value="อาหารเฉพาะกลุ่ม">อาหารเฉพาะกลุ่ม</option>
                 <option value="อาหารหวาน">อาหารหวาน</option>
                 <option value="เบเกอรี่">เบเกอรี่</option>
                    </select>
    	</div>
  </div>
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รายละเอียด:</label>
    	<div class="col-sm-5">
      		<textarea name="Add_Description" rows="4"  class="form-control" id="comment"></textarea>
    	</div>
        </div>
        
         <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ราคา :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_price" placeholder="ราคา  *"  />
    	</div>
        </div>
   
   		<input type="hidden" name="id" value="<?= $id ?>" />
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
             	<button type="submit" class="btn btn-primary">บันทึก</button>
                 <button type="reset" class="btn btn-primary">ยกเลิก</button>
                 
            </div>
  		</div>
</form>
 