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





     <form id='myform8_Statistics' class='out'> 
	 	 بيان بتقدير الطلاب في القطاعات

   <br />
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
echo "</select>";
echo " <br />
  الجنس
<br />
<select name='type' id ='elect'>

  <option value='الجميع'>الجميع</option>
  <option value='بنين'>بنين</option>
  <option value='بنات'>بنات</option>

</select>";

echo"
<br />
الفصل
<br />
<select name='Chapter1' id ='elect'>
  <option value='الأول'>الأول</option>
  <option value='الثاني'>الثاني</option>
  <option value='الصيفي'>الصيفي</option>

</select>
";
ECHO"  <br />
القطاع
<br />
<select name='Sector' id ='elect'>
<option value='الجميع'>جميع القطاعات</option>
";
$query_555554 = "  SELECT name FROM `Sector` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
		
echo "	


<option value='$line_555554->name'>$line_555554->name</option>
";

}
echo "</select>
";

echo " <br />
   التقدير
<br />
<select name='tak1' id ='elect'>

  <option value='ممتاز'>ممتاز</option>
  <option value='جيد جدا'>جيد جدا</option>
  <option value='جيد'>جيد</option>
    <option value='راسب'>راسب</option>

</select>";
echo "<br/>

";
?>
<br />
<input id='button8_Statistics' type='button'  value='بحث' />

</form>

<div id ='lo'></div>

</body>
</html>



