<?php
ob_start();  
?>

<?php
 require_once ('login.php');
  $admincp=$_COOKIE["admincp"];
  
 echo "
 <br/>
 	<div align='center' class='container' >
  			  <div class='well'>
 تم تسجيل خروج
 
 
  $admincp
 ";

setcookie("admincp", "", time()-42000);
setcookie("cp", "", time()-42000);
setcookie("id", "", time()-42000);
echo "		 <META HTTP-EQUIV='Refresh' CONTENT='2;URL=index.php'>";

?>
