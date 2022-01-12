<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="edit_admincp.js"></script>

</head>

<?PHP 
$m1=0;
$m2=0;
 require_once ('login.php');

$id=@$_GET[id];
   $query_50 = " SELECT * FROM Admin WHERE id = '$id' ";
$result_50 = mysql_query ($query_50)
  or die ("Query failed");
$line_50 = mysql_fetch_object($result_50);
 $cpanel = $line_50->cpanel;
 $name = $line_50->name;

if($cpanel=="1") 
{
	$cp="كاملة";
$checkbox="  <input type='checkbox' name='card_T' id='card_T' checked> 
";
}
if($cpanel=="2") {$checkbox="  <input type='checkbox' name='card_T' id='card_T' >  
";
	$cp="مقيدة";

}
echo "

المشرف العام  $name
<br />
<table border='1' width='70%'  >
	
	<tr>
		<td>الصلاحيات</td>
	<td>تغيير الصلاحية</td>


</tr>
<tr>
	<td id='or'>$cp</td>
<td>$checkbox</td>
</tr>
";

echo "


<input type='hidden' name='id' id='id' value='$line_50->id' />

<br />";	


?>
<div id="show1"></div>

</table>
<br/>
</body>
<div id ='lo'></div>
</html>