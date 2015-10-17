<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<head>

 <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
<style>
      
      #map {
        height: 400px;
		width: 200px;
      }
    </style>

</head>
<body>
<div class=" col-md-14">
<div class="panel panel-success">
<p>
    

  <!-----เงื่อนไข-!--->
 <h4>อัพเดทข้อมูลร้านอาหาร</h4>
<p><img src="images/uiue.png" alt="" width="192" height="44" />
<p>  <img src="images/uiuei.png" alt="" width="558" height="30" />  
  <p>*จำเป็นต้องกรอบ</p>
   <div class="col-md-4">
    <form a action="add_restaurant_action.php" method="post" class="navbar-form navbar-left" role="search">
<table width="839" height="1113" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="39" align="right">ชื่อร้านอาหาร:</td>
    <td>
     <input class= type="text" name="Add_name" placeholder="ชื่อร้านอาหาร *" required /></td>
     <tr>
    <td height="39" align="right">ประเภทร้าน:</td>
    <td>
     <select class="input-sm" type="text" name="Add_type">
     <option value="ร้านอาหารในโรงเเรม รีสอร์ท">ร้านอาหารในโรงเเรม รีสอร์ท</option>
     <option value="ร้านเค้กเเละเบเกอรี่">ร้านเค้กเเละเบเกอรี่</option>
     <option value="ร้านชา/กาเเฟ">ร้านชา/กาเเฟ</option>
     <option value="ร้านรถเข็น/เเผงลอย">ร้านรถเข็น/เเผงลอย</option>
     <option value="ร้านอาหารจัดส่ง">ร้านอาหารจัดส่ง</option>
     <option value="ร้านเเวะพักซื้อของฝาก">ร้านเเวะพักซื้อของฝาก</option>
     <option value="ร้านอาหารทั่วไป">ร้านอาหารทั่วไป</option>
    
</select></td>
  <tr>
    <td height="39" align="right"> เลขทะเบียน:</td>
    <td>
     <input class= type="text" name="Add_Registration" placeholder="เลขทะเบียนการค้า *" required />
     
     </td>
   
    <td width="74" align="right"> รหัสฮาลาล:</td>
    <td width="120"><input class= type="text" name="Add_halal" placeholder="เลขรหัสฮาลาล *" required /></td>
  <tr>
 <td width="148" height="46" align="right">รูปภาพ[1]:</td>
    <td width="306"><input type="file"name="book_picture"</td>
    
    </tr>
     <tr>
    <td height="46" align="right">รูปภาพ[2]:</td>
    <td><input type="file"name="book_picture"</td>
    
    </tr>
    <tr>
    <td height="46" align="right">รูปภาพ[3]:</td>
    <td><input type="file"name="book_picture"</td>
    
    </tr>
     <tr>
    <td height="46" align="right">รูปภาพ[4]:</td>
    <td><input type="file"name="book_picture"</td>
    
    </tr>
  <tr>
    <td height="39" align="right">บ้านเลขที่:</td>
    <td>
     <input class= type="text" name="Add_house" placeholder="บ้านเลขที่ *" required /></td>
   
    <td width="74" align="right"> ถนน/ซอย:</td>
    <td width="120"><input class= type="text" name="Add_road" placeholder="ถนน/ซอย *" required /></td>
    <td width="66" align="right">หมู่ที่:</td>
    <td width="121"><input class= type="text" name="Add_mu" placeholder="หมู่ที่ *" required /></td>
  </tr>
  <tr>
    <td height="43" align="right">ตำบล:</td>
    <td><input class= type="text" name="Add_district" placeholder="ตำบล *" required /></td>
    <td align="right">อำเภอ:</td>
    <td><input class= type="text" name="Add_canton" placeholder="อำเภอ *" required /></td>
   
  </tr>
  <tr>
    <td height="36" align="right">จังหวัด:</td>
    <td><input class= type="text" name="Add_province" placeholder="จังหวัด *" required /></td>
    <td align="right">รหัสไปษณีย์:</td>
    <td><input class= type="text" name="Add_post" placeholder="รหัสไปษณีย์ *" required /></td>
    
  </tr>
  <tr>
    <td height="34" align="right">ร้านอาหารที่ตั่ง:</td>
    <td align="center"><a href="add_restaurant.php">เเสดงเเผนที่</a></td>
    <td align="center"></td>
   
  </tr>
  <tr>
    <td></td>
    <td id="map" colspan="5">&nbsp;</td>
    
   
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 6.237006, lng: 101.243813},
    zoom: 5
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiRqDUY4KSI3Wo6iAMp_SqR2FRXet0bP4&callback=initMap"
        async defer></script>
    
    
    <td width="4" colspan="3">&nbsp;</td>
    
  </tr>
  <tr>
    <td height="46" align="right">ละติจูล:</td>
    <td><input class= type="text" name="Add_lotitude" placeholder="ละติจูล *" required /></td>
    <td align="right">ลองติจูล:</td>
    <td><input class= type="text" name="Add_longititude" placeholder="ลองติจูล *" required /></td>
    
    </tr>
     <tr>
    <td height="43" align="right">เวลาเปิดบริการ:</td>
    <td>
  <input class= type="text" name="Add_time" placeholder="วันเวลาเปิดบริการ*" required /></td>
   
    <td width="74" align="right"> จำนวนที่นั่ง:</td>
    <td width="120"><input class= type="text" name="Add_seat" placeholder="จำนวนที่นั่ง *" required /></td>
    <td width="66" align="right">จำนวนโต๊ะ :</td>
    <td width="121"><input class= type="text" name="Add_table" placeholder="จำนวนโต๊ะ*" required /></td>
  </tr>
   <tr>
    <td height="73" align="right">รายละเอียดร้าน:</td>
    <td><textarea name="Add_Description" rows="3" required class="form-control" id="comment"></textarea>
    </td>
   
     <tr>
    <td height="40" align="right">เว็บไซต์:</td>
    <td><input class= type="text" name="Add_web" placeholder="เว็บไซต์  *" required /></td>
    <tr>
    <td height="96" align="right">หมายเหตุ:</td>
    <td><textarea class="form-control" rows="3" id="comment" name="Add_Notes" required></textarea></td>
   
    </tr>
    <tr>
    <td height="36" align="left"><button class="btn btn-default" type="submit">บันทึก</button>
    <td colspan="3" align="left"><button class="btn btn-default" type="submit">ยกเลิก</button>
    
  </tr>
    
    
  
  
</table>

 
   </div>
     
     
     
     <table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775">&nbsp;</td>


 
</div>
  </div>
  </body>
 