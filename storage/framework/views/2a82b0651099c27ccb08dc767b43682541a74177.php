<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - الطلاب الجدد
<?php $__env->stopSection(); ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header">الطلاب الجدد  </div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="table-responsive">
    <?php if(Auth::user()->Requestـstatus ==$id): ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>مسلسل</th>
      <th>الاسم</th>
      <th>الجنسية</th>
      <th>القيد</th>
      <th>الحالة</th>
      <th>عرض</th>
    </tr>
  </thead>
  <?php if($sum=0): ?>
  <?php endif; ?>
<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($sum++): ?>
  <?php endif; ?>

  <tr>
  <td><?php echo e($sum); ?></td>
    <td><?php echo e($item->name); ?></td>
    <td>
    <?php echo e($item->national->Nationalty_Name); ?>


     </td>
     <td>
    <?php echo e($item->Stage); ?>


     </td>
    <td>
        <?php if($item->hndl1==1): ?><button type="button" class="btn btn-warning"> الطلب انتظار </button> <?php endif; ?>
        <?php if($item->hndl1==2): ?><button type="button" class="btn btn-success">الطلب مقبول  </button> <?php endif; ?>
        <?php if($item->hndl1==3): ?><button type="button" class="btn btn-danger">الطلب مرفوض  </button> <?php endif; ?>

     </td>

    <td><a href="/New_student_information/<?php echo e($item->id); ?>"><i class='far fa-eye' style='font-size:20px'></i></a></a></td>
  </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>
</div>

<?php echo e($value->links()); ?>

<?php endif; ?>
<?php if(Auth::user()->Requestـstatus !=$id): ?>

<div class="card border-danger mb-3" >
    <div ><h4>صاحب المستخدم</h4></div>
    <div class="card-body text-danger">
      <h5 class="card-title"><h4> <?php echo e(Auth::user()->name); ?></h4></h5>
      <p class="card-text"><h4> لا تفتش في شغل غيرك انجز عملك وبس</h4></p>
    </div>
  </div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/Distributionـofـcommittees.blade.php ENDPATH**/ ?>