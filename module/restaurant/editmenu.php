<?php
    $add_menu_id=$_GET['add_menu_id'];
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_menu WHERE res_id='$id'");
	$row = mysql_fetch_array($sql);
	
	echo $id;
?>

<p>เพิ่มเมนูอาหาร</p>
    <p>* สัญลักษณ์เครื่องหมายดอกจัน คือ ข้อมูลที่จำเป็นต้องระบุ</p>
 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=editmenuSave">	
  
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อเมนูอาหาร:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Add_menu"  value="<?= $row['add_menu'] ?>" />
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
                 <option value="อาหารจานเดียว" <?=$row['add_type_menu'] == 'อาหารจานเดียว' ? ' selected="selected"' : ''?>>อาหารจานเดียว</option>
                 <option value="อาหารคาว" <?=$row['add_type_menu'] == 'อาหารคาว' ? ' selected="selected"' : ''?>>อาหารคาว</option>
                 <option value="อาหารเฉพาะกลุ่ม" <?=$row['add_type_menu'] == 'อาหารเฉพาะกลุ่ม' ? ' selected="selected"' : ''?>>อาหารเฉพาะกลุ่ม</option>
                 <option value="อาหารหวาน" <?=$row['add_type_menu'] == 'อาหารหวาน' ? ' selected="selected"' : ''?>>อาหารหวาน</option>
                 <option value="เบเกอรี่" <?=$row['add_type_menu'] == 'เบเกอรี่' ? ' selected="selected"' : ''?>>เบเกอรี่</option>
                    </select>
    	</div>
  </div>
  
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รายละเอียด:</label>
    	<div class="col-sm-5">
      		 <textarea class="form-control" rows="4" id="comment" name="Add_Description"> <?=$row['add_Description']?></textarea>
    	</div>
        </div>
        
         <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ราคา :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_price" value="<?= $row['add_price'] ?>" />
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

 
