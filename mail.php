<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />



</head>

<?PHP 
$to = 'b@mkka.com'; 
// subject 
$subject = 'send mail with html header'; 
// message 
echo $message = $_POST['message'];

// To send HTML mail, the Content-type header must be set 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
// Mail it 
mail($to, $subject, $message, $headers); 
?>
</table>
<br/>

</body>
</html>
