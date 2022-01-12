<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Progressbar - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 
  <script>
  
  $(function() {
	  
	  
		 
	  function kmt(){
$("#ss").load('2.php #ss')
		  };
		  	setInterval( kmt , 5000);

	kmt();
			});
 

  </script>
</head>
<body>
<?php
 require_once('../config.php');
 
 $query_5553 = "  SELECT * FROM `Teacher` ";
$result_5553 = mysql_query ($query_5553)
  or die ("Query failed");
while ($line_5553 = mysql_fetch_object($result_5553)){
	
echo "
<span id='ss'>$line_5553->name</span>
	
";

}





?>
 
</body>
</html>



