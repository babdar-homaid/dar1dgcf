<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">صفحة البداية</div>

     <div class="card-body">

  <?php if($User->Status ==1): ?>
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">مرحبا بك <?php echo e($User->name); ?></h4>
    <p>ينبغي عليك في أول دخول لك أن تقوم بربط حسابك برقم البطاقة حتى تتمكن من الاستفادة من خدمات الموقع</p>
    <hr>
    <p class="mb-0"> أدخل رقم البطاقة بالاسفل</p>
  </div>


                    <form method="POST" action="card/add" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('رقم البطاقة')); ?></label>

                            <div class="col-md-6">
                            <input type="text" name='card' onkeyup="this.value=this.value.replace(/[^\0-9]/,'')" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            <?php echo e(__('ارسل')); ?>

                            </button>
                            </div>
                            </div>
                            </form>

<?php else: ?>

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

<?php endif; ?>

            </div>
    </div>
</div>
</div><?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/remotely/home.blade.php ENDPATH**/ ?>