<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">اضافة خبر</div>
<div class="row">

        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

</div>
<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>



<form method="POST" action="">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="exampleInputEmail1">عنوان الخبر </label>
<input name="title" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">نص الخبر</label>
<textarea class="tinymce" name="the_news"></textarea>                      </div>

<button type="submit" class="btn btn-primary">أدخل الخبر</button>
</form>




<br/>

<?php if(session('msg')): ?>
<div class="alert alert-success">
<p>
<?php echo e(session('msg')); ?>

</div>
<?php endif; ?>
         <table class="table table-bordered">
            .
        <thead>
          <tr>
            <th scope="col">الخبر</th>
            <th scope="col">الكاتب</th>
            <th scope="col">عرض</th>
          </tr>
          <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sum=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        </thead>
        <tbody>
          <tr>
            <td> <?php echo e($item->title); ?></td>
            <td><?php echo e($item->user->name); ?></td>
            <td><a href="delete_news/<?php echo e($item->id); ?>"  onclick="return confirm('هل انت متاكد من حذف الخبر؟');" target="_top" >حذف</a> </td>
          </tr>


        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
      <?php echo e($value->links()); ?>


      <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/news/add.blade.php ENDPATH**/ ?>