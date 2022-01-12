<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />

<head>

<?
require_once ('config.php');
$name=@$_POST[name];
$jawal=@$_POST[jawal];
$date_a=@$_POST[date_a];
$cp=@$_POST[cp];
$password=@$_POST[password];
 //Security($name);
require_once ('Blocking.php');


IF (!$name){echo "<div id='dverr'>لم يتم ادخال الاسم</div>";
}


elseIF (!$jawal){echo "<div id='dverr'>لم يتم ادخال رقم الجوال</div>";
}
elseIF (!$password){echo "<div id='dverr'>لم يتم ادخال كلمة المرور</div>";
}
else{
	
		
	$password=md5($password);
	echo "<div id='dvtrue'> تم ادخال بيانات المشرف /$name بنجاح</div>";
 
  @$query2="INSERT INTO `Admin` (`name`,`Password`,cp,jawal,card,cpanel)
 VALUES ('$name','$password','$cp','$jawal','$name',2)";
$query112=mysql_query($query2);
}
?>
<br />
<div class ='lo'></div>
