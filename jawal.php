<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jawal.js"></script>



</head>

<?PHP require_once ('login.php');
require_once ('sms.php');
?>



<BR/>


<?php
ECHO"
 <div class='form-group input-group-lg' align='center' >
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> ارقام المعلمات للمراسلة <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>
  
  </ul>
  <div id ='divv'></div>
  <br/>
عدد رسائل الجوال [$get1]
<table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
			<td >المعلمة</td>

		<td >رقم الجوال</td>
		





	</tr>";


$query_5553 = "  SELECT * FROM `Admin` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "




		<tr>
						<td id='max'>$s&nbsp; </td>
								<td >$line_5553->name &nbsp; </td>

<td  ><a href='#' class='jawal' nm_jawal  = '$line_5553->jawal' >$line_5553->jawal </a></td>






	</tr>";
}
echo"</table>";



?>

 <form id='myformjawal' class='out'>
 الارقام
<br/>
<textarea name='text_jawal' class="text_jawal" class="form-control" rows="5" id="comment"></textarea>
<BR/>
نص الرسالة
<br/>
<textarea name='message' class="message" class="form-control" rows="5" id="comment"></textarea>

<input id='buttonjawal' type='button' class="btn btn-secondary btn-lg btn-block" value='ارسال' />

<div id ='lo'></div></div>
</div></div>


</body>
</html>


