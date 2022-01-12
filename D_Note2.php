
<?PHP
ECHO $id=$_GET['id'];
?>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="cood.js"></script>
<div id='divv'></div>
<div id="up99">
<form id="up9" class='out'>
	<input type='' value='<?php ECHO$_GET['id'];?>' name='id'>
	<select name='xd' id ='elect'  class='input-block-level'>
		<option value='تم الرد'>تم الرد</option>
		<option value='لم يتم الرد'>لم يتم الرد</option></select>
	<input type='button' id ='bup9' value='تغيير الحالة'   class='btn btn-large btn-block'>
</form>
</div>
