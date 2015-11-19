      <div class="panel panel-success" align="center"> 
      <div class= "panel-heading">ข้อมูลการขออนุมัติของเจ้าของร้านอาหาร</div>
      <div class="panel-body">
      </br>
      </br>
      <?php
	  	$sql = mysql_query("SELECT * FROM restaurant WHERE register_status='0'");
		$row = mysql_num_rows($sql);
	  ?>
 <a href="?page=listres_admin"><button type="button" class="btn btn-primary">ขออนุมัติ <span class="badge"><font color="#FF0000"><?= $row ?></font></span></button></a>
    </div>
    </div>

 

 


