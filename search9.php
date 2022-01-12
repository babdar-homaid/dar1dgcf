
<?PHP require_once ('login.php');

 @$Thread1 = $_POST['Thread'];
 @$Thread2 = $_POST['Thread1'];

$s=0;
mysql_query("set names 'utf8'");

   $query121 = "UPDATE st SET `su` = '0' ,nsb = '0' ,Thread1='0'";
$query111 = mysql_query($query121) or die("Query failed");

echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> النتائج <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>

  </ul>
تقييم الطالبات     

                    <br/>
                                  <br/>
<table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
			   <td >الاسم</td>
		<td >مجموع التقييم</td>
		<td >النسبة </td>

	</tr>
";
mysql_query("set names 'latin1'");

      $query1 = "SELECT Number, SUM(Number)  FROM  reports  LIMIT 5 ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);



     $query753 = "SELECT D_sector,daten, SUM(Number)   FROM reports   GROUP BY  " .   D_sector . " ";
          $result411 = mysql_query($query753);

          $NMB = $row411['SUM(Number)'];
while ($row411 = mysql_fetch_array($result411)){







                 $daten=$row411['daten'];


       $sm = $row411['SUM(Number)'];
     $na=$row411['D_sector'];


               	      $ns=$sm/$NMB*100;
  $ns= round($ns, 2);
mysql_query("set names 'utf8'");

              $query = "UPDATE st 	SET	su = $sm,Thread1='$daten' ,nsb='$ns' WHERE name = '$na'";
$query1 = mysql_query($query) or die("Query failed");


   }
   mysql_query("set names 'utf8'");

     $query10 = "SELECT * FROM  st   ORDER BY su DESC  LIMIT 5";
$result4110 = mysql_query($query10);
while ($row4110 = mysql_fetch_array($result4110)){
      $name=$row4110['name'];
       $smm=$row4110['su'];
              $nsb=$row4110['nsb'];

               $ss++;


echo "

		<tr>
						<td id='max'>$ss&nbsp; </td>
						<td >  $name&nbsp; </td>

				<td  ><a href='search3.php?id=$name&Thread=$Thread1&Thread1=$Thread2' >$smm &nbsp; </td>

																<td >%$nsb&nbsp; </td>
                                                                     ";
                                                                     if($nsb> 0)
                                                                       echo"
	</tr>$name<div class=\"progress progress-info progress-striped\">
  <div class=\"bar\" style=\"width: $nsb%\">$nsb </div>
</div>";

         }


?>