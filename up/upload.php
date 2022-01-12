<?PHP require_once ('login.php');
$id=$_GET["id"];
     mkdir("up/".$id."");

?>
			<br/>
<form method="post" action="upload1.php" enctype="multipart/form-data">
	  <div class="form-group" align="center">
<input type="text" value="<?php echo $_GET["id"];?>" />
	<input type="file" name="file" class="form-control col-xs-4"/>
	<br/>
	<br/>
	<input type="submit" value="تحميل" class="form-control col-xs-10 " />
	<br/>
	<br/>



	
	
</form>
</div>

</div>


