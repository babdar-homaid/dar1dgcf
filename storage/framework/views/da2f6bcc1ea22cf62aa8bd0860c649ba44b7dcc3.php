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


<div class="text-center">
    <p>
        السلام عليكم
    تم اكتمال ملف الطالب
    <?php echo e($user); ?>

    </p>
  </div>
<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/mail.blade.php ENDPATH**/ ?>