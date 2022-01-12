
<?PHP require_once ('login.php');

 @$Thread1 = $_POST['Thread'];
 @$Thread2 = $_POST['Thread1'];

$s=0;
echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> النتائج <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>
  
  </ul>
    تقييم الشعب  من تاريح $Thread1 إلى تاريخ $Thread2      

<table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
			   <td >الشعبة</td>
		<td >مجموع التقييم</td>
		<td >النسبة </td>

	</tr>
";

  $query121 = "UPDATE `D_sector` SET `su` = '0'";
$query111 = mysql_query($query121) or die("Query failed");


     $query753 = "SELECT D_sector, SUM(Number)   FROM reports1 where daten  between '$Thread1'   and  '$Thread2'  GROUP BY " .   D_sector . " ";
          $result411 = mysql_query($query753);


while ($row411 = mysql_fetch_array($result411)){











     $sm = $row411['SUM(Number)'];
     $na=$row411['D_sector'];

 $query = "UPDATE D_sector 	SET	su = $sm 	WHERE name = '$na'";
$query1 = mysql_query($query) or die("Query failed");


   



   }
$query1 = "SELECT Number, SUM(Number)  FROM  reports1   ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);

    $NMB = $row411['SUM(Number)'];

$query_555554 = "  SELECT name ,su FROM `D_sector` ORDER BY su DESC";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_array($result_555554)) {
	      $ss++;
	      $ns=$line_555554[su]/$NMB*100;
$ns= round($ns, 2);


echo "	

		<tr>
						<td id='max'>$ss&nbsp; </td>
						<td > $line_555554[name]&nbsp; </td>

				<td  ><a href='search4.php?id=$line_555554[name]&Thread=$Thread1&Thread1=$Thread2'>$line_555554[su] &nbsp; </td>

																<td >%$ns&nbsp; </td>


	</tr>";

}


?>

<div class="container">
  <h1>Width Utilities</h1>
  <p>Set the width of an element with the w-* classes:</p>
  <div class="w-25 bg-warning">Width 25%</div>
  <div class="w-50 bg-warning">Width 50%</div>
  <div class="w-75 bg-warning">Width 75%</div>
  <div class="w-100 bg-warning">Width 100%</div>
  <div class="mw-100 bg-warning">Max Width 100%</div>
</div>

</body>
</html>