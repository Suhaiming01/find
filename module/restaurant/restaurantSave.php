<?php
            $id = $_GET["id"];
            $add_restaurant = mysql_query("SELECT * FROM add_restaurant WHERE add_id='$id'");
            $rowadd_restaurant = mysql_fetch_array($add_restaurant);
			
			$resimage = mysql_query("SELECT * FROM resimage WHERE add_id='$id' and type='2'");
?>

<style>
      #map_canvas {
        height: 400px;
		width:600px;
      }
    </style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiRqDUY4KSI3Wo6iAMp_SqR2FRXet0bP4" type="text/javascript"></script>
 		<script type="text/javascript">
 			
			var center = null;
 			var map = null;
 			var currentPopup;
 			var bounds = new google.maps.LatLngBounds();
 			function addMarker(lat, lng) {

 			var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/red.png",
 			new google.maps.Size(32, 32), new google.maps.Point(0, 0),
 			new google.maps.Point(16, 32));
 		
 				var pt = new google.maps.LatLng(lat, lng);
 				bounds.extend(pt);
 				var marker = new google.maps.Marker({
 					position: pt,
 					icon: icon,
 					map: map
 				});
 				var popup = new google.maps.InfoWindow({
 				content: info1,
 				maxWidth: 300
 				});
 			google.maps.event.addListener(marker, "click", function() {
 				if (currentPopup != null) {
 					currentPopup.close();
					currentPopup = null;
 				}
 				popup.open(map, marker);
 				currentPopup = popup;
 			});
 			google.maps.event.addListener(popup, "closeclick", function() {
 			map.panTo(center);
 			currentPopup = null;
 			});
 			}
 			function initMap() {
 				map = new google.maps.Map(document.getElementById("map_canvas"), {
 				center: new google.maps.LatLng(6.75831, 101.32321),
 				zoom: 10,
 				mapTypeId: google.maps.MapTypeId.ROADMAP,
 				mapTypeControl: true,
 				mapTypeControlOptions: {
 				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
 				},
 				navigationControl: true,
 				navigationControlOptions: {
 				style: google.maps.NavigationControlStyle.SMALL
 				}
 				});
 			
 			


 		addMarker(<?=$rowadd_restaurant['add_latitude']?>, <?=$rowadd_restaurant['add_longititude']?>);
 		
 			
 			map.setTilt(45);
 			center = bounds.getCenter();
 			map.fitBounds(bounds);
 
 			}
</script>
		
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
<td width="775"><table width="95%" border="0" class="table table-bordered table-striped">
<tr class="table-bordered">
  
    <td width="30%" height="24" align="right">รูปภาพร้านอาหาร:</td>
    
    <td width="70%"align="left">
   <?php
   	while($rowresimage = mysql_fetch_array($resimage)){
   ?>
   <img src="resimage/<?= $rowresimage["name"];?>" class="img-rounded" width="110px" height="140px">&nbsp;
   <?php
	}
   ?>
    </td>
  </tr>
   <tr>
    <td height="23" align="right">ชื่อร้านอาหาร:</td>
    <td><?=$rowadd_restaurant['add_name']?></td>
  </tr>
   <tr>
    <td height="23" align="right">ประเภทร้านอาหาร:</td>
    <td><?= $rowadd_restaurant['add_type_res']?></td>
  </tr>
  <tr>
    <td height="23" align="right">เลขทะเบียนการค้า :</td>
    <td><?= $rowadd_restaurant['add_Registration']?></td>
  </tr>
  <tr>
    <td height="24" align="right">รหัสฮาลาล :</td>
    <td><?=$rowadd_restaurant['add_halal']?></td>
  </tr>
  <tr>
    <td height="24" align="right"> บ้านเลขที่ :</td>
    <td><?= $rowadd_restaurant['add_House'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">ถนน/ซอย:</td>
    <td><?=$rowadd_restaurant['add_road']?></td>
  </tr>
   <tr>
    <td height="22" align="right">หมู่ที่ :</td>
    <td><?=$rowadd_restaurant['add_mu']?></td>
  </tr>
  <tr>
    <td height="24" align="right">ตำบล :</td>
    <td><?=$rowadd_restaurant['district']?></td>
  </tr>
  <tr>
    <td height="24" align="right">อำเภอ:</td>
    <td><?= $rowadd_restaurant['amphoe'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">จังหวัด :</td>
    <td><?=$rowadd_restaurant['province']?></td>
  </tr>
   <tr>
    <td height="22" align="right">รหัสไปษณีย์ :</td>
    <td><?=$rowadd_restaurant['zipcode']?></td>
  </tr>
  <tr>
    <td height="24" align="right">วันเปิดบริการ :</td>
    <td><?=$rowadd_restaurant['add_time']?></td>
  </tr>
  <tr>
    <td height="24" align="right">เวลาเปิดบริการ :</td>
    <td><?= $rowadd_restaurant['add_Day'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">จำนวนที่นั่ง :</td>
    <td><?=$rowadd_restaurant['add_seat']?></td>
  </tr>
   <tr>
    <td height="22" align="right">รายละเอียด :</td>
    <td><?=$rowadd_restaurant['add_Description']?></td>
  </tr>
  <tr>
    <td height="24" align="right">เว็บไซต์ :</td>
    <td><?= $rowadd_restaurant['add_web'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">หมายเหตุ :</td>
    <td><?=$rowadd_restaurant['add_Notes']?></td>
  </tr>
  <tr>
    <td height="24" align="right">ละติจูล :</td>
    <td><?= $rowadd_restaurant['add_latitude'] ?></td>
  </tr>
  <tr>
    <td height="22" align="right">ลองติจูล :</td>
    <td><?=$rowadd_restaurant['add_longititude']?></td>
  </tr>
  <tr>
    <td height="22" align="right">เเผนที่ :</td>
    <td><div id="map_canvas"></div></td>
  </tr>
  
     </table>
     
      <ul class="pager">
  <li class="previous"><a href="?page=main">ถอยกลับ</a></li>
  </ul>
  
  