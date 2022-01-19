

<!doctype html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8">
<title>تعريف طالب منتسب</title>

<style>
body{
font-size: 27px;

font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
}

.center {
text-align: center;
border: 0px solid green;
}

.left {
text-align:left;
border: 0px solid green;
}

.right {
text-align:right;
border: 0px solid green;
}


table, th, td {
border: px solid black;
}
</style>
</head>

<body>


<table style="width:100%">
<tr>
<td style="text-align:right">
<img src="image/dar.jpeg" style="width:50%; max-width:170px;">
<br>



</td>
<td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td style="text-align:right">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  الرقم : <?php echo e(\Arabic\Arabic::num($verification)); ?><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التاريخ :  <?php echo e(\Arabic\Arabic::adate($date)); ?>

    <br>
    <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Telegram/qrcode/<?php echo e($verification); ?>.png" style="width:50%; max-width:100px;">


</td>

</tr>
</table>
<hr>


<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>







<div class="center">
بسم الله الرحمن الرحيم
</div>

<div class="center">
إفادة
</div>

تفيد
إدارة دار الحديث الخيرية بمكة المكرمة بأن

الطالب
/
<br>  <b><?php echo e($value->Name); ?></b>              الجنسية
/ <b><?php echo e($value->Nationality); ?></b>

<br>
ضمن
الطلاب
<?php switch($value->Status):
    case ('منتظم '): ?>
       المنتظمين
        <?php break; ?>
    <?php case ('منتسب '): ?>
        المنتسبين
        <?php break; ?>
    <?php default: ?>
svdxvc
<?php endswitch; ?>
  بها للعام الدراسي  <?php echo e(\Arabic\Arabic::num('1441')); ?> هـ بالصف :
<?php echo e($value->Class); ?>


<br>


وأعطيت
له هذه الإفادة بناءً على طلبه ودون أدنى مسؤولية على الدار لتقديمها إلى <?php echo e($name); ?>


<div class="center">
والله ولي التوفيق
</div>




<div class="left">مدير عام دار الحديث الخيرية
<br>

<div class="left">
<img src="Signature/m.jpg" style="width:50%; max-width:170px;">
</div>
د . سليمان بن وائل التويجرى

</div>
<?php echo QrCode::size(500)
    ->format('png')
    ->generate("https://darallhadith.com/Check/$verification", public_path("Telegram/qrcode/$verification.png"));; ?>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="center">
<img src="Signature/ktm.jpg" style="width:50%; max-width:170px;">
</div>
</body>
</html>
<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/General_definition.blade.php ENDPATH**/ ?>