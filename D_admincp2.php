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


<form id="D_fadmincp1" class='out'>
	<?php
	 @$admincp=$_COOKIE["admincp"];
 $query_55503 = "  SELECT * FROM Admin WHERE name = '$admincp'";
$result_55503 = mysql_query ($query_55503)
  or die ("Query failed");
$line_55503 = mysql_fetch_object($result_55503);
echo "<input type='hidden' name='D_sector' value='$line_55503->D_sector'  id='name'   />";
	?>
الحالة 
<br />

<select name='cp' id ='elect'>
	<option value='8'>رئيس قسم</option>
		<option value='9'>موظف</option>

</select>
 
	<br />

	القسم
	<br />
<select name='D_sub' id ='elect'>
	
";
<?php
$query_5555 = "  SELECT * FROM `D_sub`  WHERE sector = '$line_55503->D_sector'";
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

<input id="D_badmincp1" type="button"  value="ادخل" />

</form>
<div id='sl' class='out'>
للحذف
</div>
<div id='sl1' style='display: none'>
<form id="myform27" class='out'>

<?php


echo "
<br />
حذف 
<br />
<select name='id_admin' id ='elect'>


";
$query_5553 = "  SELECT * FROM Admin WHERE D_sector ='$line_55503->D_sector'";
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
