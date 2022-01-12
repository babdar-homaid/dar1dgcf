<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="../s.css" rel="stylesheet" type="text/css" />


</head>
<?php
include ("../config.php");

class AksidSars
{

    var $asarsi; // متغير اسم المجلد
    var $amchan; //رابط الصفحة
    var $thwara; //عدد الحقول
    // var $ansaq;  // الأنساق
    //var $ansaqimages;   // انساق الصور
    var $isam; // اسم الصورة
    // var $baddarisam;  // بعد تغيير الاسم
    var $linksite; // رابط الموقع
    //  var $tashfir;     // اختيار نوع اسم الصورة md5 او time


    function thwara()
    { //thwara بداية
    	$SCHOOLNUMZ=$_GET['id'];
    	$get="?id=$SCHOOLNUMZ";
        echo '<table align="center" id="table11"><tr><td id="table11"><FORM name="Nadorino" action="' . $this->
            amchan .$get. '" method="post"  encType="multipart/form-data"> ';
        for ($i = 0; $i < $this->thwara; $i++) { //بداية for
            echo '<input type="file" name="file' . $i . '">';
        } // نهاية for
        echo '<center><input type="submit" value=" رقع نسخة PDF "></form></td></tr></table>';
    } //thwara نهاية
    function aksid()
    { //Aksid بداية
        if (file_exists($this->asarsi)) { //بداية التحقق من المجلد هل هو موجود ام لا
            //يبقى فارغا اذا كان المجلد موجود
            for ($i = 0; $i < $this->thwara; $i++) { // for بداية
                $this->baddarisam = @explode(".", $_FILES['file' . $i]['name']);
                $this->baddarisam = $this->baddarisam[count($this->baddarisam) - 1];

                if ($this->tashfir == "time") { //if($this->tashfir == "time"){
                    $zaid = time() + $i;
                    //$this->baddarisam=$this->isam.$zaid.".".$this->baddarisam;
                } else {
                	$SCHOOLNUMZ=$_GET['id'];
             
                    $mdb = "pdf"; // كتابة امتداد القاعدة
                    $name1 = "$SCHOOLNUMZ"; // تغيير اسم القاعدة
                    $zaid = md5(time());
                    $zaid = substr($zaid, 0, 10);
                    $this->baddarisam = $name1 . "." . $mdb;
                } //if($this->tashfir == "time"){
                if (empty($_FILES['file' . $i]['tmp_name'])) { // التحقق من الملف هل هو فارغ
                    // فارغ

                } else {


                    if (in_array($_FILES['file' . $i]['type'], $this->ansaq)) {
                        echo '<table align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black"><tr><td width="500">صيغة غير مدعومة</td></tr></table>';
                    } else {


                        $file = move_uploaded_file($_FILES['file' . $i]['tmp_name'], $this->asarsi . "/" .
                            $this->baddarisam);
                        if ($file) { //if بداية
                            echo '<table align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black"><tr><td width="260"><center>..تم تحميل الملف بنجاح<br>';
                            '<center><a href="' . $this->linksite . $this->asarsi . "/" . $this->baddarisam .
                                '" target="_blank">' . $this->baddarisam . '</a><br>';
                            '<textarea cols=60 rows=1>' . $this->linksite . $this->
                                asarsi . "/" . $this->baddarisam . '</textarea>';
                            $this->ansaqimages = array("image/png", "image/gif", "image/jpg", "image/pjpeg",
                                "imge/mdb");

                        } else {
                            echo '<table align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" ><tr><td width="500">خطأ... لم يتم تحميل الملف  لاسباب غير معروفة</td></tr></table>';
                        } // if نهاية

                    } // if نهاية total
                } // التحقق من الملف هل هو فارغ   نهاية
            } // نهاية for

        } // نهاية التحقق من الملف
        else // نهاية التحقق من الملف
            { // نهاية التحقق من الملف
            $jadid = mkdir($this->asarsi);
            if ($jadid) { //بداية التحقق من انشاء مجلد جديد
                echo "لقد تم انشاء مجلد جديد";
            } else {
                echo " <font color=red><b>ظروري انشاء مجلد<b></font>" . $this->asarsi .
                    "  لم يتم انشاء مجلد جديد لاسباب لا اعرفها";
            } // نهاية التحقق من انشاء ممجلد جديد


        } // نهاية التحقق من الملف
    } //Aksid نهاية

}
;

// طريقة الاستخدام
//$SCHOOLNUMZ=$_GET['id'];
$tahmil = new AksidSars; //   تعريف الكائن
//$tahmil->tashfir="time";                  // md5 = Nadorino-450ce46498.swf  ||  time = Nadorino-1178575798.swf                   انظر الى المثال
$tahmil->linksite = "http://localhost/"; //  رابط الموقع
$tahmil->asarsi = "uplod"; //  اسم المجلد الذي وضع فيه الملفات (ان لم يكون موجود مسبقا سيتم انشاءه اليا
//$tahmil->isam="Nadorino-";                        //  الاسم الذي يسيق الملفات   سيتم تغيير اسماء الملفات اليا Nadorino-5456465.jpg
$tahmil->amchan = "copy.php"; //  اسم هذه الصفحة التي تقوم بعملية التحميل
$tahmil->thwara = "1"; //  عدد الحقول للتحميل
$tahmil->ansaq = array("image/png", "image/gif", "image/jpg", "image/pjpeg",
    "imge/mdb", "application/x-shockwave-flash"); //  يمكنك اضافة الأنساق التي تريد ان يقوم الزوار بتحميلها
$tahmil->thwara(); // هنا اتركع فارغا في هذه الدالة تقوم بعملية اظهار الحقول
$tahmil->aksid();

//echo highlight_file('copy.php'); // يمكنك ازالة هذا السطر


?>
