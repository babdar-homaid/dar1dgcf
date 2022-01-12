<?php
 include ("../logn.php");
 include("../config.php");  
 include ("../supervisor/Security1.php");
include ("../supervisor/had1.php");    

  $id =$_GET['id'];
        $cpanl =$_SESSION['cpanl'];

if ($cpanl != 6  ) {
$query = "DELETE FROM reports1  WHERE id = '$id' ";

$result = mysql_query ($query)

  or die ("Query failed");
   if ($query) {
   	
echo"
<table border='1' width='100%' id='table1'>
	<tr>
		<td style='border: 1px dashed #008000'>
		<p align='center'>&nbsp;</p>
		<p align='center'>&nbsp;</p>
		<p align='center'><span lang='ar-sa'>
		<font color='#FF0000' size='4' face='Tahoma'><b>تم حذف الخطاب بنجاح   </b></font></span></p>
		<p>&nbsp;</p>
		<p>&nbsp;</td>
	</tr>
</table>
  <META HTTP-EQUIV='Refresh' CONTENT='4;URL=index1.php'>

";
    }

}
else {echo "<html dir='rtl'>
<p align='center'><b><font face='Traditional Arabic' size='5' color='#FF0000'>
<span lang='ar-sa'>الوصول إلى هذه الصفحة غير مسموح به </span></font></b></p><p align='center'>
<img border='0' src='../images/1.png' width='300' height='300'></p>



";
}
?>