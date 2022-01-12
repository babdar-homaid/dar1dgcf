<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>




</head>

<?PHP require_once ('login.php');

echo "<div id='divvvv'></div>";
 function mum($name_select,$name_select1,$num1)
 {
  echo "
 <br />
$name_select1
<br />
<select name='$name_select' id ='elect'>";
for ($i=1; $i <$num1 ; $i++) { 
	echo "	<option value='$i'>$i</option>";	
}
echo"</select>";   
 }

echo "
<form id='myform911_Progress' class='out'>

<br />
الحلقة
<br />
<select name='School' id ='elect'>
";
$query_555554 = "  SELECT name FROM `School` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>	
";

}
echo "</select>
";

echo "

<br />
السنة
<br />
<select name='years' id ='elect'>
";
$query_555554 = "  SELECT name FROM `Years` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>	
";

}
echo "</select>
";
mum("Month","الشهر",13);




echo "
<br />
 إلى


<br />
السنة
<br />
<select name='years1' id ='elect'>
";
$query_555554 = "  SELECT name FROM `Years` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>	
";

}
echo "</select>
";
mum("Month1","الشهر",13);
?>




<br />
<input id='button911_Progress' type='button'  value='بحث' />


  <div id ='lo'></div>


</form>
</body>
</html>
