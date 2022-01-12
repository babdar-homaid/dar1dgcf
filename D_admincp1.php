
<?php
require_once ('config.php');
$name=@$_POST[name];
$jawal=@$_POST[jawal];
$date_a=@$_POST[date_a];
$cp=@$_POST[cp];
$password=@$_POST[password];
$D_sector=@$_POST[D_sector];


 //Security($name);



IF (!$name){echo "<div id='dverr'>لم يتم ادخال الاسم</div>";
}



elseIF (!$password){echo "<div id='dverr'>لم يتم ادخال كلمة المرور</div>";
}
else{
	
		
	
	echo "<div id='dvtrue'> تم ادخال بيانات الموظف /$name بنجاح</div>";
 
     $query2="INSERT INTO `Admin` (`name`,`Password`,cp,jawal)
 VALUES ('$name','$password',$cp,'$jawal')";
$query112=mysql_query($query2);
}
?>
<br />
<div class ='lo'></div>
