<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
<?PHP

include  'connectdb.php';
 $add_id = $_POST ['add_id'];
 $Add_name = $_POST ['Add_name'];
 $Add_type = $_POST ['Add_type'];
 $Add_Registration = $_POST ['Add_Registration'];
 $Add_halal = $_POST ['Add_halal'];
 $Add_house = $_POST ['Add_house'];
 $Add_road = $_POST ['Add_road'];
 $Add_mu = $_POST ['Add_mu'];
 $Add_district = $_POST ['Add_district'];
 $Add_canton = $_POST ['Add_canton'];
 $Add_province = $_POST ['Add_province'];
 $Add_post = $_POST ['Add_post'];
 $Add_lotitude = $_POST ['Add_lotitude'];
 $Add_longititude = $_POST ['Add_longititude'];
 $Add_time = $_POST ['Add_time'];
 $Add_seat = $_POST ['Add_seat'];
 $Add_table = $_POST ['Add_table'];
 $Add_Description = $_POST ['Add_Description'];
 $Add_web = $_POST ['Add_web'];
 $Add_Notes = $_POST ['Add_Notes'];


 $sql= "insert into add_restaurant (add_id,add_type_res,add_Registration,add_halal,add_House,add_road,add_mu,add_district,add_conton,add_province,add_post,add_latitude,add_longititude,add_time,add_seat,add_table,add_Description,add_web,add_Notes,add_name)
VALUES('$add_id','$Add_name','$Add_type','$Add_Registration','$Add_halal','$Add_house','$Add_road','$Add_mu','$Add_dstrict','$Add_canton','$Add_province','$Add_post','$Add_lotitude','$Add_longititude','$Add_time','$Add_seat','$Add_table','$Add_Description','$Add_web','$Add_Notes')";

$qr = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
if($qr)

{
	echo "<h2 style='color:#CC0066;'>คุณได้เพิ่มเมนูอาหารเรียบร้อย</h2>";
	header("refresh:2;url:listuser.php");
	}else{
		echo"<h2>พบปัญหา คุณไม่สามารถเพิ่มเจ้าของร้านอาหารได้</h2>";
		}

?>
<p>
ชื่อร้านอาหาร : <?=$Add_name?>  <br /> 
ประเภทร้าน : <?=$Add_type?> <br />
เลขทะเบียนการค้า : <?=$Add_Registration?> <br />
รหัสฮาลาล: <?=$Add_halal?> <br />
บ้านเลขที่:<?=$Add_house?> <br />
ถนน/ซอย: <?=$Add_road?> <br />
บ้านเลขที่:<?=$Add_house?> <br />
หมู่ที่: <?=$Add_mu ?> <br />
ตำบล:<?=$Add_district ?> <br />
อำเภอ: <?=$Add_canton?> <br />
จังหวัด:<?=$Add_province?> <br />
รหัสไปษณีย์: <?=$Add_post ?> <br />
ละติจูล:<?=$Add_lotitude ?> <br />
ลองติจูล:<?=$Add_longititude?> <br />
เวลาเปิดบริการ: <?=$Add_time  ?> <br />
จำนวนที่นั่ง:<?=$Add_seat ?> <br />
จำนวนโต๊ะ:<?=$Add_table?> <br />
รายละเอียดร้าน: <?=$Add_Description ?> <br />
เว็บไซต์:<?=$Add_web ?> <br />
หมายเหตุ:<?=$Add_Notes ?> <br />  
  </p>
  
  </div>
   <?PHP include("footer.php");?>
</div>

</body>
</html>

<div class=" col-md-8">
<div class="panel panel-success">
  <div class="panel-body">
  เนื้อหา
  </div>
  
</div>
</div>