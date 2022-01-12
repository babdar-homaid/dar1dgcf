
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />

<?php
   require_once ('config.php');
  Security1();
 

   $no=$_POST['no'];
   $ok=$_POST['ok'];
     $id=$_POST['id'];
if($no){
echo "<div id='dvtrue'>تم تقييد الصلاحيات</div><br/>";
}
if($ok){
echo "<div id='dvtrue'>تم فتح الصلاحيات</div><br/>";
}

  $query121 = "UPDATE `Admin` SET `cpanel`='".$no."".$ok."' WHERE id  = '$id'";
$query111 = mysql_query($query121) or die("Query failed");




	
?>

