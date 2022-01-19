<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
  التحقق من التعريف
       </div>
       <div class="card-body">

        <div class="table-responsive">



            <table class="table table-bordered">
                <thead>
                    <tr class="table-active">
                        <th>الاسم  <i class='fas fa-sort-down'></i></th>
                        <th>الجنسية <i class='fas fa-sort-down'></i></th>
                        <th>تاريخ التعريف <i class='fas fa-sort-down'></i></th>
                        <th>الجهة  <i class='fas fa-sort-down'></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($values->name); ?></td>
                    <td><?php echo e($values->Nationality); ?> </td>
                        <td>
                            <?php echo e(\Arabic\Arabic::num($values->date)); ?>

                        </td>
                        <td><?php echo e($values->Guidance); ?></td>
                    </tr>

                </tbody>
            </table>

       </div>


     </div>
     </div>
     </div>
     <?php $__env->stopSection(); ?>

    </div>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/Check.blade.php ENDPATH**/ ?>