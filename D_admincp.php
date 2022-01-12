
<?PHP require_once ('login.php');




?>

<body>
	<br/>
		<div align='center' class='container' >
		 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">   اضافة مستخدمين <i class="fa fa-arrow-circle-left"></i>
</a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	<div align='center' class='container' >
<div class='well'>
<div id="divv"></div>


<form id="D_fadmincp" class='out'>
الحالة 
<br />
  <div class='form-group input-group-lg'>

<select name='cp' id ='elect' class='input-block-level' >
	<option value='7'>معلمة</option>

	<option value='6'>مشرفة</option>

</select>


الاسم
	
	

<br />
<input type="text" name="name" id="name"class='input-block-level'  />
<br />
الجوال

<br />
<input type="text" name="jawal" id="name"class='input-block-level'  />
<br />
كلمة المرور
<br />
<input name='password'type="password" id="password"  class='input-block-level' />
<br />

<input id="D_badmincp" type="button" class='btn btn-large btn-block'  value="ادخل" />
</div>

</form>
</div>
<form id="myform27" class='out'>
		<div align='center' class='container' >
		 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">   لحذف المستخدمين <i class="fa fa-trash"></i>
</a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
 <div class='well' style="background-color: silver">

<div id='sl' class='out'>
</div>


<?php


echo "
<br/>

<select name='id_admin' class='input-block-level' id ='elect'>


";
$query_5553 = "  SELECT * FROM Admin WHERE cp IN ('6','7')";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "
	<option value='$line_5553->id'>$line_5553->name </option>	
";

}

echo "</select>

<br />
";


?>
<input id="button27" type="button" class='btn btn-large btn-block'   value="حذف" />
</form>
</div>
<div id ='lo'></div>
</body>
</html>
