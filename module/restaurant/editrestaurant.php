<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_restaurant WHERE res_id='$id'");
	$row = mysql_fetch_array($sql);
	
	echo $id;
?>

<!-----เเก้ร้านอาหาร-!--->
<style>
      #map {
        height: 400px;
		width:520px;
      }
    </style>
<!-----เเก้ร้านอาหาร-!--->
<h4>อัพเดทข้อมูลร้านอาหาร</h4>
<p><img src="images/uiue.png" alt="" width="192" height="44" />
<p><img src="images/uiuei.png" alt="" width="558" height="30" />  
<p>*จำเป็นต้องกรอบ</p>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=editrestaurantSave">	
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อร้านอาหาร:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Add_name" value="<?= $row['add_name'] ?>" />
    	</div>
  </div>
  
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ประเภทร้าน:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Add_type">
                 <option value="ร้านอาหารในโรงเเรม รีสอร์ท" <?=$row['add_type_res'] == 'ร้านอาหารในโรงเเรม รีสอร์ท' ? ' selected="selected"' : ''?>>ร้านอาหารในโรงเเรม รีสอร์ท</option>
                 <option value="ร้านเค้กเเละเบเกอรี่" <?=$row['add_type_res'] == 'ร้านเค้กเเละเบเกอรี่' ? ' selected="selected"' : ''?>>ร้านเค้กเเละเบเกอรี่</option>
                 <option value="ร้านชา/กาเเฟ" <?=$row['add_type_res'] == 'ร้านชา/กาเเฟ' ? ' selected="selected"' : ''?>>ร้านชา/กาเเฟ</option>
                 <option value="ร้านรถเข็น/เเผงลอย" <?=$row['add_type_res'] == 'ร้านรถเข็น/เเผงลอย' ? ' selected="selected"' : ''?>>ร้านรถเข็น/เเผงลอย</option>
                 <option value="ร้านอาหารจัดส่ง" <?=$row['add_type_res'] == 'ร้านอาหารจัดส่ง' ? ' selected="selected"' : ''?>>ร้านอาหารจัดส่ง</option>
                 <option value="ร้านเเวะพักซื้อของฝาก" <?=$row['add_type_res'] == 'ร้านเเวะพักซื้อของฝาก' ? ' selected="selected"' : ''?>>ร้านเเวะพักซื้อของฝาก</option>
                 <option value="ร้านอาหารทั่วไป"  <?=$row['add_type_res'] == 'ร้านอาหารทั่วไป' ? ' selected="selected"' : ''?>>ร้านอาหารทั่วไป</option>   
			</select>
            
    	</div>
  </div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เลขทะเบียน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_Registration" value="<?= $row['add_Registration'] ?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">แนบไฟล์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="Add_Registration_file[]" placeholder="เลขทะเบียนการค้า *" multiple/>
    	</div>
  	</div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสฮาลาล :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_halal"  value="<?=$row['add_halal']?>" /> 
    	</div>
  	</div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รูปภาพ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="book_picture[]" multiple>
    	</div>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">บ้านเลขที่:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"name="Add_house"  value="<?=$row['add_House']?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ถนน/ซอย :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_road"  value="<?=$row['add_road']?>" />
    	</div>
 
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">หมู่ที่ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_mu"  value="<?=$row['add_mu']?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ตำบล:</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_district"  value="<?=$row['add_district']?>" />
    	</div>
 
 </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">อำเภอ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_canton"  value="<?=$row['add_canton']?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">จังหวัด :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_province"  value="<?=$row['add_province']?>" />
    	</div>
	</div>
  	<div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสไปษณีย์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"name="Add_post"  value="<?=$row['add_post']?>" />
    	</div>
    </div> 
    
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">แผนที่:</label>
    	<div class="col-sm-10">
      		<div id="map"></div>
    	</div>
    </div> 
    
    
       <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ละติจูล  :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_lotitude"  value="<?=$row['add_latitude']?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ลองติจูล:</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_longititude"  value="<?=$row['add_longititude']?>" />
    	</div>
</div>
 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">วันเวลาเปิดบริการ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_time"  value="<?=$row['add_time']?>" />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">จำนวนที่นั่ง :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_seat"  value="<?=$row['add_seat']?>" />
    	</div>
</div> 
 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">จำนวนโต๊ะ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_table"  value="<?=$row['add_table']?>" />
    	</div>
        </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รายละเอียดร้าน:</label>
    	<div class="col-sm-5">
      		 <textarea class="form-control" rows="4" id="comment" name="Add_Description"> <?=$row['add_Description']?></textarea>
    	</div>
        </div>
         <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เว็บไซต์ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_web" value="<?=$row['add_web']?>" />
    	</div>
        </div>
        
        <div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">หมายเหตุ:</label>
            <div class="col-sm-5">
                <textarea class="form-control" rows="4" id="comment" name="Add_Notes"> <?=$row['add_Notes']?></textarea>
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
 