
<?PHP require_once ('login.php');
      echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\">المقيمات<i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>

  </ul><table  class='table table-striped'  border='1'>
	<tr>
          		<td > مسلسل</td>

		<td > الاسم</td>






	</tr>";



     $query753 = " SELECT DISTINCT admin FROM reports1 ";
          $result411 = mysql_query($query753);


while ($row411 = mysql_fetch_array($result411)){




       $ss++;



          $na=$row411['admin'];


      echo "



		<tr>

<td  >  $ss&nbsp; </td>
 <td  >  $na&nbsp; </td>





	</tr>";
}
echo"</table>";








?>