<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cood.js"></script>

<head>
<?php

include ("config.php");
require_once ('Blocking.php');

$school=@$_POST[school];
$id=@$_POST[id];
$card=@$_POST[card];

$line_5 = @mysql_fetch_object($result_5);
   $query_59 = "  SELECT * FROM `Teacher` WHERE  School ='$school' ";
$result_59 = mysql_query ($query_59)
  or die ("Query failed");
  $line_59 = mysql_fetch_object($result_59);
  
if(isset($line_59->name)) {
	
	 
echo " <div id='dverr'> حلقة $line_59->School مسجلة لدى المعلم $line_59->name</div>";	




echo "<div class ='lo'></div>";
	exit;

}
//==================
  echo $query = "UPDATE Teacher 	SET School = '$school' 	WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
 $query121 = "UPDATE `Students` SET  `Teacher` = '$card' WHERE School = '$school'";
$query111 = mysql_query($query121) or die("Query failed");
echo "<div id='dvtrue'>تم التغغير بنجاح</div>";


?>
