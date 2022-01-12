<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />

<head>

<?php
include ("config.php");
require_once ('Blocking.php');

 $id_T=@$_POST[id_T];
  $id_TT=@$_POST[id_TT];
    $id_TTT=@$_POST[id_TTT];
	    $id_TTTT=@$_POST[id_TTTT];
	    $id_admincp=@$_POST[id_admincp];

if(isset($id_TTT)){
	
		$query_5553 = " DELETE FROM Degrees WHERE id = '$id_TTT'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");

}
if(isset($id_T)){
	
		$query_5553 = " DELETE FROM Students WHERE id = '$id_T'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");

}

if(isset($id_TT)){
	
		$query_5553 = " DELETE FROM Admin WHERE card = '$id_TT'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
  	$query_55532 = " DELETE FROM Teacher WHERE card = '$id_TT'";
$result_55532 = mysql_query ($query_55532)
  or die ("Query failed");

}
if(isset($id_TTTT)){
	
	$query_5553 = " DELETE FROM Admin WHERE card = '$id_TTTT'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
  	 $query_55532 = " DELETE FROM Supervisor WHERE card = '$id_TTTT'";
$result_55532 = mysql_query ($query_55532)
  or die ("Query failed");

}
if(isset($id_admincp)){
	
		 $query_5553 = " DELETE FROM Admin WHERE id = '$id_admincp'";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");

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
 
 */