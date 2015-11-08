<style>
      #map {
        height: 400px;
		width:520px;
      }
    </style>
  <header>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="author" content="Earthchie www.earthchie.com" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="thaidb/thaidb.js"></script>
    <script type="text/javascript" src="thaidb/thaidb.min.js"></script>
  </header>
<!-----เงื่อนไข-!--->
<div class="alert alert-success">
  <strong><align="center">เพิ่มข้อมูลร้านอาหาร</strong>* สัญลักษณ์เครื่องหมายดอกจัน คือ ข้อมูลที่จำเป็นต้องระบุ
</div>
<p><img src="images/uiue.png" alt="" width="192" height="44" />
<p><img src="images/uiuei.png" alt="" width="558" height="30" />  
<p>*จำเป็นต้องกรอบ</p>
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="?page=restaurantAddSave">	
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ชื่อร้านอาหาร:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm"  type="text" name="Add_name" placeholder="ชื่อร้านอาหาร *"  />
    	</div>
  </div>
  
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ประเภทร้าน:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Add_type">
                 <option value="ร้านอาหารในโรงเเรม รีสอร์ท">ร้านอาหารในโรงเเรม รีสอร์ท</option>
                 <option value="ร้านเค้กเเละเบเกอรี่">ร้านเค้กเเละเบเกอรี่</option>
                 <option value="ร้านชา/กาเเฟ">ร้านชา/กาเเฟ</option>
                 <option value="ร้านรถเข็น/เเผงลอย">ร้านรถเข็น/เเผงลอย</option>
                 <option value="ร้านอาหารจัดส่ง">ร้านอาหารจัดส่ง</option>
                 <option value="ร้านเเวะพักซื้อของฝาก">ร้านเเวะพักซื้อของฝาก</option>
                 <option value="ร้านอาหารทั่วไป">ร้านอาหารทั่วไป</option>   
			</select>
    	</div>
  </div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เลขทะเบียน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_Registration" placeholder="เลขทะเบียนการค้า *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">แนบไฟล์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="Add_Registration_file[]" placeholder="เลขทะเบียนการค้า *" multiple/>
    	</div>
  	</div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสฮาลาล :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_halal" placeholder="เลขรหัสฮาลาล *"  />
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
      		<input class="form-control input-sm" type="text"name="Add_house" placeholder="บ้านเลขที่ *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ถนน/ซอย :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_road" placeholder="ถนน/ซอย *"  />
    	</div>
 
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">หมู่ที่ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_mu" placeholder="หมู่ที่ *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ตำบล:</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="district" id="district" placeholder="ตำบล *"  />
    	</div>
 
 </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">อำเภอ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="amphoe" id="amphoe" placeholder="อำเภอ *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">จังหวัด :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="province" id="province" placeholder="จังหวัด *"  />
    	</div>
	</div>
  	<div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสไปษณีย์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="zipcode" id="zipcode" placeholder="รหัสไปษณีย์ *"  />
    	</div>
    </div> 

 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">วันเปิดบริการ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_time" placeholder="วันเปิดบริการ*"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">เวลาเปิดบริการ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_Day" placeholder="เวลาเปิดบริการ*"  />
        
    	</div>
</div> 
 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">จำนวนที่นั่ง :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_seat" placeholder="จำนวนที่นั่ง *" />
    	</div>
        </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รายละเอียดร้าน:</label>
    	<div class="col-sm-6">
      		<textarea name="Add_Description" rows="4"  class="form-control" id="comment"></textarea>
    	</div>
        </div>
         <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เว็บไซต์ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_web" placeholder="เว็บไซต์  *"  />
    	</div>
        </div>
        
        <div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">หมายเหตุ:</label>
            <div class="col-sm-6">
                <textarea class="form-control" rows="4" id="comment" name="Add_Notes" ></textarea>
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
      		<input class="form-control input-sm" type="text" name="Add_lotitude" placeholder="ละติจูล *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ลองติจูล:</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_longititude" placeholder="ลองติจูล *"  />
    	</div>
</div>
</br>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
            
             	 <button type="submit" class="btn btn-primary">บันทึก</button>
                 <button type="reset" class="btn btn-primary">ยกเลิก</button>
                
            </div>
  		</div>
</form>
    <script>
	
		ThaiDB(); // เรียกใช้งาน
		
		/* วิธีเรียกใช้งานแบบกำหนดค่าเอง, ทำแคชฐานข้อมูลล่วงหน้า
		
		// แบบกำหนด selector เองได้ว่า field ไหนอยู่ที่ไหน
		// preload() คือสั่งให้ดาวน์โหลด Database มาแคชไว้ล่วงหน้าเลย (ปกติจะโหลดฐานข้อมูลเฉพาะตอนที่จะใช้เท่านั้น)
		
		ThaiDB({
			district: '[name="district"]',
			amphoe: '[name="amphoe"]',
			province: '[name="province"]',
			zipcode: '[name="zipcode"]'
		}).preload();
		
		*/
	</script>

  