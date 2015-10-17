<?php
	$id = $_SESSION["cus_user1"];
	$sql = mysql_query("SELECT * FROM add_restaurant WHERE res_id='$id'");
	$check = mysql_fetch_array($sql);
	
	if($check[0] < 1){
		echo "Anda belum ada data";
		}else{
?>
	<table class="table table-bordered">
    	<tr>
        	<td>Nama</td>
            <td>Namacsc</td>
        </tr>
    
<?php
	while($row = mysql_fetch_array($sql)){
?>
		<tr>
			<td><?= $row['add_name'] ?></td>
    		<td><?= $row['add_name'] ?></td>
		</tr>
<?php 
	}
}
 ?>
 </table>