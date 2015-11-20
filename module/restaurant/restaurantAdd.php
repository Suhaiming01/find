<style>
      #map_canvas {
        height: 400px;
		width:700px;
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOO7sPpQq0vroi7cvVhtndHM7MUhBhRrk&callback=initMap"
        async defer></script>
    
    <script>
	var marker, myCircle, map;
      function initialize() {
        var myLatlng = new google.maps.LatLng(6.362362, 101.4469157);
        var mapOptions = {
          zoom: 8,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map_canvas'), 
            mapOptions);

        google.maps.event.addListener(map, 'click', function(event){
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();

                document.getElementById("lat").value = event.latLng.lat().toFixed(6);
                document.getElementById("lon").value = event.latLng.lng().toFixed(6);

            addMarker(clickLat,clickLon);
           // alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
        });
      }

      function addMarker(clickLat,clickLon){       
        //clear the previous marker and circle.
        if(marker != null){
            marker.setMap(null);
           // myCircle.setMap(null);
        }

        
                


        marker = new google.maps.Marker({
            position: new google.maps.LatLng(clickLat,clickLon),
            map: map,
            draggable:false
        });


        
        //circle options.
        var circleOptions = {
            map: map,
            center: latLng,
           // radius: 3000
          };
         //create circle
        myCircle = new google.maps.Circle(circleOptions);

        //when marker has completed the drag event 
        //recenter the circle on the marker.
        google.maps.event.addListener(marker, 'dragend', function(){
            myCircle.setCenter(this.position);
        });     
    }
	</script>
    
    
  </header>
  <body onLoad="initialize()">
  
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
      		<input class="form-control input-sm"  type="text" name="Add_name" placeholder="ชื่อร้านอาหาร"  />
    	</div>
        <a style="color:#F00">*</a>
  </div>
  
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ประเภทร้าน:</label>
    	<div class="col-sm-3">
      		<select class="form-control input-sm" type="text" name="Add_type">
                 <option value="ประเภทร้าน">==ประเภทร้านอาหาร==</option>
                 <option value="ร้านอาหารในโรงเเรม รีสอร์ท">ร้านอาหารในโรงเเรม รีสอร์ท</option>
                 <option value="ร้านเค้กเเละเบเกอรี่">ร้านเค้กเเละเบเกอรี่</option>
                 <option value="ร้านชา/กาเเฟ">ร้านชา/กาเเฟ</option>
                 <option value="ร้านรถเข็น/เเผงลอย">ร้านรถเข็น/เเผงลอย</option>
                 <option value="ร้านอาหารจัดส่ง">ร้านอาหารจัดส่ง</option>
                 <option value="ร้านเเวะพักซื้อของฝาก">ร้านเเวะพักซื้อของฝาก</option>
                 <option value="ร้านอาหารทั่วไป">ร้านอาหารทั่วไป</option>   
			</select>
    	</div>
        <a style="color:#F00">*</a>
  </div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เลขทะเบียน:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_Registration" placeholder="เลขทะเบียนการค้า"/>
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">แนบไฟล์:</label>
    	
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="Add_Registration_file[]" placeholder="เลขทะเบียนการค้า " multiple/>
    	</div>
        <a style="color:#F00">*</a>
  	</div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสฮาลาล :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_halal" placeholder="เลขรหัสฮาลาล"  />
    	</div>
        <a style="color:#F00">*</a>
  	</div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รูปภาพ:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="file" name="book_picture[]" multiple>
    	</div>
        <a style="color:#F00">*</a>
  </div>
   <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">บ้านเลขที่:</label>
    	<div class="col-sm-3">
        <input class="form-control input-sm" type="text"name="Add_house" placeholder="บ้านเลขที่"  />
            
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ถนน/ซอย :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_road" placeholder="ถนน/ซอย *"  />
    	</div>
 <a style="color:#F00">*</a>
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
 <a style="color:#F00">*</a>
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
        <a style="color:#F00">*</a>
	</div>
  	<div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รหัสไปษณีย์:</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="zipcode" id="zipcode" placeholder="รหัสไปษณีย์ *"  />
    	</div>
        <a style="color:#F00">*</a>
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
        <a style="color:#F00">*</a>
</div> 
 <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">จำนวนที่นั่ง :</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" name="Add_seat" placeholder="จำนวนที่นั่ง *" />
    	</div>
        <a style="color:#F00">*</a>
        </div>
  <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">รายละเอียดร้าน:</label>
    	<div class="col-sm-6">
      		<textarea name="Add_Description" rows="4"  class="form-control" id="comment"></textarea>
    	</div>
        <a style="color:#F00">*</a>
        </div>
         <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">เว็บไซต์ :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text"  name="Add_web" placeholder="เว็บไซต์  *"  />
    	</div>
        <a style="color:#F00">*</a>
        </div>
        
        <div class="form-group">
    		<label for="inputEmail3" class="col-sm-2 control-label">หมายเหตุ:</label>
            <div class="col-sm-6">
                <textarea class="form-control" rows="4" id="comment" name="Add_Notes" ></textarea>
            </div>
            <a style="color:#F00">*</a>
        </div>
            
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">แผนที่:</label>
    	<div class="col-sm-10">
      		<div id="map_canvas"></div>
    	</div>
        
    </div> 
    
    
       <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">ละติจูล  :</label>
    	<div class="col-sm-3">
      		<input class="form-control input-sm" type="text" id='lat' name="Add_lotitude" placeholder="ละติจูล *"  />
    	</div>
        <label for="inputEmail3" class="col-sm-2 control-label">ลองติจูล:</label>
        <div class="col-sm-3">
      		<input class="form-control input-sm" type="text" id='lon' name="Add_longititude" placeholder="ลองติจูล *"  />
    	</div>
        <a style="color:#F00">*</a>
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
    </body>

  