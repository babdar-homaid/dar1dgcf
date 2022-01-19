<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">صفحة البداية</div>

     <div class="card-body">

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
        <div class="row d-flex justify-content-center">




                <div class="col-sm-4 col-md-4"> <a href="/exam/1"><button type="button " class="btn btn-outline-success">درجات الفصل الأول</button></a></div>
                    <div class="col-sm-4 col-md-4"><a href="/exam/2"> <button type="button " class="btn btn-outline-success">درجات الفصل الثاني</button></a></div>
                 <div class="col-sm-4 col-md-4"> <a href="/exam/3"><button type="button " class="btn btn-outline-success">درجات الدور الثاني</button></a></div>
        </div>
    </div>


    </div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/index.blade.php ENDPATH**/ ?>