<?php $__env->startSection('content'); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">إضافة كتاب</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>

<div class="alert alert-success" role="alert">


<form method="POST" action="add_book" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="Subject"> المادة</label>
<input name="Subject" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">اسم الكتاب</label>
    <input name="name" type="text" class="form-control" id="text" aria-describedby="text">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">المؤلف </label>
        <input name="note" type="text" class="form-control" id="text" aria-describedby="text">
        <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> الرابط</label>
            <input name="url" type="text" class="form-control" id="text" aria-describedby="text">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="sel1">المرحلة</label>
                <select name="Stage" class="form-control" id="sel1">
                  <option>المتوسط</option>
                  <option>الثانوي</option>
                  <option>العالي</option>

                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> صورة الكتاب</label>
                  <input type="file" class="form-control-file border" name="upload">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
<button type="submit" class="btn btn-primary">أدخل الكتاب</button>
</form>
</div>



<br/>
<form method="POST" action="orby" >
    <?php echo e(csrf_field()); ?>

<?php if(session('msg')): ?>
<div class="alert alert-success">
<p>
<?php echo e(session('msg')); ?>

</div>
<?php endif; ?>
         <table class="table table-bordered">

        <thead>
          <tr>
            <th scope="col">الكتاب</th>
            <th scope="col">المؤلف</th>
            <th scope="col">المرحلة</th>
            <th scope="col">إضافة منهج</th>
            <th scope="col">ادارة</th>
          </tr>
          <?php if($sum=0): ?>
          <?php endif; ?>
          <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sum=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <?php if($sum++): ?>
          <?php endif; ?>
        </thead>
        <tbody>
          <tr>
            <td> <?php echo e($item->name); ?></td>
            <td><?php echo e($item->note); ?></td>
            <td><?php echo e($item->Stage); ?></td>
            <td><a href="show_book_admin/<?php echo e($item->id); ?>">إضافة</a> </td>


            <td><a href="update_name_book/<?php echo e($item->id); ?>"><i class='far fa-edit' style='font-size:25px;color:red'> </i></a>
              <a href="delete_book/<?php echo e($item->id); ?>" onclick="return confirm('حذف الكتاب معناه حذف جميع متعلقاته من المنهج');" target="_top" >  <i class='far fa-trash-alt' style='font-size:25px;color:red'> </i></a>
            </td>
          </tr>


        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
      <?php echo e($value->links()); ?>



</form>

</div>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/book/add.blade.php ENDPATH**/ ?>