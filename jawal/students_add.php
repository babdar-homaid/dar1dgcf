<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>
<script type="text/javascript" src="add.js"></script>
<script type="text/javascript" src="jquery.leanModal.min.js"></script>


</head>



<body>
<div id="divv" ></div>


<form id="myform" class='out'>

	الاسم
	<br />
	
<input type="text" name="name" id="name"axlength="5" /><span id ='span_name'></span>
<br />
رقم الهوية
<br />
<input type="text" name="card" id="card" axlength="10"/><span id ='span_card'></span>
<br />
رقم الجوال
<br />
<input type="text" name="jawal" id="jawal" maxlength="10"/><span id ='span_jawal'></span>
<br />


<?php
 require_once ('../config.php');
 
   
@$admincp=$_COOKIE["admincp"];

 
 
echo " الحلقة 
<br />

<select name='school' id ='elect'>
";
echo $query_555 = "  SELECT * FROM `Teacher` WHERE  name ='$admincp'";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
while ($line_555 = mysql_fetch_object($result_555)){
	$card=$line_555->card;
echo "	<option value='$line_555->School'>$line_555->School</option>
";

}

echo "</select>
<br />


";



echo "<input type='hidden' name='teacher'  value='$card'/>	";

?>
<input id="button" type="button"   value="أدخل"  />

</form>
<div id ='lo' ></div>
</body>
</html>


