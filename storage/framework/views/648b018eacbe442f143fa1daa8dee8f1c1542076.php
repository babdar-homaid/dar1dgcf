<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-header"> المرحلة <?php echo e($id); ?></div>

                <div class="card-body">
                    <?php if(session('success')): ?>
                    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php endif; ?>
                      <?php if($value=='[]'): ?>
                      <div > لا يوجد طالبات</div>

                      <?php endif; ?>
                      <?php if($value!='[]'): ?>
                      <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td> مسلسل </td>
                            <td> الاسم </td>
                            <td> الاسئلة الغير مجابة</td>
                            <td> الاسئلة المجابة</td>



                        </tr>
                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php if(++$index ): ?>
                            <?php endif; ?>


                            <td> <?php echo e($index); ?> </td>

                            <td> <?php echo e($item->name); ?> </td>
                            <td>   <button type="button" class="btn btn-primary">
                                <span class="badge badge-light"><?php echo e(App\special_question::where('cp',1)->where('user_id',$item->id)->count()); ?> </span>
                             </button></td>

                            <td>   <button type="button" class="btn btn-primary"> <a href="/answer/final/<?php echo e($item->id); ?>">
                                <span class="badge badge-light"><?php echo e(App\special_question::where('cp',3)->where('user_id',$item->id)->count()); ?></span>
                             </button> </a></td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>
<br>
                <a href="/question/charge/<?php echo e($id); ?>"><button type="button" class="btn btn-success">
                            انزال الاسئلة
                            <?php echo e(App\question::where('Requestـstatus','المتوسطة')->count()); ?></button></a>

                    <?php endif; ?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/question/add.blade.php ENDPATH**/ ?>