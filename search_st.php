
<?PHP require_once ('login.php');


$s=0;
 @$name = $_POST['name'];

echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\">نتيجة البحث <i class=\"fa fa-search\"></i>
    </a></li>
  
  </ul>



<table  class='table table-striped'  border='1'>
	<tr>
			<td id=''>م</td>
			   <td >اسم الطالبة</td>
		<td > الرقم الاكاديمي</td>
		<td > تقييم الطالبة </td>

	</tr>
";


mysql_query("set names 'utf8'");


	    

        $query_5 = "  SELECT sh,name,id FROM `st` WHERE name like '%$name%' or id = '$name' "; 
$result_5 = mysql_query ($query_5)
 or die ("Query failed11");
while ($numm = mysql_fetch_array($result_5)){
	  $ss++;
echo "	

		<tr>
						<td id=''>$ss&nbsp; </td>
								<td > $numm[name]&nbsp; </td>

				<td  >$numm[id] &nbsp; </td>
				<td  ><a href='D_add_mission2.php?id=$numm[id]' > انقر هنا&nbsp; </td>


	</tr>";

}

?>