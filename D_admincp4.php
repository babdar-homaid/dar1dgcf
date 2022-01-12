<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>


</head>

<?PHP require_once ('login.php');




?>

<body>
<div id="divv"></div>


<form id="D_fadmincp" class='out'>
الحالة 
<br />

<select name='cp' id ='elect'>
	<option value='7'>مدير إدارة</option>
		

</select>
	<br />

	الجهة
	<br />
<select name='D_sector' id ='elect'>
	
";
<?php
$query_5555 = "  SELECT * FROM `D_sector` ";
$result_5555 = mysql_query ($query_5555)
  or die ("Query failed");
while ($line_5555 = mysql_fetch_object($result_5555)){
echo "	<option value='$line_5555->name'>$line_5555->name</option>	
";

}
?>
</select>
	<br />
الاسم
	
	

<br />
<input type="text" name="name" id="name" /><span id ='span_name'></span>
<br />
رقم الجوال
<br />
<input type="text" name="jawal" id="jawal" /><span id ='span_jawal'></span>

<br />
كلمة المرور
<br />
<input name='password'type="text" id="password" />
<br />

<input id="D_badmincp" type="button"  value="ادخل" />

</form>
<div id='sl' class='out'>
للحذف
</div>
<div id='sl1' style='display: none'>
<form id="myform27" class='out'>

<?php


echo "
<br />
حذف مشرف
<br />
<select name='id_admin' id ='elect'>


";
$query_5553 = "  SELECT * FROM Admin WHERE cp IN ('6','7')";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "
	<option value='$line_5553->id'>$line_5553->name </option>	
";

}

echo "</select>

<br />
";


?>
<input id="button27" type="button"  value="حذف" />
</form>
</div>
<div id ='lo'></div>
</body>
</html>
