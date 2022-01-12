<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>
<script type="text/javascript" src="add1.js"></script>

</head>

<?PHP require_once ('login.php');
  @$admincp=$_COOKIE["admincp"];
 $query_55503 = "  SELECT * FROM Admin WHERE name = '$admincp'";
$result_55503 = mysql_query ($query_55503)
  or die ("Query failed");
$line_55503 = mysql_fetch_object($result_55503);



?>

<body>
<div id="divv"></div>


<form id="myformD_sub" class='out'>
	<?php echo "<input type='hidden' name='D_sector' value='$line_55503->D_sector'  id='name'   />"; ?>

	الاسم
	<br />
<input type="text" name="name" id="name" /><span id ='span_name'></span>

<br />

<input id="buttonD_sub" type="button"  value="ادخل" />

</form>
<div id='sl' class='out'>
للحذف
</div>
<div id='sl1' style='display: none'>
<form id="myform21" class='out'>

<?php


echo "

حذف قطاع
<br />
<select name='idD_sub' id ='elect'>


";
$query_5553 = "  SELECT * FROM `D_sub` WHERE sector = '$line_55503->D_sector'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "
	<option value='$line_5553->id'>$line_5553->name - $line_5553->School</option>	
";

}

echo "</select>

<br />
";


?>
<input id="button21" type="button"  value="حذف" />
</form>

</div>
<div id ='lo'></div>
</body>
</html>


