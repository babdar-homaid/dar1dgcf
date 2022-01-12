<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="s.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jawal.js"></script>



</head>

<?PHP require_once ('login.php');

 @$Thread1 = $_GET['Thread'];
 @$Thread2 = $_GET['Thread1'];
     @$name = $_GET['id'];

$s=0;
echo "

<br/>
<div align='center' class='container' >
		 <ul class=\"nav nav-tabs\">
    <li class=\"active\"><a data-toggle=\"tab\" href= \"#home\"> تفاصيل تقييم معلمة <i class=\"fa fa-arrow-circle-left\"></i>
    </a></li>
  
  </ul><table  class='table table-striped'  border='1'>
	<tr>
			<td id='max'>م</td>
      <td > الطالبة</td>

    <td > السلوكيات</td>

				<td > درجة التقييم</td>

				<td >تاريخ التقييم</td>




<td >المقيم</td>





	</tr>";
	
	        function GetTotalDay($date55)
{
        list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
        


  $sql1 = "select * from reports  where admin ='$name' ";
 $row1=mysql_query($sql1);
while ($lin = mysql_fetch_array($row1)) {
$s++;
    $Number = $lin['Number'];
    $datee = $lin['datee'];
    $Theee = $lin['Theee'];
    $Thread = $lin['Thread'];
    $Transfer = $lin['Transfer'];
    $What = $lin['What'];
    $id = $lin['id'];
    $admin = $lin['admin'];
    $date1 = $lin['date1'];
        $Today = $lin['Today'];
        $D_sector = $lin['D_sector'];
                 $xd = $lin['xd'];
                 @$tax = $lin['tax'];
                 $date_bd = $lin['datee'];

        $daten = $lin['daten'];

   $days = GetTotalDay($date1);

   $daten1 = GetTotalDay($daten);


   $sum = $daten1;

  if ($daten1 <=0 ){
  	$days1 = "منتهي ";
    $sum = "منتهي ";
  	}
$clar10 = "id='a200' ";
$cp11="";

  if ($xd==4 ){
  	$xd = "أفاد الموظف ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

  if ($xd==1 or !$xd  ){
  	$xd = "انتظار ";
    $clar10 = " bgcolor='#FFFFFF' ";

         }

           if ($xd=='تم الرد' ){

    $clar10 = " bgcolor='#00FF00' ";

         }
                    if ($xd=='لم ينجز' ){

    $clar10 = " bgcolor='#FF0000' ";

         }
                    if ($xd=='تأجل' ){

    $clar10 = " bgcolor='#FFFF00' ";

         }

    echo "



		<tr>
						<td id='max'>$s&nbsp; </td>

        <td  >  $D_sector&nbsp; </td>
        <td  >  $Thread&nbsp; </td>

												<td > $Number&nbsp; </td>


						<td > $daten&nbsp;</a></td>





		<td>$admin&nbsp; </td>





	</tr>";
}
echo"</table>



";

      $query1 = "SELECT Number, SUM(Number)  FROM  reports   ";
$result411 = mysql_query($query1);
$row411 = mysql_fetch_array($result411);



     $query753 = "SELECT D_sector, SUM(Number)   FROM reports where  D_sector ='$name' GROUP BY " .   admin . " ";
          $result411 = mysql_query($query753);

          $NMB = $row411['SUM(Number)'];
while ($row411 = mysql_fetch_array($result411)){




       $ss++;





       $sm = $row411['SUM(Number)'];
     $na=$row411['admin'];

               	      $ns=$sm/$NMB*100;
  $ns= round($ns, 2);

echo "

		<tr>
						<td >  $na&nbsp; </td>

				<td  >$sm &nbsp; </td>



	</tr>";




   }





?>