<?php
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
	 
	extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
                $file_name=$_FILES["files"]["Add_Registration_file"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                if(in_array($ext,$extension))
                {
                    if(!file_exists("photo_gallery/".$txtGalleryName."/".$file_name))
                    {
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$file_name);
                    }
                    else
                    {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"photo_gallery/".$txtGalleryName."/".$newFileName);
                    }
                }
                else
                {
                    array_push($error,"$file_name, ");
                }
            }
?>
