<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - الطلاب الجدد
<?php $__env->stopSection(); ?>
<div  id ='ch' bhs='13'>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header">الطلاب الجدد المرحلة <?php echo e($id); ?>  </div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="table-responsive">

<table class="table table-striped">
  <thead>
    <tr>
      <th>مسلسل</th>
      <th>الاسم</th>
      <th>التقدم</th>
      <th>الحالة</th>
      <th>الموظف المدقق</th>
      <th>عرض</th>
      <th>الوقت</th>

    </tr>
  </thead>
  <?php if($sum=0): ?>
  <?php endif; ?>


<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($sum++): ?>
  <?php endif; ?>

  <tr>
  <td><?php echo e($sum); ?> </td>
    <td><?php echo e($item->name); ?></td>
    <td>
        <?php if($item->hndl==2): ?><button type="button" class="btn btn-warning">تم تسجيل الاستمارة</button> <?php endif; ?>
        <?php if($item->hndl==3): ?><button type="button" class="btn btn-success"> تم تسجيل الاستمارة ورفع الملف  </button> <?php endif; ?>

     </td>
    <td>
        <?php if($item->hndl1==1): ?><button type="button" class="btn btn-warning"> الطلب انتظار </button> <?php endif; ?>
       <?php if($item->hndl1==2): ?>    <button type="button" class="btn btn-success">الطلب مقبول </button> </a> <?php endif; ?>
    <?php if($item->hndl1==3): ?><a href="#" data-toggle="popover" title="<?php echo e($item->note); ?>"> <button type="button" class="btn btn-danger">الطلب مرفوض  </button></a> <?php endif; ?>
        <?php if($item->hndl1==4): ?><button type="button" class="btn btn-Info">تصحيح الطلب</button> <?php endif; ?>
        <?php if($item->hndl1==5): ?> <button type="button" class="btn btn-success">رشح للدراسة </button>  <?php endif; ?>


     </td>
<td> <?php echo e($item->EmployeeـName['name']); ?></td>
    <td><a href="/New_student_information/<?php echo e($item->id); ?>"><i class='far fa-eye' style='font-size:20px'></i></a>
   <a href="/form/<?php echo e($item->id); ?>"><i class='far fa-edit' style='font-size:20px'></i></a></td>
    <td> <?php echo e(\Arabic\Arabic::since($item->created_at)); ?></td>

  </tr>

  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>


<?php echo e($value->links()); ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/new_students.blade.php ENDPATH**/ ?>