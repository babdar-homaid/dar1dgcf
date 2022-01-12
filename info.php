
<?php
 include ('login.php');

echo "<br/>";



if(@$cp==7){


 echo "

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

       <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"CTWtx3XWEAAbj2j1.jpeg\" alt=\"Los Angeles\" width=\"300\" height=\"200\">
<img src=\"3.jpeg\" alt=\"Los Angeles\" width=\"300\" height=\"200\">


  ";

  ?>
  
<?php
}
if(@$cp==6){


 echo "
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

       <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
     <img src=\"CTWtx3XWEAAbj2j1.jpeg\" alt=\"Los Angeles\" width=\"300\" height=\"200\">
<img src=\"3.jpeg\" alt=\"Los Angeles\" width=\"300\" height=\"200\">
  ";
  echo "";
  echo "  </div> </div >";

  $query_55 = "  SELECT * FROM `reports1`  ";
$result_55 = mysql_query ($query_55)
 or die ("Query failed11");
$numm5 = mysql_num_rows($result_55);
	$query_551 = "  SELECT * FROM `reports`  ";
$result_551 = mysql_query ($query_551)
 or die ("Query failed11");
$numm51 = mysql_num_rows($result_551);
 ?>




  	<div align='center' class='container' >

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">عدد جميع تقييم الشعب <span class="badge badge-success"><?php echo $numm5; ?></span> </a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<p><b>آخر خمس تقييمات <i class="fa fa-caret-square-o-down	Try it" ></i>
</b></p>
<?php  include ('D_Note1.php');?>   


  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">عدد جميع تقييم الطالبات <span class="badge badge-success"><?php echo $numm51; ?></span> </a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<p><b>آخر خمس تقييمات <i class="fa fa-caret-square-o-down	Try it" ></i>
</b></p>

<?php  include ('D_Note4.php');?>   


    </div>
   
</div>
</div>
  	

 <?php 
  
}

?>

	
</html>


