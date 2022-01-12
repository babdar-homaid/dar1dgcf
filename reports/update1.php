
<?PHP require_once ('config.php');
echo "<br/>";
@$Number=$_POST['Number'];
//$datee=$_POST['datee'];
@$D_sector=$_POST['D_sector'];
$Thread=$_POST['Thread'];
@$Transfer=$_POST['Transfer'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$date3=$_POST['date3'];

$date1e=$_POST['date1e'];
$date2e=$_POST['date2e'];
$date3e=$_POST['date3e'];
$D_sector=$_POST['D_sector'];
$date20=$_POST['date20'];


	        function GetTotalDay($date55)
{
        list($year, $month,$day ) = explode('-', $date55);

        $date155 = @mktime(0, 0, 0, $month, $day, $year);
        $date255 = @mktime(0, 0, 0, date('m'), date('d'), date('Y'));

      $total_days = round((($date155 - $date255)/86400), 0);


        return $total_days;
}
 

$datee="$date1/$date2/$date3";
$admincp=$_COOKIE["admincp"];
include 'arabicTools.class.php';


//$daten= ArabicTools::dateHejri2Geo($datee);
$daten= date('Y-m-d');

$query_555554 = "  SELECT *  FROM Admin  WHERE  name = '$Transfer' ";
$result_555554 = mysql_query ($query_555554)
  or die ("Query failed");
$line_555554 = mysql_fetch_object($result_555554);


       include('ArDate.class.php');
          $time = time();
$x = new ArDate(1);

$nameday=date("l"); 

switch ($nameday) 
{ 
case "Saturday": 
$nameday="السبت"; 
break; 
case "Sunday": 
$nameday="الأحد"; 
break; 
case "Monday": 
$nameday="الاثنين"; 
break; 
case "Tuesday": 
$nameday="الثلاثاء"; 
break; 
case "Wednesday": 
$nameday="الأربعاء"; 
break; 
case "Thursday": 
$nameday="الخميس";
break; 
case "Friday": 
$nameday="الجمعة"; 
break; 
}  

            $query_1 = "  SELECT *  FROM reports1  WHERE  `daten` = '$daten' and admin ='$admincp' and D_sector='$D_sector'  and Thread='$date3e' ORDER BY id DESC";
$result_1 = mysql_query ($query_1)
  or die ("Query failed42453245");
$line1 = mysql_fetch_object($result_1);
               $What1 = $line1->What;
               $da = $line1->dateR;

               $id5 = $line1->id;
    $What9 = GetTotalDay($daten);

  if ($What1 > $What9 and $id5>=1 ){

          echo'<div class="container">


  <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
لايمكن تكرار تقييم الشعبة والسلوك ذاته مرة أخرى إلا بعد أسبوع   </div>'; exit; }
 @$query = "INSERT INTO `reports1` (`id`, `xd`, `text1`, `Number`, `datee`, `Thread`, `Transfer`, `What`, `admin`, `date1`, `daten`, `Today`,dateR,D_sector) VALUES
  (NULL, 'إنتظار', 'text1', '$date1e', '$date20', '$date3e', '$Transfer',' 56', '$admincp', NULL, SYSDATE() , '$nameday','$daten','$D_sector');
";
$result = mysql_query ($query)
  or die ("Query failed111");if ($result)
  {
?>
<div class="container">


  <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>

تم الإدخال بنجاح
  </div>
<?php

}
?>