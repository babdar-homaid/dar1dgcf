<?php
ob_start();
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />

<head>

<?php

require_once ('config.php');
$name=@$_POST[name];
$Password=@$_POST[Password];


IF (!$name){echo "<div id='dverr'>لم يتم ادخال الاسم</div>";
}
elseIF (!$Password){echo "<div id='dverr'>لم يتم ادخال كلمة المرور</div>";
}

else{
	//$Password=md5($Password);
	
	$query_555 = "  SELECT * FROM `Admin` WHERE name ='$name' AND Password ='$Password'";
$result_555 = mysql_query ($query_555)
  or die ("Query failed");
$line_555 = mysql_fetch_object($result_555);
 @$line_555->name;
	if(@$line_555->name){
		 $_SESSION['admincp'] = $line_555->name;
		$_SESSION['id'] = $line_555->id;
				$_SESSION['cpanel'] = $line_555->cpanel;

		$expire=time()+60*60*24*30;
			setcookie("admincp", "$line_555->name",$expire);
						setcookie("id", "$line_555->id",$expire);
						setcookie("cp", "$line_555->cp",$expire);
						setcookie("cpanel", "$line_555->cpanel",$expire);

			ob_end_flush();
			echo "
			  <META HTTP-EQUIV='Refresh' CONTENT='3;URL=index.php'>
			
			<div id='dvtrue'> تم دخول /$line_555->name بنجاح  <i class='fa fa-check' style='font-size:24px'></i></div>
			";
			
		;}
	else {
		echo "<div id='dverr'>تأكد من صحة البيانات</div>

      

        ";
	}
}
?>
<br />
<div class ='lo'></div>
<br />
<br />
<br />

                                                              