
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

 @$Thread1 = $_GET['Thread'];
 @$Thread2 = $_GET['Thread1'];
     @$name = $_GET['id'];

$s=0;
echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> تفاصيل تقييم طالبة <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>
  
  </ul><table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>

		<td > السلوكيات</td>
				<td > درجة التقييم</td>

				<td >تاريخ التقييم</td>




<td >المقيم</td>





	</tr>";
	
	        function GetTotalDay($date55)
{
        list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
        


  $sql1 = "select * from reports  where D_sector ='$name' ";
 $row1=mysql_query($sql1);
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
                 @$tax = $lin['tax'];
                 $date_bd = $lin['datee'];

        $daten = $lin['daten'];

   $days = GetTotalDay($date1);

   $daten1 = GetTotalDay($daten);


   $sum = $daten1;

  if ($daten1 <=0 ){
  	$days1 = "منتهي ";
    $sum = "منتهي ";
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
                    if ($xd=='تأجل' ){

    $clar10 = " bgcolor='#FFFF00' ";

         }

    echo "



		<tr>
						<td id='max'>$s&nbsp; </td>

				<td  >  $Thread&nbsp; </td>
												<td > $Number&nbsp; </td>


						<td > $daten&nbsp;</a></td>





		<td>$admin&nbsp; </td>





	</tr>";
}
echo"</table>


<table  class='table table-striped'  border='1'>
	<tr>
			   <td >الاسم</td>
		<td >مجموع التقييم</td>

	</tr>
";

      $query1 = "SELECT Number, SUM(Number)  FROM  reports   ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);



     $query753 = "SELECT D_sector, SUM(Number)   FROM reports where  D_sector ='$name' GROUP BY " .   D_sector . " ";
          $result411 = mysql_query($query753);

          $NMB = $row411['SUM(Number)'];
while ($row411 = mysql_fetch_array($result411)){




       $ss++;





       $sm = $row411['SUM(Number)'];
     $na=$row411['D_sector'];

               	      $ns=$sm/$NMB*100;
  $ns= round($ns, 2);

echo "

		<tr>
						<td >  $na&nbsp; </td>

				<td  >$sm &nbsp; </td>



	</tr>";




   }





?>