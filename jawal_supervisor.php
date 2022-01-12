<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jawal.js"></script>



</head>

<?PHP require_once ('login.php');
CP();
?>

<div id ='divv'></div>



<?php
ECHO"الطلاب
<BR/>
<span class='OPEN_Students'>فتح</span>-- <span class='CLOS_Students'>اغلاق</span>
";

$query_5553 = "  SELECT * FROM `Students` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "

<div style='display: none'class ='Students'>
<a href='#' class='jawal' nm_jawal  = '$line_5553->jawal' >	$line_5553->jawal </a>
</div>
";

}
ECHO"المعلمون";
$query_555 = "  SELECT * FROM `Teacher` ";
$result_555 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){
	
echo "
<div>
$line_555->name--


<a href='#' class='jawal' nm_jawal  = '$line_555->jawal' >	$line_555->jawal </a>
</div>
";

}



?>
 <form id='myformjawal' class='out'>

<textarea name='text_jawal' class="text_jawal"></textarea>
<BR/>
<textarea name='message' class="message"></textarea>

<input id='buttonjawal' type='button'  value='goo' />

<div id ='lo'></div>
</body>
</html>


