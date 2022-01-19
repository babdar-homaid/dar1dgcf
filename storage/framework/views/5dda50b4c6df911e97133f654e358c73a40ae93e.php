<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">تعديل كتاب</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>



<form method="POST" action="/update_name_book" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="Subject"> المادة</label>
<input value="<?php echo e($value->Subject); ?>" name="Subject" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">اسم الكتاب</label>
    <input value="<?php echo e($value->name); ?>" name="name" type="text" class="form-control" id="text" aria-describedby="text">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">المؤلف </label>
        <input value="<?php echo e($value->note); ?>" name="note" type="text" class="form-control" id="text" aria-describedby="text">
        <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> الرابط</label>
            <input value="<?php echo e($value->url); ?>" name="url" type="text" class="form-control" id="text" aria-describedby="text">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> صورة الكتاب</label>
                  <input type="file" class="form-control-file border" name="upload">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <input type="hidden" value="<?php echo e($value->id); ?>" name="id">
<button type="submit" class="btn btn-primary">عدل الكتاب</button>
</form>







<br/>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/book/update_admin_name.blade.php ENDPATH**/ ?>