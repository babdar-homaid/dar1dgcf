<?PHP require_once ('login.php');


$s=0;
 @$id = $_GET['id'];
 @$sh = $_GET['sh'];

echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> طالبات الشعبة <i class=\"fa fa-street-view\" style=\"font-size:20px\"></i>
    </a></li>
    </ul>
  <br/>



<table  class='table table-striped'  border='1'>
	<tr>
			<td id=''>م</td>
			   <td >اسم الطالبة</td>
		<td > الصف </td>
		<td > تقييم الطالبة الطالبة </td>

	</tr>
";



mysql_query("set names 'utf8'");

	    

        $query_5 = "  SELECT sh,name,id,st FROM `st` WHERE st = '$id' and sh=$sh"; 
$result_5 = mysql_query ($query_5)
 or die ("Query failed11");
while ($numm = mysql_fetch_array($result_5)){
	  $ss++;
echo "	

		<tr>
						<td id=''>$ss&nbsp; </td>
								<td > $numm[name]&nbsp; </td>

				<td  >$numm[st] ($numm[sh])&nbsp; </td>
				<td  ><a href='D_add_mission2.php?id=$numm[id]' > انقر هنا&nbsp; </td>


	</tr>";

}

?>