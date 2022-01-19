<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
- كشف درجات الفصل الثاني
<?php $__env->stopSection(); ?>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="card">
                <div id='font_news' class="card-header"> كشف درجات الفصل الثاني </div>
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

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>المادة</th>
                                <th>الفصل الاول</th>
                                <th>الفصل الثاني</th>
                                <th>الفصل الثاني</th>
                            </tr>
                        </thead>
                        <?php if($bb =App\Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number',
                        $Student_Number)
                        ->where('Item_Name', '!=' , 'السلوك')
                        ->where('Item_Name', '!=' , 'المواظبة')
                        ->get()): ?><?php endif; ?>
                        <?php $__currentLoopData = $bb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $value->Chapter_Degree_2 + $value->Chapter_Degree_1 < $value->Item_Low_Degree_2 or
                            $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 or $value->Absence_Kind_Id_1==8 or
                            $value->Absence_Kind_Id_1==9): ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo e($value->Item_Name); ?></td>
                                    <td>
                                        <?php if( $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 ): ?> غ
                                        <?php else: ?>
                                        <?php echo e($value->Chapter_Degree_1); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if( $value->Absence_Kind_Id_1==8 or $value->Absence_Kind_Id_1==9): ?> غ
                                        <?php else: ?>
                                        <?php echo e($value->Chapter_Degree_2); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if( $value->Chapter_Degree_2 < $value->Item_Low_Degree_1 and
                                            $value->Chapter_Degree_1 < $value->Item_Low_Degree_1 ): ?>
                                             الفصلان
                                                <?php elseif( $value->Absence_Kind_Id==8 and $value->Absence_Kind_Id==9 ): ?>
                                                الفصلان
                                                <?php elseif( $value->Absence_Kind_Id==9 and $value->Absence_Kind_Id==9 ): ?>
                                                الفصلان
                                                <?php elseif( $value->Absence_Kind_Id==8 and $value->Absence_Kind_Id==8 ): ?>
                                                الفصلان
                                                <?php elseif( $value->Chapter_Degree_1 < $value->Item_Low_Degree_1 or
                                                    $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 ): ?>
                                                    الفصل الأول
                                                    <?php elseif( $value->Chapter_Degree_2 < $value->Item_Low_Degree_1 or
                                                        $value->Absence_Kind_Id_1==8 or $value->Absence_Kind_Id_1==9 ): ?>
                                                        الفصل الثاني
                                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/completion.blade.php ENDPATH**/ ?>