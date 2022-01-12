
<?PHP require_once ('login.php');

echo "<br/>";
$id = $_GET['id'];

$clar1=1;
     function GetTotalDay($date55)
{
        @list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
 $query = "SELECT * FROM reports1  where  id ='$id' and admin ='$admincp' ";
$result = mysql_query($query) or die("Query failed1");
$lin = mysql_fetch_array($result);

    $Number = $lin['Number'];
    $daten = $lin['daten'];
    $Theee = $lin['Theee'];
    $Thread = $lin['Thread'];
    $Transfer = $lin['Transfer'];
    $What = $lin['What'];
     $id = $lin['id'];
          $jawal = $lin['jawal'];
	           $D_sector = $lin['D_sector'];
			   	           $xd = $lin['xd'];
				$datee = $lin['datee'];
						      $admin = $lin['admin'];
						   
			    
    $daten1 = GetTotalDay($daten);


   $sum = "لا";
$DISABLED="DISABLED";
  if ($daten1 ==0 ){
  	$days1 = " ";
    $sum = "نعم";
	  $DISABLED="";
  	};
      if ($xd=='تم الرد' ){

    $clar1 = " bgcolor='#00FF00' ";

         }
             
     
  echo "<html dir='rtl'>

<head>

<div id=\"divv\"></div>


	<div align='center' class='container' id='container' >
 		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">   تفاصيل التقييم  <i class=\"fa fa-address-card-o	Try it
\"></i>
</a></li>
  
  </ul>

  <div class=\"tab-content\">
    <div id=\"home\" class=\"tab-pane fade in active\">
<table border='1' class='table table-striped'>
	<tr>
		<td id='table11'><span lang='ar-sa'>الشعبة</span></td>

		<td id='table11'><span lang='ar-sa'>السلوكيات </span></td>
				<td id='table11'><span lang='ar-sa'>تاريخ التقييم</span></td>
		



	</tr>



		<tr>

		<td $clar1>$D_sector&nbsp;</td>

		<td $clar1> $Thread&nbsp;</td>
				<td $clar1>$daten&nbsp;</td>
		
			

			


	</tr>

	</table>


 	
<table border='1' class='table table-striped'>
	<tr>

				<td id='table12'><span lang='ar-sa'>امكانية الحذف  </span></td>

				<td id='table13'><span lang='ar-sa'>  الساعة</span></td>
				<td id='table13'><span lang='ar-sa'>المقيم</span></td>
				


	</tr>



		<tr>


			<td $clar1>$sum&nbsp;</td>
			<td id='xd' class='bhs' $clar1>$datee&nbsp;</td>
						<td $clar1>$admin&nbsp;</td>
			

			


	</tr>

	</table>
	
	";

 echo "<html dir='rtl'>


<div align='center'>
	 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\"> حذف التقييم  <i class=\"fa fa-eraser	Try it
\"></i>
     
</a></li>
  
  </ul>

         <input  type='hidden' id=\"val_id\" value='$id' />


		
  <div class=\"tab-content\">
    <div id=\"home\" class=\"tab-pane fade in active\">
 <div class='well'>
<input $DISABLED type=\"button\" value='حذف' id=\"dll\" class='btn btn-large btn-block  btn-danger' style=\"color:\"/>

</div>

</body>
	<div id='lo'></div>

</html>";
?>

