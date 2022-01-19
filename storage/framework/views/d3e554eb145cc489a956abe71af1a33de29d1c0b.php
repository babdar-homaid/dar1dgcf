<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('التحقق من البريد')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.')); ?>


                        </div>
                    <?php endif; ?>

                    <?php echo e(__(' قبل متابعة التسجيل لابد من التحقق من صحة بريدك الإلكتروني لذلك قم بزيارة بريدك وفتح الرسالة المرسلة من قبلنا والضغط على زر التحقق لمواصلة التسجيل')); ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/auth/verify.blade.php ENDPATH**/ ?>