<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="s.css" rel="stylesheet" type="text/css" />
<?php
 require_once ('login.php');


    $name_admin =$_GET['name_admin'];
    $id =$_GET['id'];

        $admin_id =$_GET['admin_id'];

  $cpanl =$_SESSION['cpanl'];

$query = "DELETE FROM Supervisor_Sector WHERE id = '$id' ";

$result = mysql_query ($query)

or die ("Query failed");
   if ($query) {
 print "
<head>
<meta http-equiv='Content-Language' content='en-us'>
</head>


	
		<p align='center'><span lang='ar-sa'>
		<font color='#FF0000' size='4' face='Tahoma'><b>تم الحذذف بنجاح</b></font></span></p>
	

  <META HTTP-EQUIV='Refresh' CONTENT='4;URL=index.php'>

";
   }



?>