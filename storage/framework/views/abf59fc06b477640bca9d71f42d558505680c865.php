



<table class="table table-striped">
  <thead>
    <tr>
      <th>اي دي</th>
      <th>الاسم</th>
      <th>التقدم</th>
      <th>الحالة</th>
      <th>الموظف المدقق</th>
      <th>عرض</th>
    </tr>
  </thead>
  <?php if($sum=0): ?>
  <?php endif; ?>
<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($sum++): ?>
  <?php endif; ?>
  <tr>
  <td><?php echo e($item->user->id); ?></td>


    <td><?php echo e($item->name); ?> <?php echo e($item->user->email); ?></td>
    <td>
        <?php if($item->hndl==2): ?><button type="button" class="btn btn-warning">تم تسجيل الاستمارة</button> <?php endif; ?>
        <?php if($item->hndl==3): ?><button type="button" class="btn btn-success"> تم تسجيل الاستمارة ورفع الملف  </button> <?php endif; ?>

     </td>
    <td>
        <?php if($item->hndl1==1): ?><button type="button" class="btn btn-warning"> الطلب انتظار </button> <?php endif; ?>
        <?php if($item->hndl1==2): ?><button type="button" class="btn btn-success">الطلب مقبول  </button> <?php endif; ?>
        <?php if($item->hndl1==3): ?><button type="button" class="btn btn-danger">الطلب مرفوض  </button> <?php endif; ?>
        <?php if($item->hndl1==4): ?><button type="button" class="btn btn-Info">تصحيح الطلب</button> <?php endif; ?>

     </td>

<td> <?php echo e($item->EmployeeـName['name']); ?></td>
    <td><a href="/New_student_information/<?php echo e($item->id); ?>"><i class='far fa-eye' style='font-size:20px'></i></a>
   <a href="/form/<?php echo e($item->id); ?>"><i class='far fa-edit' style='font-size:20px'></i></a>
</td>
  </tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>



<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/search.blade.php ENDPATH**/ ?>