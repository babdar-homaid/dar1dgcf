

<!doctype html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8">
<title>تعريف طالب منتسب</title>

<style>
body{
font-size: 20px;

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

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  الرقم : <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التاريخ :
    <br>
    <br>


</td>

</tr>
</table>
<hr>

<?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($Users->name); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<br>
<?php echo e($value->question); ?> الجواب : <?php echo e($value->answer); ?> النتيجة : <?php echo e($value->final); ?>


<hr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="center">
<img src="Signature/ktm.jpg" style="width:50%; max-width:170px;">
</div>
</body>
</html>
<?php /**PATH /home/bandar/public_html/resources/views/question/final.blade.php ENDPATH**/ ?>