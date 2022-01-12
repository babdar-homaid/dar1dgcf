<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />




</head>




<div id ='divv'></div>



<?php
 require_once ('config.php');
 require_once ('Blocking.php');
 require_once ('sms.php');



$name=@$_POST[name];
    $message=@$_POST[message];

if ($name=="Students") {
       ECHO"تم إرسال رسالة لجميع الطلاب";

 $query_5553 = "  SELECT * FROM `Students` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){


  $Mobile = preg_replace('/^0/', '966', "$line_5553->jawal"); // رقم المستقبل
@SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);

}
}



if ($name=="Teacher") {
ECHO"تم إرسال رسالة لجميع المعلمين والمعلمات";

$query_555 = "  SELECT * FROM `Admin` WHERE Type in(1,2) ";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){

 $Mobile = preg_replace('/^0/', '966', "$line_555->jawal"); // رقم المستقبل
 @SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);

}
 }



if ($name=="Teacher_1") {
ECHO"تم إرسال رسالة لجميع المعلمين";

$query_555 = "  SELECT * FROM `Admin` WHERE Type =1 ";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){

 $Mobile = preg_replace('/^0/', '966', "$line_555->jawal"); // رقم المستقبل
 @SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);

}
 }
 
 
 if ($name=="Teacher_2") {
ECHO"تم إرسال رسالة لجميع المعلمات";

$query_555 = "  SELECT * FROM `Admin` WHERE Type =2 ";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){

$Mobile = preg_replace('/^0/', '966', "$line_555->jawal"); // رقم المستقبل
 @SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);

}
 }


 if ($name=="Supervisor") {

ECHO"تم إرسال رسالة لجميع المشرفين";
$query_55 = "  SELECT * FROM `Supervisor` ";
$result_55 = mysql_query ($query_55)
  or die ("Query failed");
while ($line_55 = mysql_fetch_object($result_55)){

 $Mobile = preg_replace('/^0/', '966', "$line_55->jawal"); // رقم المستقبل


@SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);
}
 }




 if ($name=="jawal_k") {
       ECHO"تم إرسال رسالة لجميع الكفلاء";

 $query_5553 = "  SELECT * FROM `Students` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){


    $Mobile = preg_replace('/^0/', '966', "$line_5553->jawal_k"); // رقم المستقبل
 @SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);
}
}

?>



