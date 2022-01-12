<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />



</head>

<?PHP 
$m1=0;
$m2=0;
require_once ('config.php');


$School=@$_POST[School];
$Month=@$_POST[Month];
$years=@$_POST[years];

$School1=@$_POST[School1];
$Month1=@$_POST[Month1];
$years1=@$_POST[years1];
if($years1<$years) {echo "لا يمكنك الحساب بهذه الطريقة"; exit;}
if($years1==$years and $Month1<=$Month) {echo "لا يمكنك الحساب بهذه الطريقة"; exit;}

echo "
 بيان للحلقة  [ $School ] من شهر  [ $Month ] سنة  [ $years ] إلى  شهر  [ $Month1 ] سنة  [ $years1 ]  <div align='center' >
	";
  $query_50 = "  SELECT * FROM School WHERE name = '$School'";
$result_50 = mysql_query ($query_50)
  or die ("Query failed");
$line_50 = mysql_fetch_object($result_50);
 $query_500 = "  SELECT * FROM Teacher WHERE School = '$School'";
$result_500 = mysql_query ($query_500)
  or die ("Query failed");
$line_500 = mysql_fetch_object($result_500);
//echo $line_50->id;
echo "

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

<br/>
	<div align='center' >
	<table border='1' width='70%' >

	<tr>
	<td>م</td>
	<td>الاسم</td>
<td>المرحلة</td>
<td>الصف</td>
<td>عدد الاجزاء</td>
<td>عدد الاجزاء الجديد</td>

<td>التقدم</td>


		
	
	</tr>	";

	  $query_50 = "  SELECT * FROM `Conservation` WHERE  School ='$School' and Years = '$years' and Month ='$Month' and save =2 ";
$result_50 = mysql_query ($query_50)
  or die ("Query failed");
while ($line_50 = mysql_fetch_object($result_50))
{
	
	
  $query_501 = "  SELECT * FROM `Conservation` WHERE  School ='$School' and Years = '$years1' and Month ='$Month1' and save =2 and name ='$line_50->name' ";
$result_501 = mysql_query ($query_501)
  or die ("Query failed");
$line_501 = mysql_fetch_object($result_501);
	if($line_501->Conservation ){
	$m1++;
	$Progress=$line_501->Conservation -$line_50->Conservation;
	
	if($Progress==0) {$Progress ="لا يوجد تقدم";}
		//if($Progress==1) {$Progress ="جزء";}
			//	if($Progress==2) {$Progress ="جزءان";}
				if($Progress <= -1) {$Progress =" تراجع في الحفظ";}

$sum+=$Progress;

		
echo "


	<tr>
	<td>$m1</td>
	<td>$line_50->name</td>
	<td>$line_50->sch1</td>
	<td>$line_50->sch2</td>
		<td>$line_50->Conservation </td>
				<td>$line_501->Conservation </td>

			<td>$Progress</td>

		
</td>
	</tr>
";
	}
	
	}
	echo "<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>مجموع إنجاز المعلم ($sum)</td>";

?>
</table>
<br/>

</body>
</html>
