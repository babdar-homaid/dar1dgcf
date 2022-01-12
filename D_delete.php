
<?PHP require_once ('config.php');
  
echo "<br/> ";

   $id =$_POST['id'];
         @$cpanl =$_SESSION['cpanl'];

if ($cpanl != 6  ) {
$query = "DELETE FROM reports1  WHERE id = '$id' ";

$result = mysql_query ($query)

  or die ("Query failed");
 
   ?>	

	<div class="container">


  <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
    
تم الحذف بنجاح  <i class="fa fa-trash-o" ></i>
</div>

<?php
}
?>