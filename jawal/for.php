<?php

echo "<html dir='rtl'>

<head>
<meta http-equiv='Content-Language' content='ar-sa'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<form action='for3.php' method='post'>



<div align='center'>
<table border='1' width='50%' id='table1'>
	<tr>
		
		<td align='center'><b>اليوم</b></td>
		<td align='center'><b>التاريخ</b></td>
		<td align='center'><b>المدرسة</b></td>
		<td align='center'><b>الرقم الوزاري</b></td>
		<td align='center'><b>رقم الكود</b></td>
		<td align='center'><b>الشركة</b></td>
		
";
$ss=0;
$Res=$_POST['Res'];
$Res1=$_POST['Res1'];
 for ($i>1; $i<$Res; $i++) {
 
$ss++;
 
 echo"<tr>

	<td align='center'>
	<input type='text' name='day[]' size='20' dir='rtl' value='$day' > </td>
		<td align='center'>
		<input type='text' name='date[]' size='20' dir='rtl' value='$date'> </td>
		<td align='center'>
		<input type='text' name='school[]' size='20' dir='rtl' value='$school'> </td>
		<td align='center'>
		<input type='text' name='id_w[]' size='20' value='$id_w'></td>
		<td align='center'> 
		<input type='text' name='coood[]' size='20' value='$coood'></td>
		<td align='center'>
		<input type='text' name='cambny[]' size='20' dir='rtl' value='$cambny'></td>
		
	
	</tr>";
 
 
 
 
 	}
 	echo"
 	</table>
<input name='mm' type='' value='$ss'></td>
<input type='submit' value='ادخال' >
</form>";
 
?>
