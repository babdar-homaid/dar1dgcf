<?php
include ("../logn.php");
include ("../config.php");
include ("had.php");
$Number=$_POST['Number'];
$datee=$_POST['datee'];
$Theee=$_POST['Theee'];
$Thread=$_POST['Thread'];
$Transfer=$_POST['Transfer'];
 $admin=$_SESSION['admin'];

 $query = "INSERT INTO  reports1 (`Number` ,`datee` ,`Theee`,Thread,Transfer,admin,date1)VALUES 
('$Number', '$datee','$Theee','$Thread','$Transfer','$admin',sysdate());
";
$result = mysql_query ($query)
  or die ("Query failed111");if ($result)
  {
	echo "
تم الادخال بنجاح لحظة من فضلك



		 <META HTTP-EQUIV='Refresh' CONTENT='4;URL=index.php'>";
	
}
?>