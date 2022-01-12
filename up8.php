<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="s.css" rel="stylesheet" type="text/css" />


</head>
<?PHP require_once ('login.php');



$Transfer=$_POST['Transfer'];
$id = $_POST['id'];






   $query = "UPDATE reports1 	SET Transfer = '$Transfer' 		WHERE id = '$id'";
$query1 = mysql_query($query) or die("Query failed");
if ($query)
{

  echo "تم التعديل بنجاح
  <head>
<meta http-equiv='Content-Language' content='ar-sa'>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1256'>

</head>

<body topmargin='0' leftmargin='0' rightmargin='0' bottommargin='0' marginwidth='0' marginheight='0'  bgcolor='#F6F3D1'>
	
	<META HTTP-EQUIV='Refresh' CONTENT='4;URL=D_show_mission1.php'>	 ";
    

}

?>