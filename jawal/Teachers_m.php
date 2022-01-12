 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>
<link href="s.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php

 include  ('login.php');
require_once ('config.php');

echo "
<div id='divvv'></div>

 <form id='myform10' class='out'>


<div id ='lo'></div>



";





$query_5 = "  SELECT * FROM `Supervisor` WHERE  name ='$admincp' ";
$result_5 = mysql_query ($query_5)
  or die ("Query failed");
$line_5 = mysql_fetch_object($result_5);
echo "
<form id='myform915' class='out'>

<br />
المعلم
<br />
<select name='teacher' id ='elect'>
";



echo $query_555554 = "  SELECT name FROM `Admin`  WHERE   card_m ='$line_5->card'and cp =2";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>	
";

}
echo "</select>
";

echo "السنة
<br />
<select name='years' id ='elect'>
";
$query_55555 = "  SELECT * FROM `Years` ";
$result_55555 = mysql_query ($query_55555)
  or die ("Query failed");
while ($line_55555 = mysql_fetch_object($result_55555)){
echo "	<option value='$line_55555->name'>$line_55555->name</option>	
";

}
echo "</select>
<br />
";
?>
الفصل
<br />
<select class='out' name="Chapter1" id ='elect'>
  <option value="الأول">الأول</option>
  <option value="الثاني">الثاني</option>
  <option value="الصيفي">الصيفي</option>

</select>
<br />
<input id='button10' type='button'   value='بحث' />

</form>
<input  type='hidden' class='hide'  value='عودة' />


</body>
</html>



