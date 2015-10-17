<?php
	 $add_id = $_POST ['add_id'];
	 $Add_name = $_POST ['Add_name'];
	 $Add_type = $_POST ['Add_type'];
	 $Add_Registration = $_POST ['Add_Registration'];
	 $Add_halal = $_POST ['Add_halal'];
	 $Add_house = $_POST ['Add_house'];
	 $Add_road = $_POST ['Add_road'];
	 $Add_mu= $_POST ['Add_mu'];
	 $Add_district= $_POST ['Add_district'];
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


	 $sql= mysql_query( "insert into add_restaurant (add_id,add_type_res,add_Registration,add_halal,add_House,add_road,add_mu,add_district,add_canton,add_province,add_post,add_latitude,add_longititude,add_time,add_seat,add_table,add_Description,add_web,add_Notes,add_name)
	VALUES('$add_id','$Add_type','$Add_Registration','$Add_halal','$Add_house','$Add_road','$Add_mu','$Add_district','$Add_canton','$Add_province','$Add_post','$Add_lotitude','$Add_longititude','$Add_time','$Add_seat','$Add_table','$Add_Description','$Add_web','$Add_Notes','$Add_name')");


echo "ok" ;
?>
