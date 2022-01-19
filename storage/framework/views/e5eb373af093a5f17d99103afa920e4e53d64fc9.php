<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 -  كشف درجات الفصل الأول
<?php $__env->stopSection(); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header">  كشف درجات الفصل الأول </div>

<table class="table">
    <thead>
        <tr>
            <th>الاسم</th>
            <th>الجنسية</th>
            <th>الصف</th>
            <th>الحالة</th>
        </tr>
    </thead>
    <tbody >


            <tr >
                 <td><?php echo e($User->name); ?></td>
                 <td><?php echo e($User->cardـrelationship->Nationality); ?></td>

                 <td><?php echo e($User->Class); ?></td>
                  <td><?php echo e($User->Status); ?></td>



            </tr>


    </tbody>
</table>

<div class="card-body">
    <table class="table table-bordered">
        <tr>
        <td id='table11' >مسلسل</td>
            <td id='table11' >المادة</td>
            <td id='table11' >النهائية<br> الكبرى</td>
            <td id='table11' >النهائية<br> الصغرى</td>
            <td id='table11' >الدرجة</td>
                </tr>
                    
  <?php if($sum=0): ?><?php endif; ?>
  <?php if($add=0): ?><?php endif; ?>
  <?php if($Item_High=0): ?><?php endif; ?>
  <?php if($Item_Low=0): ?><?php endif; ?>
  <?php if($Chapter_Degree=0): ?><?php endif; ?>

<?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($sum++): ?><?php endif; ?>


      	<tr>
            <td><?php echo e($sum); ?></td>
            <td><?php echo e($item->Item_Name); ?></td>
          <td><?php echo e($item->Item_High_Degree_1); ?></td>
            <td><?php echo e($item->Item_Low_Degree_1); ?></td>
            <td>
                <?php if($item->Chapter_Degree_1 < $item->Item_Low_Degree_1 and $item->Absence_Kind_Id==0): ?>
                <div style=" color:red;"> <?php echo e($item->Chapter_Degree_1); ?></div>
                <?php elseif($item->Absence_Kind_Id ==8 or $item->Absence_Kind_Id==9): ?>
                <div style=" color:red;">غائب</div>
                <?php else: ?>
                <?php echo e($item->Chapter_Degree_1); ?>

                <?php endif; ?>
             </td>
            
                </tr></div>




        <tr>
            <?php if($Item_High+=$item->Item_High_Degree_1): ?><?php endif; ?>
            <?php if($Item_Low+=$item->Item_Low_Degree_1): ?><?php endif; ?>
            <?php if($Chapter_Degree+=$item->Chapter_Degree_1): ?><?php endif; ?>
            <?php if($item->Chapter_Degree_1 < $item->Item_Low_Degree_1): ?><?php if($add++): ?><?php endif; ?>
            <?php endif; ?>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <td  id='table11' colspan='2'>المجموع العام للدرجات</td>
            <td  id='table11'><?php echo e($Item_High); ?></td>
            <td  id='table11'><?php echo e($Item_Low); ?></td>
            <td  id='table11'><?php echo e($Chapter_Degree); ?></td>
            
                </tr>

     </table>
    <?php if($add>0): ?> عدد مواد الرسوب <?php echo e($add); ?><?php endif; ?>




</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/exam/Chapter_first.blade.php ENDPATH**/ ?>