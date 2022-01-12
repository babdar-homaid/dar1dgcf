<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<script src="../jquery.js"></script>

<script>

$(function() {

function kmt(){
$('#sp').load('1.php #sp');
};
setInterval( kmt , 5000);

kmt();
});

</script>
</head>
<body>
<?php
/**
 *
 */
class coon {

	public $host;



	public function chik() {

		return $this -> host = fsockopen("www.facebook.com", 80);

	}

}

$op = new coon();

echo $coo = $op -> chik();
if ($coo) {
	echo "<span id ='sp'>متصل بالنت</span>";
} else {
	echo "<span id ='sp'>غير متصل بالنت</span>";
}
?>
