<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ทดลอง</title>
<title>การจัดการการฝึกงาน</title>
<link rel="shortcut icon" href="favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="author" content="Earthchie www.earthchie.com" />
<meta name="description" content="" />
<meta name="keywords" content="" />
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="thaidb/thaidb.js"></script>
    <script type="text/javascript" src="thaidb/thaidb.min.js"></script>
</head>
<script language="javascript">
 function chkdata(){<!--chkdata คือ ชื่อ function-->
     with(form1){<!--with คือ การเลือกตำแหน่งซึ่งในที่นี้คือ form1-->
      	  if(Prefixeng.value=='0'){alert('กรุณาเลือก คำนำหน้า ด้วยค่ะ');Prefixeng.focus();
          return false;}
		  if(Std_eng.value==''){alert('กรอก ชื่ออังกฤษ ด้วยค่ะ');Std_eng.focus();
          return false;}
		  if(Level_no.value=='0'){alert('กรุราเลือก ระดับ ด้วยค่ะ');Level_no.focus();
          return false;}
		  if(Groups.value==''){alert('กรอก กลุ่มพื้นฐาน ด้วยค่ะ');Groups.focus();
          return false;}
		  if(Home.value==''){alert('กรอก บ้านเลขที่ ด้วยค่ะ');Home.focus();
          return false;}
		  if(Road.value==''){alert('กรอก ถนน/ซอย ด้วยค่ะ');Road.focus();
          return false;}
		  if(Mu.value==''){alert('กรอก หมู่ ด้วยค่ะ');Mu.focus();
          return false;}
		  if(district.value==''){alert('กรอก ตำบล ด้วยค่ะ');district.focus();
          return false;}
		  if(amphoe.value==''){alert('กรอก อำเภอ ด้วยค่ะ');amphoe.focus();
          return false; }
		  if(province.value=='0'){alert('กรอก จังหวัด ด้วยค่ะ');province.focus();
          return false;}
		  if(zipcode.value==''){alert('กรอก รหัสไปษณีย์ ด้วยค่ะ');zipcode.focus();
          return false;}
		  
		   if(Phonestd.value==''){alert('กรอก เบอร์โทรศัพท์ ด้วยค่ะ');Phonestd.focus();
          return false;}
		   if(Emailstd.value==''){alert('กรอก อีเมลล์ ด้วยค่ะ');Emailstd.focus();
          return false;}
		  
		   if(Emailstd.value==''){alert('กรอก อีเมลล์ ด้วยค่ะ');Emailstd.focus();
          return false;}
		   if(Gender.value==''){alert('เลือก คำนำหน้า ด้วยค่ะ');Gender.focus();
          return false;}
		   if(NameLname.value==''){alert('กรอก ชื่อ-สกุล ด้วยค่ะ');NameLname.focus();
          return false;}
		    if(Email.value==''){alert('กรอก อีเมล์ ด้วยค่ะ');Email.focus();
          return false;}
		    if(Relationship.value==''){alert('กรอก ความสัมพันธ์ ด้วยค่ะ');NameLname.focus();
          return false;}
		    if(Career.value==''){alert('กรอก อาชีพ ด้วยค่ะ');Career.focus();
          return false;}
		  
		   if(Phone.value==''){alert('กรอก เบอร์โทรศัพท์ ด้วยค่ะ');Phone.focus();
          return false;}
		   if(Address.value==''){alert('กรอก ที่อยู่ ด้วยค่ะ');Address.focus();
          return false;}
		  
		  
		  
		  
          }
      }
</script>

<body>


<table width="784" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td width="179" height="25" align="right" scope="col">ตำบล  :</td>
    <td width="207" scope="col" class="alert"><input type="text" name="district" id="district" placeholder="ตำบล"> *</td>
    <td width="88" align="right" scope="col">อำเภอ : </td>
    <td width="310" scope="col" class="alert"><input type="text" name="amphoe" id="amphoe" placeholder="อำเภอ"> *</td>
  </tr>
  <tr>
    <td height="24" align="right" scope="col">จังหวัด  :</td>
    <td scope="col" class="alert"><input type="text" name="province" id="province" placeholder="จังหวัด"> *</td>
    <td align="right" scope="col">รหัสไปษณีย์ :</td>
    <td scope="col" class="alert"><input type="text" name="zipcode" id="province" placeholder="รหัสไปรษณีย์"> *</td>
  </tr>
  <tr>
    <td height="25" align="right" scope="col">เบอร์โทรศัพท์ :</td>
    <script type="text/javascript">
				function autoTab2(obj,typeCheck){
					/* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
					หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
					4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
					รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
					หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
					ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
								*/
					if(typeCheck==1){
						var pattern=new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
						var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้		
					}else{
						var pattern=new String("___-_______"); // กำหนดรูปแบบในนี้
						var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้					
					}
					var returnText=new String("");
					var obj_l=obj.value.length;
					var obj_l2=obj_l-1;
					for(i=0;i<pattern.length;i++){			
						if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
							returnText+=obj.value+pattern_ex;
							obj.value=returnText;
						}
					}
					if(obj_l>=pattern.length){
						obj.value=obj.value.substr(0,pattern.length);			
						}
					}
				</script>
    <td scope="col" class="alert"><input name="Phonestd" type="text" id="Phonestd" onkeyup="autoTab2(this,2)" maxlength="11"/>
      *</td>
    <td height="25" align="right" scope="col">อีเมล์ :</td>
    <script type='text/javascript'>
					function check_email(elm){
					var regex_email=/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*\@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.([a-zA-Z]){2,4})$/
					if(!elm.value.match(regex_email)){
					alert('รูปแบบ E-mail ไม่ถูกต้อง');
							}
						}
				</script>
    <td scope="col" class="alert"><input name="Emailstd" type="text" id="Emailstd" size="30" onblur="check_email(this)" placeholder="Email"> *</td>
  </tr>
  </table>
  <script>
	
		ThaiDB(); // เรียกใช้งาน
		
		/* วิธีเรียกใช้งานแบบกำหนดค่าเอง, ทำแคชฐานข้อมูลล่วงหน้า
		
		// แบบกำหนด selector เองได้ว่า field ไหนอยู่ที่ไหน
		// preload() คือสั่งให้ดาวน์โหลด Database มาแคชไว้ล่วงหน้าเลย (ปกติจะโหลดฐานข้อมูลเฉพาะตอนที่จะใช้เท่านั้น)
		
		ThaiDB({
			district: '[name="district"]',
			amphoe: '[name="amphoe"]',
			province: '[name="province"]',
			zipcode: '[name="zipcode"]'
		}).preload();
		
		*/
	</script>
</body>
</html>