<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="../s.css" rel="stylesheet" type="text/css" />


</head>
<?php

include ("../config.php");
$page = $_GET['page'];
$s=0;
echo "<html dir='rtl'>

<head>
<form method='POST' action='update1.php'>
	<div align='center'>
	<table border='1' width='100%' id='table1'>
		<tr>
			<td>رقم الخطاب</td>
			<td>تاريخه</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><input type='text' name='Number' size='20' dir='rtl'></td>
			<td><input type='text' name='datee' size='20' dir='rtl'></td>
			<td>&nbsp;</td>
		</tr>
			<tr>
			<td>الجهة</td>
			<td>الموضوع</td>
			<td>عدد الأيام</td>
		</tr>
		<tr>
			<td><input type='text' name='Theee' size='20' dir='rtl'></td>
			<td><input type='text' name='Thread' size='20' dir='rtl'></td>
			<td><select size='1' name='Today'>
			<option value='-1'>1</option>
			<option value='-2'>2</option>
			<option value='-3'>3</option>
			<option value='-4'>4</option>
			<option value='-5'>5</option>
			<option value='-6'>6</option>
			<option value='-7'>7</option>
			<option value='-8'>8</option>
			<option value='-9'>9</option>
			<option value='-10'>10</option>
			<option value='-11'>11</option>
			<option value='-12'>12</option>
			<option value='-13'>13</option>
			<option value='-14'>14</option>
			<option value='-15'>15</option>
			<option value='-16'>16</option>
			<option value='-17'>17</option>
			<option value='-18'>18</option>
			<option value='-19'>19</option>
			<option value='-20'>20</option>
			<option value='-21'>21</option>
			<option value='-22'>22</option>
			<option value='-23'>23</option>
			<option value='-24'>24</option>
			<option value='-25'>25</option>
			<option value='-26'>26</option>
			<option value='-27'>27</option>
			<option value='-28'>28</option>
			<option value='-29'>29</option>
			<option value='-30'>30</option>


			</select>
            	</tr>
	</table></div>
	<select name='Transfer' id ='elect'>
";



 $query_555554 = "  SELECT *  FROM Admin  WHERE   cp =2 ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_object($result_555554)){
echo "	<option value='$line_555554->name'>$line_555554->name</option>
";

}
echo "</select>

	<p align='center'><input type='submit' value='أدخــــــــــل' name='B1'></p>
</form>

 	<div align='center'>
<table border='1' width='100%' id='table1' cellspacing='1'>
	<tr>
		<td id='table11'>م</td>
		<td id='table11'>رقم الخطاب </td>	
		<td id='table11'><span lang='ar-sa'>تاريخه</span></td>
		<td id='table11'><span lang='ar-sa'>الجهة</span></td>
		<td id='table11'><span lang='ar-sa'>الموضوع</span></td>
		<td id='table11'><span lang='ar-sa'>محال إلى</span></td>
		<td id='table11'><span lang='ar-sa'>ما تم عليه</span></td>
		<td id='table11'><span lang='ar-sa'>المدخل </span></td>
        <td id='table11'><span lang='ar-sa'>الأيام المتبقية </span></td>

<td id='table11'><span lang='ar-sa'>ادارة</span></td>



	
	</tr>";
	
	        function GetTotalDay($date55)
{
        list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
        
############## page config ###############
include 'pager.class.php';
$perpage = 15; // عدد النتائج في كل صفحة
$mode = 2; // طريقة العر : 1=مختصرة , 2=تفصيلية
$next = 1; // لعرض زر التالى
$prev = 1; // لعرض زر السابق
$end = 1; // لعرض زر أخر صفحة
$start = 1; // لعرض زر أول صفحة
$query = mysql_query("select * from reports1");
$total = mysql_num_rows($query);
##########################################
// لطباعة العداد
$pager = new full_pager($page, $perpage, $total, $mode, $next, $prev, $end, $start,
    $tools);
// نهاية الطباعة


$sql1 = "select * from reports1 ORDER BY `id` DESC  LIMIT " . ($pager->page - 1) * $perpage .
    "," . $perpage;
$row1 = mysql_query($sql1);

while ($lin = mysql_fetch_array($row1)) {
$s++;
    $Number = $lin['Number'];
    $datee = $lin['datee'];
    $Theee = $lin['Theee'];
    $Thread = $lin['Thread'];
    $Transfer = $lin['Transfer'];
    $What = $lin['What'];
    $id = $lin['id'];
    $admin = $lin['admin'];
    $date1 = $lin['date1'];
        $Today = $lin['Today'];


   $days = GetTotalDay($date1);



   $sum = $days - $Today;

  if ($days < $Today or $sum ==0 ){
  	$days1 = "مغلق ";
    $sum = "مغلق ";
  	}
$clar10 = "id='a200' ";
$cp11="";




 
    echo "
	
	
	
		<tr>
		<td >$s&nbsp; </td>
		<td >$Number&nbsp;</td>
			
		<td >$datee&nbsp;</td>
		<td > $Theee &nbsp;</td>
		<td > $Thread&nbsp;</td>
		<td >$Transfer&nbsp;</td>
		<td ><a href='Note5.php?id=$id'> ما تم عليه</a>&nbsp;</td>
		<td >$admin&nbsp; </td>
        <td >$sum&nbsp;</td>
<td><a href='delete.php?id=$id'onclick=\"return confirm('هل انت متأكد؟؟؟')\"/a'> حذف</a></td>



	
	
	</tr>";

}
echo"</table>";

?>
