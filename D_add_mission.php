<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="s.css" rel="stylesheet" type="text/css" />


</head>
<?PHP require_once ('login.php');






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

$page = $_GET["page"];
$s=0;
echo "<html dir='rtl'>

<head>
<form method='POST' action='update1.php'>
	<div align='center' class='out'>
		<br/>
		
					<input type='hidden' value='$line_5556->D_sector' name='D_sector' size='20' dir='rtl'>
		
			الموضوع
			<br/>
	
			<input type='text' name='Thread' size='20' dir='rtl'>
					
            
	<br/>
			
					الموظف 
					<br/>
	<select name='Transfer' id ='elect'>
";



  $query_555554 = "  SELECT *  FROM Admin  WHERE   D_sector = '$line_5556->D_sector'  and name !='$admincp'";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>
";

}
echo "</select>";


echo "





<br />
السنة
<br />
<select name='date3' id ='elect'>
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

mum("date2","الشهر",13);
mum("date1","اليوم",31);




	echo "<p align='center'><input type='submit' value='أدخــــــــــل' name='B1'></p>
</form>
</div>
 ";

?>

