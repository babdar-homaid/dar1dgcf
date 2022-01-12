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
<form id='myform914' class='out'>

<br />
المرحلة
<br />
<select name='school' id ='elect'>
";
$query_555554 = "  SELECT DISTINCT sch1 FROM `Conservation` ORDER BY sch1 ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
if($line_555554->sch1!= "محوة أمية"){
echo "	<option value='$line_555554->sch1'>$line_555554->sch1</option>
";
 }
}
echo "</select>
";




?>




<br />
<input id='button914' type='button'  value='بحث' />


  <div id ='lo'></div>


</form>
</body>
</html>

