<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link href='s.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript' src='add11.js'></script>
</head>

<?php

 require_once ('login.php');

 $id=@$_GET[id];

echo"
<div id='div'></div>

<form id='myform_jawal'   class='out'>
<input type='hidden' name='text_jawal' id='id_jawall' value='$id' >
نص الرسالة
<br />
<textarea name='message' class='message'></textarea>
<input id='bmyform_jawal' type='button'  value='ارسال' />
</form>

";
?>

<div id ='lo'></div>


<!-- <a  href='#' id_up ='$line_55531->card'  class='up_t'>(تغيير حلقة)</a> -->



