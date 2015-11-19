<div class="alert alert-success">
  <strong><h5 align="center">ข้อมูลของเจ้าร้านอาหาร</h5></strong>
</div>  
 <?php
 	//Pageignation 
	$pagic = "?page=listres_admin";
    $sql = "SELECT COUNT(res_id) FROM restaurant";
    $query = mysql_query($sql);
    $row = mysql_fetch_row($query);
    // Here we have the total row count
    $rows = $row[0];
    // This is the number of results we want displayed per page
    $page_rows = 10;
    // This tells us the page number of our last page
    $last = ceil($rows/$page_rows);
    // This makes sure $last cannot be less than 1
    if($last < 1){
            $last = 1;
    }
    // Establish the $pagenum variable
    $pagenum = 1;
    // Get pagenum from URL vars if it is present, else it is = 1
    if(isset($_GET['pn'])){
            $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }
    // This makes sure the page number isn't below 1, or more than our $last page
    if ($pagenum < 1) { 
        $pagenum = 1; 
    } else if ($pagenum > $last) { 
        $pagenum = $last; 
    }
    // This sets the range of rows to query for the chosen $pagenum
    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
    // This is your query again, it is for grabbing just one page worth of rows by applying $limit
    $sql = "SELECT * FROM restaurant ORDER BY res_id DESC $limit";
    $query = mysql_query($sql);
    // This shows the user what page they are on, and the total number of pages
    $textline1 = "จำนวน(<b>$rows</b>)";
    $textline2 = "Laman <b>$pagenum</b> Dari semua <b>$last</b>";
    // Establish the $paginationCtrls variable
    $paginationCtrls = '';
    // If there is more than 1 page worth of results
    if($last != 1){
            /* First we check if we are on page one. If we are then we don't need a link to 
               the previous page or the first page so we do nothing. If we aren't then we
               generate links to the first page, and to the previous page. */
            if ($pagenum > 1) {
            $previous = $pagenum - 1;
                    $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$previous.'"><<</a> &nbsp; &nbsp; ';
                    // Render clickable number links that should appear on the left of the target page number
                    for($i = $pagenum-4; $i < $pagenum; $i++){
                            if($i > 0){
                            $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$i.'">'.$i.'</a> &nbsp; ';
                            }
                }
        }
            // Render the target page number, but without it being a link
            $paginationCtrls .= ''.$pagenum.' &nbsp; ';
            // Render clickable number links that should appear on the right of the target page number
            for($i = $pagenum+1; $i <= $last; $i++){
                    $paginationCtrls .= '<a href="'.$pagic.'&&pn='.$i.'">'.$i.'</a> &nbsp; ';
                    if($i >= $pagenum+4){
                            break;
                    }
            }
            // This does the same as above, only checking if we are on the last page, and then generating the "Next"
        if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$pagic.'&&pn='.$next.'">>></a> ';
        }
    }
    $list = '';
 ?>
 
 
<table width="860" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="775"><table width="95%" border="0"  class="table table-hover table-striped">
<tr class="table-bordered">
<td width="277" align="center">ลำดับ</td>
<td width="602"align="center">ชื่อ-นามสกุล</td>
<td width="602"align="center">เลขบัตรประชาชน</td>
<td width="602"align="center">วันเกิด</td>
<td width="602"align="center">สถานะ</td>
<td width="602"align="center">รายละเอียด</td>
</tr>

<?php 
$i=1;     // คำสั่งเพิ่มลำดับ
   while ($result = mysql_fetch_array($query)){      //คำสั้งวนซ้ำ
    
  ?>
 
 <tr class="table-bordered">
<td width="277" align="center"><?=$i?></td>
<td width="602" align="center"><?=$result['res_name']?></td>
<td width="602" align="center"><?=$result['res_card']?></td>
<td width="602"align="center"><?=$result['res_day']?></td>
<td width="602"align="center">
	<?php
		$status = $result['register_status'];
		if($status == '1'){
			echo "ยืนยันแล้ว";
			}else{
				echo "ยังไม่ยืนยัน"
;				}
	?>
</td>
<td width="602"align="center"><a href="?page=resdata_admin&res_id=<?=$result['res_id']?>">ข้อมูล....>></a></td>
</tr>

<?php
$i++;
	}
  ?> 
  <table/>
 <div class align="center"="pagination"><?php echo $paginationCtrls; ?></div>
 
 
  