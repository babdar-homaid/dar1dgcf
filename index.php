
<!DOCTYPE html>
<html lang="en">
<head>
<title>برنامج التقييم</title>
 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
      <link rel="stylesheet" href="css/mybootstrap.css">
      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="cood.js"></script>
<script type="text/javascript" src="add.js"></script>
<script type="text/javascript" src="save_dl.js"></script>


  <script src="js/bootstrap.min.js"></script>
     <script src="js/myBootstrap.js"></script>




</head>
<!--بداية النفبار للهيدر-->
<div class="navbar-inner">

<nav class="navbar navbar-static-top  " align="">
    
<div id="hed"><i class="fa fa-mobile" style="font-size:36px"></i></div>

            <!--بداية  النفبار المنسدل -->
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">	
                    <!--نهاية  النفبار المنسدل -->

    <!--بداية صور النفبار التي تظهر في الجول -->
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
        <!--نهاية صور النفبار التي تظهر في الجول -->

    </a>
    <div class="nav-collapse">
        <ul class="nav">
        
<li><a href="info.php"><i class="fa fa-users" aria-hidden="true"></i> دخول المعلمات  </a></li>

<li><a href="index2.php"><i class="fa fa-users" aria-hidden="true"></i>  تفاصيل الشعب  </a></li>
<li><a href="index.php"><i class="fa fa-users" aria-hidden="true"></i>  تفاصيل الطالبات  </a></li>




        
  

        </ul>
        </div>
        
</nav>
        </div>

<!--نهاية النفبار للهيدر-->
<div align='center' class='container' >
  			  <div class='well'>
مرحبا بكم في برنامج حصادك بمبادرة من
    <br/>


    <br/>

 أ-مرام الجابري
    <br/>

إشراف قائدة المدرسة : بدرية الحازمي
  <br/>
            </div>

       <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="CTWtx3XWEAAbj2j1.jpeg" alt="Los Angeles" width="300" height="200">
<img src="3.jpeg" alt="Los Angeles" width="300" height="200">
</header>

<?PHP require_once ('config.php');

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
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> تقييم الطالبات     <i class=\"fa fa-arrow-circle-left\"></i>
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
              $nsb=$row4110['su'];

               $ss++;


echo "

		<tr>
						<td id='max'>$ss&nbsp; </td>
						<td >  $name&nbsp; </td>

				<td  ><a href='search3.php?id=$name' >$smm &nbsp; </td>

                                                                     ";
                                                                     if($nsb> 0)
                                                                       echo"
	</tr>$name<div class=\"progress progress-info progress-striped\">
  <div class=\"bar\" style=\"width: $nsb%\">$nsb </div>
</div>";

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
  $query10 = "SELECT * FROM  st   ORDER BY su DESC  LIMIT 5";
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
      