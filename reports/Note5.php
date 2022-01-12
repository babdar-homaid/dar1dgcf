<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="../s.css" rel="stylesheet" type="text/css" />


</head>
<?php
include ("../config.php");

$id = $_GET['id'];


echo "<html dir='rtl'>

<head>



<table border='1' width='100%' id='table1' cellspacing='1'>
	<tr>
	
		<td id='table11'>رقم الخطاب </td>	
		<td id='table11'><span lang='ar-sa'>تاريخه</span></td>	
		<td id='table11'><span lang='ar-sa'>الجهة</span></td>
		<td id='table11'><span lang='ar-sa'>الموضوع</span></td>
		<td id='table11'><span lang='ar-sa'>محال إلى</span></td>
		<td id='table11'><span lang='ar-sa'>رفع نسخة</span></td>
	
	</tr>";

 $query = "SELECT * FROM reports1  where  id ='$id' ";
$result = mysql_query($query) or die("Query failed1");
$lin = mysql_fetch_array($result);

    $Number = $lin['Number'];
    $datee = $lin['datee'];
    $Theee = $lin['Theee'];
    $Thread = $lin['Thread'];
    $Transfer = $lin['Transfer'];
    $What = $lin['What'];
     $id = $lin['id'];
     
     
      
    echo "
	
	
	
		<tr>
		
		<td $clar1>$Number&nbsp;</td>
			
		<td $clar1>$datee&nbsp;</td>	
		<td $clar1> $Theee &nbsp;</td>
		<td $clar1> $Thread&nbsp;</td>
		<td $clar1>$Transfer&nbsp;</td>
		<td ><a href='copy.php?id=$id'> انقر هنا  </a>&nbsp;</td>
	
	
	</tr>
	
	</table>
	";

     
 echo "<html dir='rtl'>


<div align='center'>


</div>
<form method='POST' action='up7.php'>

	<input type='hidden' value='$id' name='id'>
	<p align='center'><textarea rows='9' name='tax' cols='43' dir='rtl'>$Note
 $What</textarea></p>
	<p align='center'><input type='submit' value='إرسال' name='B1'></p>
	<p>&nbsp;</p>
</form>

</body>

</html>";
if(is_file("uplod/$id.pdf")) echo "

<p align='center'>

<a href='uplod/$id.pdf'><img border='0' src='../images/pdf_telecharger.gif' width='164' height='151'></p></a>";
exit;
?>