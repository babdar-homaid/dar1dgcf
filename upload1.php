<?PHP require_once ('login.php');


$x = rand(1,100000) ;  
$id=$_POST["id"];

$uplod= "up/".$id."/";
   
$size=$_FILES['file']['size'];
 $type=$_FILES['file']['type'];
 
//if($type=="image/jpeg" and $size<200000){
$move_uploaded_file=  move_uploaded_file($_FILES['file']['tmp_name'],$uplod.$x.$_FILES['file']['name']);
if($move_uploaded_file==1) 
{
	
	echo '			<br/>
	
	<div class="container">
  
  <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong></strong> تم رفع الملف بنجاح
  </div>';
}

else {
echo '<div class="container">
  
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong></strong>  لم يتم رفع الملف
  </div>';
}


?>