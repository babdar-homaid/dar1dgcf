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

<?php

require_once ('config.php');
  @$admincp=$_COOKIE["admincp"];
@$id=$_COOKIE["id"];
  $query_5556 = "  SELECT * FROM `Admin` WHERE name ='$admincp' and id ='$id'";
$result_5556 = mysql_query ($query_5556)
  or die ("Query failed");
$line_5556 = mysql_fetch_object($result_5556);

 if(!isset($line_5556->name)){require_once ('admin.php');

 	exit;
 
 }
$admincp=$_COOKIE["admincp"];
 function CPP()
 {@$cp=$_COOKIE["cp"];if(@$cp==2 ){
 			echo "ليس لديك صلاحة
";
 	
 exit;}
  	
     
 }
 function CP()
 {@$cp=$_COOKIE["cp"];
 if(@$cp==2 or$cp==4){
 			echo "ليس لديك صلاحة
";
 	
 exit;}
  	
     
 }
  @$cp=$_COOKIE["cp"];




  if(@$cp==6){

?>
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
			
<li><a href="D_sector.php"><i class="fa fa-users" aria-hidden="true"></i> إدخال الشعب </a></li>
<li><a href="sector.php"><i class="fa fa-exchange" aria-hidden="true"></i> إدخال السلوكيات </a></li>
<li><a href="Behaviors.php"><i class="fa fa-exchange" aria-hidden="true"></i>  السلوكيات </a></li>

<li><a href="D_admincp.php"><i class="fa fa-user-plus" aria-hidden="true"></i> ادخال معلمة</a></li>
<li><a href="D_show_mission4.php"><i class="fa fa-file-text" aria-hidden="true"></i> استعراض التقييم</a></li>
<li><a href="index3.php"><i class="fa fa-file-text" aria-hidden="true"></i> تقيم المعلمات </a></li>

<li><a href="date3.php"><i class="fa fa-search" aria-hidden="true"></i> بحث بين تاريخين </a></li>

<li><a href="jawal.php"><i class="fa fa-comment-o	Try it" aria-hidden="true"></i> رسائل الجوال</a></li>




			
				<li><a href="dl_co.php"><i class="fa fa-power-off" aria-hidden="true"></i>
 خروج</a></li>

			</ul>
			</div>
			
	</nav>
			</div>

	<!--نهاية النفبار للهيدر-->

</header>


<?PHP
}
 if(@$cp==7){

?>
<!--بداية النفبار للهيدر-->
		<div class="navbar-inner">

	<nav class="navbar navbar-static-top " align="">
		 <div id="hed"><i class="fa fa-mobile" style="font-size:36px"> </i></div>

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
			
<li><a href="D_add_mission1.php"><i class="fa fa-align-right" aria-hidden="true"></i>
تقييم شعبة	<li><a href="D_show_mission.php"><i class="fa fa-file-text" aria-hidden="true"></i>
  استعراض التقييم
 </a></li>
		<li><a href="D_show_mission5.php"><i class="fa fa-child	Try it" aria-hidden="true"></i>

 تقييم طالبة </a></li>
 <li><a href="D_show_mission7.php"><i class="fa fa-file-text" aria-hidden="true"></i>
 استعراض التقييم</a></li>	
<li><a href="dl_co.php"><i class="fa fa-power-off" aria-hidden="true"></i>
 خروج</a></li>

	<form class="navbar-form pull-right" action="search_st.php" method="post">
			<div class="input-prepend">
 <button class="btn btn-default" type="submit">
      <i class="fa fa-search" aria-hidden="true"></i>
</span>
      </button>
</span>
   <input type="text" class="span3 " name="name" placeholder="بحث باسم الطالبة   ">


</form>
			</ul>
			</div>
	</nav>
			</div>

	<!--نهاية النفبار للهيدر-->

</header>


<?PHP
}
 
?>
