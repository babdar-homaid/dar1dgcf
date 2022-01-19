<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> ترتيب الكتب</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <br />
                    <form method="post" action="/orby">
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
                                    <th scope="col">ترتيب</th>
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
                                    <td><input name="orby[]" value="<?php echo e($item->orby); ?>"> </td>
                                    <input name="id[]" value="<?php echo e($item->id); ?>" type="hidden">


                                    </td>
                                </tr>


                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <td><input name="sum" value="<?php echo e($sum); ?>" type="hidden"> </td>

                        <button type="submit" class="btn btn-primary"> رتب </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/book/Arranging.blade.php ENDPATH**/ ?>