
<?PHP require_once ('login.php');


$s=0;
echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> الشعب <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>
  
  



<table  class='table table-striped'  border='1'>
	<tr>
			<td id=''>م</td>
			   <td >الشعبة</td>
		<td > عدد الطالبات</td>

	</tr>
";




$query_555554 = "  SELECT name ,su,id FROM `D_sector` ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
while ($line_555554 = mysql_fetch_array($result_555554)) {
	      $ss++;
$id =$line_555554[id];
        $query_5 = "  SELECT sh FROM `st` WHERE sh = '$id' "; 
$result_5 = mysql_query ($query_5)
 or die ("Query failed11");
$numm = mysql_num_rows($result_5);
echo "	

		<tr>
						<td id=''>$ss&nbsp; </td>
								<td > $line_555554[name]&nbsp; </td>

				<td  ><a href='D_show_mission6.php?id=$id' >انقر هنا &nbsp; </td>


	</tr>";

}

?>