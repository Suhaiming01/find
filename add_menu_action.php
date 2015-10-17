<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
 <div id="content">
<?PHP

include  'connectdb.php';
 $add_menu_id = $_POST ['add_menu_id'];
 $Add_menu = $_POST ['Add_menu'];
 $Add_type_menu = $_POST ['Add_type_menu'];
 $Add_Description =$_POST ['Add_Description'] ;
 $Add_price = $_POST ['Add_price'];
 
$sql= "insert into add_menu (add_menu_id,add_menu,add_type_menu,add_Description,add_price) VALUES('$add_menu_id','$Add_menu','$Add_type_menu','$Add_Description','$Add_price ')";


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
<table width="401" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td width="120" height="37" align="right" class="btn-link">ชื่อร้านอาหาร:</td>
    <td width="278">&nbsp;</td>
  </tr>
  <tr>
    <td height="38" align="right"class="btn-link">ชื่อเมนูอาหาร:</td>
    <td align="center"><?=$Add_menu?></td>
  </tr>
  <tr>
    <td height="38" align="right"class="btn-link">ประเภทอาหาร:</td>
    <td align="center"><?=$Add_type_menu?></td>
  </tr>
  <tr>
    <td height="38" align="right"class="btn-link">รายละเอียด:</td>
    <td align="center"><?=$Add_Description?></td>
  </tr>
  <tr>
    <td height="38" align="right"class="btn-link">ราคา:</td>
    <td align="center"><?=$Add_price?></td>
  </tr>
</table>
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