<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title>دار الحديث الخيرية <?php echo $__env->yieldContent('title'); ?></title>

<link rel="shortcut icon" href="/image/dar.jpeg" type="image/x-icon" />




<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>



<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('bootstrap/bootstrap-rtl.css')); ?>" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>



<style>
  .arb {
    text-align:justify;
}
body {
font-family: 'Cairo', sans-serif;font-size: 25px;
}
</style>
</head>
<body>
    <div class="container">
    <h3> بيان باسماء الطلاب المتقدين للمرحلة <?php echo e(Auth::user()->Requestـstatus); ?></h3>
<table class="table table-bordered ">
    <thead >
        <tr class="table-success" >
            <th>رقم الاستمارة</th>
          <th>الاسم بالكامل</th>
          <th>الجنسية</th>
          <th> الحالة</th>
        </tr>
      </thead>
      <tbody>
<?php echo header('Content-Type: application/vnd.msword');
header('Content-Disposition: attachment; filename="بيان باسماء الطلاب.doc"');
header('Cache-Control: private, max-age=0, must-revalidate');; ?>

<?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr class="table-active">
        <td><?php echo e($value->id); ?></td>
        <td><?php echo e($value->name); ?></td>
      <td><?php echo e($value->national->Nationalty_Name); ?></td>
      <td><?php echo e($value->Stage); ?> </td>
    </tr>

  </tbody>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>


<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/word.blade.php ENDPATH**/ ?>