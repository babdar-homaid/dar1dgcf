<?php
include ("../logn.php");
include ("../config.php");
include ("had.php");
$id = $_POST['id'];

echo "<html dir='rtl'>

<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>
<meta http-equiv='Content-Language' content='ar-sa'>
<form method='POST' action='update.php'>
	<table border='1' width='100%' id='table1'>
		<tr>
			<td>رقم الخطاب</td>
			<td>تاريخه</td>
			<td>الجهة</td>
			<td>الموضوع</td>
			<td>محال إلى</td>
		</tr>
		<tr>
			<td><input type='text' name='Number' size='20' dir='rtl'></td>
			<td><input type='text' name='datee' size='20' dir='rtl'></td>
			<td><input type='text' name='Theee' size='20' dir='rtl'></td>
			<td><input type='text' name='Thread' size='20' dir='rtl'></td>
			<td><input type='text' name='Transfer' size='20' dir='rtl'></td>
		</tr>
	</table>
	<p align='center'><input type='submit' value='أدخــــــــــل' name='B1'></p>
</form>


<table border='1' width='100%' id='table1' cellspacing='1'>
	<tr>
		<td id='table11'>م</td>
		<td id='table11'>رقم الطلب </td>	
		<td id='table11'><span lang='ar-sa'>تاريخ البلاغ</span></td>	
		<td id='table11'><span lang='ar-sa'>الجهة</span></td>
		<td id='table11'><span lang='ar-sa'>الموضوع</span></td>
		<td id='table11'><span lang='ar-sa'>محال إلى</span></td>
		<td id='table11'><span lang='ar-sa'>ما تم عليه</span></td>
	
	</tr>";


$sql1 = "select * from reports1 where  Number = '$id' ORDER BY `id` DESC  " ;
$row1 = mysql_query($sql1);

while ($lin = mysql_fetch_array($row1)) {

    $Number = $lin['Number'];
    $datee = $lin['datee'];
    $Theee = $lin['Theee'];
    $Thread = $lin['Thread'];
    $Transfer = $lin['Transfer'];
    $What = $lin['What'];
    $id = $lin['id'];
 
 
 
  $clar1 = "bgcolor='#FFFFFF'";
if (!$What){
$cood1="لم يتم تقفيل البلاغ بعد";
$clar1 = "id='table100' ";	
}

$clar10 = "id='a200' ";
$cp11="";
  
        
    
 
    echo "
	
	
	
		<tr>
		<td $clar1>م&nbsp;</td>
		<td $clar1>$Number&nbsp;</td>
			
		<td $clar1>$datee&nbsp;</td>	
		<td $clar1> $Theee &nbsp;</td>
		<td $clar1> $Thread&nbsp;</td>
		<td $clar1>$Transfer&nbsp;</td>
		<td ><a href='Note5.php?id=$id'> ما تم عليه</a>&nbsp;</td>
	
	
	</tr>";

}
echo"</table>";

?>


