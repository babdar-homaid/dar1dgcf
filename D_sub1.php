 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="s.css" rel="stylesheet" type="text/css" />

<head>

<?
require_once ('config.php');

$name=@$_POST[name];
 $D_sector=@$_POST[D_sector];


IF (!$name){echo "<div id='dverr'>لم يتم ادخال الاسم</div>";
}

else{
echo "<div id='dvtrue'> تم ادخال  الاسم /$name بنجاح</div>";
   @$query11="INSERT INTO `D_sub` (`name`,sector)
 VALUES ('$name','$D_sector')";
$query111=mysql_query($query11);
}
?>
  <br />
<div class ='lo'></div>
