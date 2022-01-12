<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />



</head>

<?PHP 

$ss=0;
$m1=0;
$m2=0;
require_once ('config.php');


$school=@$_POST[school];
  $query_50 = "  SELECT * FROM School WHERE name = '$school'";
$result_50 = mysql_query ($query_50)
  or die ("Query failed");
$line_50 = mysql_fetch_object($result_50);
 $query_500 = "  SELECT * FROM Teacher WHERE School = '$school'";
$result_500 = mysql_query ($query_500)
  or die ("Query failed");
$line_500 = mysql_fetch_object($result_500);

echo "
الحلقة $school
<br />
<table border='1' width='70%' >
	
	<tr>
	<td>القطاع</td>
	<td>القرية</td>
	<td>المسجد</td>
	<td>النوع</td>
	<td>المعلم</td>

</tr>
<tr>
<td>$line_50->Sector</td>
	<td>$line_50->Village</td>
	<td>$line_50->Mosque</td>
	<td>$line_50->Type</td>
	<td>$line_500->name</td>

</tr>
";
	
	
echo "


	<div align='center' >
	<table border='1' width='70%' >

	<tr>
		<td>م</td>

	<td>الاسم</td>
	<td>مدخلات الحفظ</td>

	
	
		
		
		<td colspan='4'>اخر حفظ للطالب</td>
		<td colspan='2'>اخر مراجعة للطالب</td>
	</tr>
	";

echo "طلاب الحلقة

<br />";

$query_555 = "  SELECT name,School,card FROM `Students` WHERE School = '$school'";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){
$query_5555 = "SELECT * FROM `Conservation` WHERE caed = '$line_555->card' ORDER BY id DESC";
$result_5555 = mysql_query ($query_5555)
 or die ("Query failed11");
$numm555 = mysql_num_rows($result_5555);
$line_5553 = mysql_fetch_object($result_5555);

	$ss++;
echo "



	<tr>
	<td>$ss</td>

	<td>$line_555->name</td>
		<td><a href ='showـstudents_save.php?Students=$line_555->card'>$numm555</a></td>

		<td>$line_5553->from</td>
		<td>$line_5553->from_f</td>
		<td>$line_5553->to</td>
		<td>$line_5553->to_f</td>
		<td>$line_5553->from_m</td>
		<td>$line_5553->to_m</td>

	

";

}

	
	
	

?>
</tr>
</table>
<br/>



<?php
/*
 * 
 <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>
<div id='divv'></div>
echo"<form id='myform917'>
";
echo "<textarea name='message' >";
require_once ('school_General_Information2.php');

echo"</textarea>
<input id='button917' type='button'  value='بحث' />

";
 * 
 */
?>
</body>
</html>
