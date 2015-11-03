  
   <h4>ข้อมูลของร้านอาหาร</h4>
  
  <?php
 $sql= "select * from restaurant  where res_id ";
 $q = mysql_query($sql);
  $num =  mysql_num_rows($q);
 ?>
 
  <table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-hover table-striped">
<tr class="table-bordered">
<td width="277" align="center">ลำดับ</td>
<td width="602"align="center">ชื่อ-นามสกุล</td>
<td width="602"align="center">เลขบัตรประชาชน</td>
<td width="602"align="center">วันเกิด</td>
<td width="602"align="center">รายละเอียด</td>
</tr>

<?php
$i=1;
   while ($result = mysql_fetch_array($q)){
    
  ?>
 
 <tr class="table-bordered">
<td width="277" align="center"><?=$i?></td>
<td width="602" align="center"><?=$result['res_name']?></td>
<td width="602" align="center"><?=$result['res_card']?></td>
<td width="602"align="center"><?=$result['res_day']?></td>
<td width="602"align="center"><a href="?page=resdata_admin&res_id=<?=$result['res_id']?>">ข้อมูล....>></a></td>
</tr>

<?php
$i++;
	}
  ?> 
  <table/>
 <p>มีสมาชิกทั้งหมด <?=$num?> คน</p>
  <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>