
<?PHP require_once ('login.php');

@$page = $_GET['page'];
$s=0;
echo "

<br/>
	<div align='center' class='container' >
	 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">استعراض التقييم   <i class=\"fa fa-folder-open-o	Try it

\"></i>
     
</a></li>
  
  </ul>
<table  class='table table-striped'  border='1'>
	<tr>
		<td id='max'>م</td>
						<td >الشعبة</td>

		<td > السلوكيات</td>
				<td > درجة التقييم</td>

				<td >تاريخ التقييم</td>
		
		
	
		
<td id='max'>المقيم</td>
        



	
	</tr>";
	
	        function GetTotalDay($date55)
{
        @list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
        
############## page config ###############
include 'pager.class.php';
$perpage = 15; // عدد النتائج في كل صفحة
$mode = 1; // طريقة العر : 1=مختصرة , 2=تفصيلية
$next = 1; // لعرض زر التالى
$prev = 1; // لعرض زر السابق
$end = 1; // لعرض زر أخر صفحة
$start = 1; // لعرض زر أول صفحة
$query = mysql_query("select * from reports1 where admin ='$admincp'");
$total = mysql_num_rows($query);
##########################################
// لطباعة العداد
@$pager = new full_pager($page, $perpage, $total, $mode, $next, $prev, $end, $start,
    $tools);
// نهاية الطباعة


$sql1 = "select * from reports1 where admin ='$admincp' ORDER BY `id` DESC  LIMIT " . ($pager->page - 1) * $perpage .
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
                 $xd = $lin['xd'];
				        $daten = $lin['daten'];
				        $dateR = $lin['dateR'];

   $days = GetTotalDay($daten);

    $daten1 = GetTotalDay($daten);

    $daten2 = GetTotalDay($daten);

   $sum = $daten1;
   $sum1 = $daten2;

  if ($daten1 <=0 ){
  	$days1 = "منتهي ";
    $sum = "منتهي ";
  	}
  
   if ($daten2 <=0 ){
  	$days1 = "منتهي ";
    $sum1 = "منتهي ";
  	}
$clar10 = "id='a200' ";
$cp11="";

  if ($xd==4 ){
  	$xd = "أفاد الموظف ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

  if ($xd==1 or !$xd  ){
  	$xd = "انتظار ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

           if ($xd=='تم الرد' ){

    $clar10 = " bgcolor='#00FF00' ";

         }
                    if ($xd=='لم ينجز' ){

    $clar10 = " bgcolor='#FF0000' ";

         }
                    if ($xd=='تم الرد' ){

    $clar10 = " bgcolor='#00FF00' ";

         }

    echo "
	
	
	
		<tr>
				<td id='max'>$s&nbsp; </td>
								<td ><a href='D_Note.php?id=$id' >  $D_sector&nbsp; </td>

				<td  > $Thread&nbsp; </td>
												<td > $Number&nbsp; </td>

		
						<td > $daten&nbsp;</a></td>
		
		

			
        
		<td id='max'>$admin&nbsp; </td>
        



	
	
	</tr>";

}
echo"</table>
</div>";
 error_reporting(E_STRICT);
 
?>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>
