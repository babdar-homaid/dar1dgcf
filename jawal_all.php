<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="cood.js"></script>

</head>

<?PHP require_once ('login.php');
require_once ('Blocking.php');

CP();
?>

<body>
<div id="divv"></div>

<form id="myform1858" class='out'>
<select name='name' id ='elect'>

 <option value='Students'>جميع الطلاب</option>
<option value='Teacher'>جميع المعلمين والمعلمات</option>
<option value='Teacher_1'>جميع المعلمين </option>
<option value='Teacher_2'>جميع المعلمات</option>
  <option value='Supervisor'>جميع المشرفين</option>
<option value='jawal_k'>جميع الكفلاء</option>
</select>


<br />
   نص الرسالة
<br />
<textarea name='message' class='message'></textarea>
<input id="button1858" type="button"  value="أرسل" />

</form>
<div id ='lo'></div>
</body>
</html>


