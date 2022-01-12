<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jawal.js"></script>



</head>

<?PHP require_once ('login.php');

 @$Thread1 = $_POST['Thread'];
 @$Thread2 = $_POST['Thread1'];

$s=0;


   $query121 = "UPDATE Admin SET `su` = '0' ,nsb = '0'";
$query111 = mysql_query($query121) or die("Query failed");

echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> تقييم المعلمات      <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>

  </ul>
 

                    <br/>
                                  <br/>
<table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
			   <td >الاسم</td>
		<td >مجموع التقييم</td>
	

	</tr>
";


      $query1 = "SELECT Number, SUM(Number)  FROM  reports   ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);



     $query753 = "SELECT admin,daten, SUM(Number)   FROM reports  GROUP BY  " .   admin . " ";
          $result411 = mysql_query($query753);

          $NMB = $row411['SUM(Number)'];
while ($row411 = mysql_fetch_array($result411)){



  



                 $daten=$row411['daten'];


       $sm = $row411['SUM(Number)'];
     $na=$row411['admin'];


               	      $ns=$sm/$NMB*100;
  $ns= round($ns, 2);


              $query = "UPDATE Admin 	SET	su = $sm,nsb='$ns' WHERE name = '$na'";
$query1 = mysql_query($query) or die("Query failed");


   }

 
   

     $query10 = "SELECT * FROM  Admin   WHERE su >0   ORDER BY su DESC ";
$result4110 = mysql_query($query10);

while ($row4110 = mysql_fetch_array($result4110)){
      $name=$row4110['name'];
       $smm=$row4110['su'];
              $nsb=$row4110['su'];

               $ss++;


echo "

		<tr>
						<td id='max'>$ss&nbsp; </td>
						<td >  $name&nbsp; </td>

				<td  ><a href='search8.php?id=$name' >$smm &nbsp; </td>

                                                                     ";
                                                                    //  if($nsb> 0)
//                                                                        echo"
// 	</tr>$name<div class=\"progress progress-info progress-striped\">
//   <div class=\"bar\" style=\"width: $nsb%\">$nsb </div>
// </div>";

         }

         ?>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
       google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php
  $query10 = "SELECT * FROM  Admin WHERE su >0   ORDER BY su DESC  LIMIT 10";
$result4110 = mysql_query($query10);

while ($row41101= mysql_fetch_array($result4110)){
      $name=$row41101['name'];
       $smm=$row41101['su'];
              $nsb=$row41101['su'];

          echo"  ['".$name."', $nsb], ";
}
?>
         ]);
        
         var options = {
          legend: 'none',
          is3D: true,
         };
        
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));
         chart.draw(data, options);
        }
        </script>
        </head>
        <body>
    <div id="piechart" style="width: 400px; height:500px;"></div> 
        </body>
      