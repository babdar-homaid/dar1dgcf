

<?PHP require_once ('login.php');



?>

<body>
  <br/>
	<div align='center' class='container' >
		 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"> اضافة السلوكيات <i class="fa fa-arrow-circle-left"></i>
</a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
		  		  <div class='well'>

  <div class='form-group input-group-lg'>
<div id="divv"></div>

<form id="myform11" class='out'>
	السلوك 
	<br />
<input type="text" name="name" id="name" class='input-block-level' /><span id ='span_name'></span>

<br />

<input id="button11" type="button"  value="ادخل" class='btn btn-large btn-block' />

</form>
</div>
</div>

<div id='sl' class='out'>
		<div align='center' class='container' >
		 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"> لحذف السلوكيات <i class="fa fa-trash"></i>
</a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	  <div class='well' style="background-color: silver">

<form id="myform21" class='out'>

<?php


echo "

<br />
<select name='id_Sector' id ='elect' class='input-block-level'>


";
$query_5553 = "  SELECT * FROM `Sector` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "
	<option value='$line_5553->id'>$line_5553->name - $line_5553->School</option>	
";

}

echo "</select>

<br />
";


?>
<input id="button21" type="button"  value="حذف" class='btn btn-large btn-block' />
</div>
</form>

</div>
<div id ='lo'></div>
</body>
</html>


