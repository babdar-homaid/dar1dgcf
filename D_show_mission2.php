<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="s.css" rel="stylesheet" type="text/css" />


</head>
<?PHP require_once ('login.php');

$page = $_GET['page'];
$s=0;
echo "<html dir='rtl'>

<head>


 	<div align='center'>
<table border='1' width='100%' id='table1' cellspacing='1'>
	<tr>
		<td id='table11'>م</td>
		<td id='table11'><span lang='ar-sa'>تاريخه</span></td>
		<td id='table11'><span lang='ar-sa'>الموضوع</span></td>
		<td id='table11'><span lang='ar-sa'>محال من</span></td>
				<td id='table11'><span lang='ar-sa'>محال إلى</span></td>
		<td id='table11'><span lang='ar-sa'>المدخل </span></td>
        <td id='table11'><span lang='ar-sa'>الأيام المتبقية </span></td>
		<td id='table11'><span lang='ar-sa'>ما تم عليه</span></td>
        		<td id='table11'><span lang='ar-sa'>تحويل</span></td>
        



	
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
$query = mysql_query("select * from reports1 WHERE   Transfer = '$admincp'");
$total = mysql_num_rows($query);
##########################################
// لطباعة العداد
$pager = new full_pager($page, $perpage, $total, $mode, $next, $prev, $end, $start,
    $tools);
// نهاية الطباعة


$sql1 = "select * from reports1  WHERE   Transfer = '$admincp' ORDER BY `id` DESC  LIMIT " . ($pager->page - 1) * $perpage .
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
        $D_sector = $lin['D_sector'];

        $daten = $lin['daten'];

   $days = GetTotalDay($date1);

   $daten1 = GetTotalDay($daten);


   $sum = $daten1;

  if ($daten1 <=0 ){
  	$days1 = "مغلق ";
    $sum = "مغلق ";
  	}
$clar10 = "id='a200' ";
$cp11="";




 
    echo "
	
	
	
		<tr>
		<td >$s&nbsp; </td>
		<td >$datee&nbsp;</td>
		<td > $Thread&nbsp;</td>
		<td >$D_sector&nbsp;</td>
				<td >$Transfer&nbsp;</td>
		
		<td >$admin&nbsp; </td>
        <td >$sum&nbsp;</td>
		<td ><a href='D_Note1.php?id=$id'> انقر هنا</a>&nbsp;</td>
		<td ><a href='D_Note2.php?id=$id'> انقر هنا  </a>&nbsp;</td>


	
	
	</tr>";

}
echo"</table>";

?>
