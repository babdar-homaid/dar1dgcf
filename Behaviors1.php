<?PHP require_once ('login.php');


 @$Thread1 = $_POST['Thread'];
 @$Thread2 = $_POST['Thread1'];
 @$id = $_GET['id'];

$s=0;
mysql_query("set names 'utf8'");


echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> السلوك : $id       <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>

  </ul>
 

                    <br/>
                                  <br/>
<table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
			   <td >الاسم</td>
		<td >مجموع التقييم</td>
	

	</tr>
";
mysql_query("set names 'latin1'");

      $query1 = "SELECT Number, SUM(Number)  FROM  reports  where  Thread = '$id' ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);



     $query753 = "SELECT D_sector,daten, SUM(Number)   FROM reports  where  Thread = '$id'  GROUP BY  " .   D_sector . " ";
          $result411 = mysql_query($query753);

          $NMB = $row411['SUM(Number)'];
while ($row411 = mysql_fetch_array($result411)){



  
$s++;


                 $name=$row411['D_sector'];


       $sm = $row411['SUM(Number)'];
     $na=$row411['D_sector'];


               	      $ns=$sm/$NMB*100;
  $ns= round($ns, 2);

echo"
         
	<tr>
				<td id='max'>$s&nbsp; </td>
						

        <td  > $name&nbsp; </td>
        <td > <a href='search5.php?id=$id&id1=$na&suum=$sm ' > $sm&nbsp; </td>
												
        



	
	
	</tr>";

}
echo"</table>

 ";
 ?>
      