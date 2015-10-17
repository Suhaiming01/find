<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-8">
<div class="panel panel-success">
  <div class="panel-body"><!-----เงื่อนไข-!--->
  
  
    <p>
      <?php
$id = $_GET['cus_id'];
 $sql = "delete from customers where cus_id=$cus_id";
$result = mysql_query($sql);
?>
    </p>
    <p><h4>ได้ลบที่ไอดีที่<?=$cus_id?>เรียบร้อยครับ</h4>
<p>กรุณารอสักครู่ระบบกำลังทำการให้คุณอยู่</p>
</p>


<?php

header("refresh:1;url=listcustomers.php");
//header("location:listcustomers.php");
?>
  </div>
  <!-----เงื่อนไข-!--->
  
 

 </p>
 
   
  </div>
</div>
