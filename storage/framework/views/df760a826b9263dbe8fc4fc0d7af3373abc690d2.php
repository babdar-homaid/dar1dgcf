<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
التحكم -
<?php $__env->stopSection(); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div   id ='font_news' class="card-header">التحكم بالمستخدمين</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<form method="POST" action="Powersـofـusers">
<?php echo e(csrf_field()); ?>

<div class="row">
<div class="col-sm-12 col-md-6 offset-sm-12"><div class="form-group">
<label for="sel1"> العضو :</label>

<select class="form-control" name="id" id="sel1">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($item->id); ?>">
     <?php echo e($item->name); ?>

     <?php if($item->cp==2): ?> (مشرف عام) <?php endif; ?>
     <?php if($item->cp==4): ?> (مشرف للمرحلة <?php echo e($item->Requestـstatus); ?>) <?php endif; ?>
</option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

</div></div>


<div class="col-sm-12 col-md-6 offset-sm-12">
    <div class="form-group">
    <label for="sel1">الصلاحية :</label>
    <select class="form-control" name="admin" id="sel1">
        <option value="عام">مشرف عام </option>
        <option value="العالية">مشرف عالي </option>
        <option value="الثانوية">مشرف ثانوي </option>
        <option value="المتوسطة">مشرف متوسط </option>


    </select>
</div>
</div>





<div class="col-sm-12 col-md-6 offset-sm-12">
    <div class="form-group">

<button type="submit" class="btn btn-primary">تعديل</button>
</div>
</div>

</form>

</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/auth/Powersـofـusers.blade.php ENDPATH**/ ?>