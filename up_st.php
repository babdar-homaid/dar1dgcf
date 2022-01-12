<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cood.js"></script>

<head>
<?php
include ("config.php");
require_once ('Blocking.php');

$name=@$_POST[name];
$card=@$_POST[card];
$jawal=@$_POST[jawal];
$jawal_k=@$_POST[jawal_k];
echo $name_k=@$_POST[name_k];

  $S=@$_POST[S];
$card_m=@$_POST[card_m];
$id=@$_POST[id];

$Password=@$_POST[Password];

IF($S==1){

echo "<div id='dvtrue'> تم تعديل البيانات بنجاح </div>";

  $query121 = "UPDATE `Students` SET `card` = '$card', `name` = '$name' , `jawal` = '$jawal', jawal_k='$jawal_k' , name_k='$name_k' WHERE id = '$id'";
$query111 = mysql_query($query121) or die("Query failed");
}
  


IF($S==2){


echo "<div id='dvtrue'> تم تعديل البيانات بنجاح </div>";


   $query1211 = "UPDATE `Students` SET `Teacher` = '$card'  WHERE Teacher  = '$id'";
$query1111 = mysql_query($query1211) or die("Query failed");
       if($card_m!=null){ 	$car_n=", `card_m` = '$card_m'";}

  $query121 = "UPDATE `Teacher` SET `card` = '$card', `name` = '$name' , `jawal` = '$jawal' $car_n WHERE card  = '$id'";
$query111 = mysql_query($query121) or die("Query failed");
       if($Password!=null){ 	$Password=md5($Password);
 $pas=",Password='$Password'";}
 $query1212 = "UPDATE `Admin` SET `card` = '$card', `name` = '$name' $pas , `jawal` = '$jawal' $car_n  WHERE card  = '$id'";
$query1112 = mysql_query($query1212) or die("Query failed");

}
IF($S==3){
  if($Password!=null){ 	$Password=md5($Password);
 $pas=",Password='$Password'";}
 echo"<div id='dvtrue'> تم تعديل البيانات بنجاح </div>";

  $query121 = "UPDATE `Supervisor` SET `card` = '$card', `name` = '$name' , `jawal` = '$jawal'  WHERE card  = '$id'";
$query111 = mysql_query($query121) or die("Query failed");
         if($Password){ $pas=",Password='$Password'";}
  $query1212 = "UPDATE `Admin` SET `card` = '$card', `name` = '$name' $pas , `jawal` = '$jawal' , `card_m` = '$card_m' WHERE card  = '$id'";
$query1112 = mysql_query($query1212) or die("Query failed");
}



IF($S==4){
$Type=@$_POST[Type];

echo "<div id='dvtrue'> تم تعديل البيانات بنجاح </div>";


    $query1211 = "UPDATE `Students` SET `Type` = '$Type'  WHERE Teacher  = '$id'";
$query1111 = mysql_query($query1211) or die("Query failed");

  $query121 = "UPDATE `Teacher` SET `Type` = '$Type' WHERE card  = '$id'";
$query111 = mysql_query($query121) or die("Query failed");

 $query1212 = "UPDATE `Admin` SET `Type` = '$Type' WHERE card  = '$id'";
$query1112 = mysql_query($query1212) or die("Query failed");
}
?>
<?php
/*


$school=@$_POST[school];
$id=@$_POST[id];
$card_T=@$_POST[card_T];
$id_Sector=@$_POST[id_Sector];
$id_village=@$_POST[id_village];
$id_Mosque=@$_POST[id_Mosque];
$id_Type=@$_POST[id_Type];
$id_School=@$_POST[id_School];






if(isset($id)){
	if(isset($card_T)){
		$query_5553 = "  SELECT * FROM `Teacher` WHERE id = '$id'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
$line_5553 = mysql_fetch_object($result_5553);
	

	
		 $query12 = "DELETE FROM Teacher WHERE card = '$line_5553->card'";
$query11 = mysql_query($query12) or die("Query failed");

 $query121 = "DELETE FROM Admin WHERE card = '$line_5553->card'";
$query111 = mysql_query($query121) or die("Query failed");
	}
 $query = "DELETE FROM Teacher WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
echo "<div id='dvtrue'>تم الحذف بنجاح</div>";
}

if(isset($id_Sector)){
	$query212 = "DELETE FROM Sector WHERE id = '$id_Sector'";
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
?>
<div class ='lo'></div>
 * /
 
