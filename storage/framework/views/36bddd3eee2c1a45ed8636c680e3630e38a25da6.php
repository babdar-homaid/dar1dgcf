<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">إضافة جداول</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<br/>

<?php if(session('msg')): ?>
<div class="alert alert-success">
<p>
<?php echo e(session('msg')); ?>

</div>
<?php endif; ?>
<div class="alert alert-success" role="alert">


<form method="POST" action="add_table" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="Subject"> معلوات الجداول</label>
<input name="note" type="text" class="form-control" id="text" aria-describedby="text" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>

</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول متوسط </label>
<input type="file" class="form-control-file border" name="upload1" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني متوسط </label>
<input type="file" class="form-control-file border" name="upload2" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث متوسط </label>
<input type="file" class="form-control-file border" name="upload3" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول ثانوي </label>
<input type="file" class="form-control-file border" name="upload4" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني ثانوي </label>
<input type="file" class="form-control-file border" name="upload5" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث ثانوي </label>
<input type="file" class="form-control-file border" name="upload6" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول عالي </label>
<input type="file" class="form-control-file border" name="upload7" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني عالي </label>
<input type="file" class="form-control-file border" name="upload8" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث عالي </label>
<input type="file" class="form-control-file border" name="upload9" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الرابع عالي </label>
<input type="file" class="form-control-file border" name="upload10" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<button type="submit" class="btn btn-primary">أدخل الجداول</button>
</form>
</div>


<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/add_table.blade.php ENDPATH**/ ?>