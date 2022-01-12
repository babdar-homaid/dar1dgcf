
<?PHP 

echo "<br/>";

     function GetTotalDay($date55)
{
        @list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}


 echo "



 	<div class=\"container\">
 	
<table border='1' class='table table-striped'>
	<tr>

						<td >الشعبة</td>

		<td > السلوكيات</td>
				<td > درجة التقييم</td>

				<td >تاريخ التقييم</td>
		
		
	
		
<td id='max'>المقيم</td>



	</tr>
";
 $query = "SELECT * FROM reports1  ORDER BY `id`  DESC LIMIT 0,5";
$result = mysql_query($query) or die("Query failed1");
while($lin = mysql_fetch_array($result)){

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


   $sum = $daten1;

  if ($daten1 <=0 ){
  	$days1 = "منتهي ";
    $sum = "منتهي ";
  	}
      if ($xd=='تم الرد' ){

    $clar1 = " bgcolor='#00FF00' ";

         }
             
     
 echo "


		<tr>

								<td > $D_sector&nbsp; </td>

				<td  > $Thread&nbsp; </td>
												<td > $Number&nbsp; </td>

		
						<td > $daten&nbsp;</a></td>
		
		

			
        
		<td id='max'>$admin&nbsp; </td>
			

			


	</tr>


	";

}
echo "</table>";

?>
