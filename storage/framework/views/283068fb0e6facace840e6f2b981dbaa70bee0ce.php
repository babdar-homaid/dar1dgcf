<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - الاخبار - <?php echo e($value->title); ?>  
<?php $__env->stopSection(); ?>
<link href="https://fonts.googleapis.com/css?family=Scheherazade&display=swap" rel="stylesheet">

<style>
        #font_news {
            font-family: 'Scheherazade', serif;font-size: 25px;
        }
        </style>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header"><?php echo e($value->title); ?> </div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<div  id ='font_news'>
<?php echo $value->the_news; ?>

</div>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/news/show.blade.php ENDPATH**/ ?>