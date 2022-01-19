<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - نبذة عن الدار 
<?php $__env->stopSection(); ?>
<link href="https://fonts.googleapis.com/css?family=Harmattan&display=swap" rel="stylesheet">
<style>
        #font_news {
            font-family: 'Harmattan', sans-serif
;font-size: 25px;
        }
        </style>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div   id ='font_news' class="card-header">نبذة عن الدار</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<div  id ='font_news'>

                

    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo $item->the_news; ?>



    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <hr>

    <?php echo e($value->links()); ?>


</div>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/Biography.blade.php ENDPATH**/ ?>