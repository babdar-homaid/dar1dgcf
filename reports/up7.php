<?php
include ("../logn.php");
include ("../config.php");
include ("had.php");




$tax=$_POST['tax'];
$id = $_POST['id'];






 echo  $query = "UPDATE reports1 	SET What = '$tax' 		WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
if ($query)
{

  echo "تم التعديل بنجاح
  <head>
<meta http-equiv='Content-Language' content='ar-sa'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

</head>

<body topmargin='0' leftmargin='0' rightmargin='0' bottommargin='0' marginwidth='0' marginheight='0'  bgcolor='#F6F3D1'>
	
	<META HTTP-EQUIV='Refresh' CONTENT='4;URL=index.php'>	 ";
    

}

?>