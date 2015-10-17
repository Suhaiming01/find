<?PHP
 
 
  $conn = mysql_connect("localhost","root","1234") or die
("อุ๋ย  ไม่สามารถติดต่อฐานข้อมูลได้"); //1

mysql_select_db('srm') or die("โอ๋ย.......จ๋อย"); //2
mysql_query("SET NAMES UTF8");//

?>