<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link href='s.css' rel='stylesheet' type='text/css' />

<head>

<?php
 require_once ('config.php');


 echo $Mobile=@$_POST[text_jawal];
 $message=@$_POST[message];
 echo "تم إرسال الرسالة $message بنجاح";
     require_once ('sms.php');
  
 SMS($USERNAME, $PASSWORD, $Mobile, $ORIGIN_ADDR, $TYPE, $message);
echo"			  <META HTTP-EQUIV='Refresh' CONTENT='3;URL=index.php'>
";
?>
