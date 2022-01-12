
<?PHP 

echo "<br/>";



 echo "



 	<div class=\"container\">
 	
<table border='1' class='table table-striped'>
	<tr>

						<td >الطالبة</td>

		<td > السلوكيات</td>
				<td > درجة التقييم</td>

				<td >تاريخ التقييم</td>
		
		
	
		
<td id='max'>المقيم</td>



	</tr>
";
mysql_query("set names 'latin1'");

 $query9 = "SELECT * FROM reports ORDER BY `id`  DESC LIMIT 0,5";
$result9 = mysql_query($query9) or die("Query failed1");
while($lin9 = mysql_fetch_array($result9)){

    $Number9 = $lin9['Number'];
    $daten9 = $lin9['daten'];
    $Theee9 = $lin9['Theee'];
    $Thread9 = $lin9['Thread'];
    $Transfer9 = $lin9['Transfer'];
    $What9 = $lin9['What'];
     $id9 = $lin9['id'];
          $jawal9 = $lin9['jawal'];
	           $D_sector9 = $lin9['D_sector'];
			   	           $xd = $lin9['xd'];
				$datee9 = $lin9['datee'];
										$admin9 = $lin9['admin'];
   
			    

             
     
 echo "


		<tr>

								<td > $D_sector9&nbsp; </td>

				<td  >  $Thread9&nbsp; </td>
												<td > $Number9&nbsp; </td>

		
						<td > $daten9&nbsp;</a></td>
		
		

			
        
		<td id='max'>$admin9&nbsp; </td>
			

			


	</tr>


	";

}
echo "</table>";

?>
