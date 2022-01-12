
<?
require_once ('config.php');

$name=@$_POST[name];

IF (!$name){echo "<div id='dverr'>لم يتم ادخال الاسم</div>";
}

else{
echo "<div id='dvtrue'> تم ادخال البيانات  /$name بنجاح</div>";
  @$query11="INSERT INTO `Sector` (`name`)
 VALUES ('$name')";
$query111=mysql_query($query11);
}
?>
  <br />
<div class ='lo'></div>
