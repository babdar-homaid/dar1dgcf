<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<head>
<?php

include ("config.php");
require_once ('Blocking.php');
$school=@$_POST[school];
$id=@$_POST[id];
$card_T=@$_POST[card_T];
$id_Sector=@$_POST[id_Sector];
$id_DSector=@$_POST[idD_Sector];

$id_village=@$_POST[id_village];
$id_Mosque=@$_POST[id_Mosque];
$id_Type=@$_POST[id_Type];
$id_School=@$_POST[id_School];
$id_Supervisor=@$_POST[id_Supervisor];
$id_Branches=@$_POST[id_Branches];
$ty=@$_POST[ty];
$id_admin=@$_POST[id_admin];
$idD_sub=@$_POST[idD_sub];



  



if(isset($id)){
	
	$query_5553_952 = "  SELECT * FROM `Teacher` WHERE id = '$id'";
$result_5553_952 = mysql_query ($query_5553_952)
  or die ("Query failed");
$line_5553_952 = mysql_fetch_object($result_5553_952);
	
	
	echo $query_5553_95 = "  SELECT * FROM `Students` WHERE Teacher = '$line_5553_952->card'";
$result_5553_95 = mysql_query ($query_5553_95)
  or die ("Query failed");
  $numm5 = mysql_num_rows($result_5553_95);
;

if($numm5>0){echo"يوجد لدى هذا المعلم طلاب الرجاء نقلهم قبل حذف المعلم أو طي قيده
<div class ='lo'></div>

"; exit;}


		$query_5553 = "  SELECT * FROM `Teacher` WHERE id = '$id'";
$result_5553 = mysql_query ($query_5553)
 or die ("Query failed");
$line_5553 = mysql_fetch_object($result_5553);
	if(isset($card_T)){
	
	

	
 $query12 = "DELETE FROM Teacher WHERE card = '$line_5553->card'";
$query11 = mysql_query($query12) or die("Query failed");

  $query121 = "UPDATE `Admin` SET `cp` = '3', `date_t` = '$ty' WHERE card = '$line_5553->card'";
$query111 = mysql_query($query121) or die("Query failed");
	}
	
 $query = "DELETE FROM Teacher WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
if ($card_T) {$line_5553->card ="";}
   $query212_11 = "DELETE FROM Admin WHERE card = '$line_5553->card'";
$query1212_11 = mysql_query($query212_11) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
}

if(isset($id_Sector)){
	$query212 = "DELETE FROM Sector WHERE id = '$id_Sector'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
if(isset($id_DSector)){
	$query212 = "DELETE FROM D_sector WHERE id = '$id_DSector'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
if(isset($id_village)){
	$query212 = "DELETE FROM Village WHERE id = '$id_village'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
if(isset($id_Mosque)){
	$query212 = "DELETE FROM Mosque WHERE id = '$id_Mosque'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
If(isset($id_Type)){
	$query212 = "DELETE FROM Type WHERE id = '$id_Type'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
If(isset($id_School)){
	$query212 = "DELETE FROM School WHERE id = '$id_School'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
If(isset($id_Supervisor)){
			$query_5553_95 = "  SELECT * FROM `Supervisor` WHERE id = '$id_Supervisor'";
$result_5553_95 = mysql_query ($query_5553_95)
  or die ("Query failed");
$line_5553_95 = mysql_fetch_object($result_5553_95);
	
	$query212 = "DELETE FROM Supervisor WHERE id = '$id_Supervisor'";
$query1212 = mysql_query($query212) or die("Query failed");
 $query212_11 = "DELETE FROM Admin WHERE card = '$line_5553_95->card'";
$query1212_11 = mysql_query($query212_11) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
If(isset($id_Branches)){
	$query212 = "DELETE FROM Branches WHERE id = '$id_Branches'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
if(isset($id_admin)){
	$query212 = "DELETE FROM Admin WHERE id = '$id_admin'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}

if(isset($idD_sub)){
	$query212 = "DELETE FROM D_sub WHERE id = '$idD_sub'";
$query1212 = mysql_query($query212) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
	
}
?>
<div class ='lo'></div>