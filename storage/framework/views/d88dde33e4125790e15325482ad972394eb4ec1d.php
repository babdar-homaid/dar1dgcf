<?php $__env->startSection('title'); ?>
 -  التسجيل الخطوة الأولى
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="card  bg-warning mb-3" >
        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
          أنتهت المدة المحددة لقبول الملفات </div>

 <div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
        <div class="card-header"><?php echo e(__('تسجيل')); ?></div>
        <div class="card-body">
  <?php if(auth()->guard()->check()): ?>
  <script type="text/javascript">
    window.location = "/home";
</script>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
<h3>    خطوات التسجيل</h3>

<div class="d-flex justify-content-around bg-secondary mb-3">
        <div class="p-2 bg-dark text-white"> التسجيل  <i class='far fa-times-circle' style='font-size:24px'></i>
        </div>
        <div class="p-2 bg-dark text-white">تعبئة البيانات <i class='far fa-times-circle' style='font-size:24px'></i>
        </div>
        <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>
        </div>
      </div>
<div class="card-header">

    <div class="card  bg-warning mb-3" >
        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
            تنبيهات مهمة جدًا </div>
        <div class="card-body">
            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
                سيكون التقديم -إن شاء الله- سهلاً وميسرًا في ثلاث خطوات هي : التسجيل ثم تعبئة البيانات ثم رفع ملف الوثائق المطلوبة ويجب عليك التنبه للتالي : </p>
          <h5 class="card-title"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
            أولاً :  يجب النظر في شروط القبول قبل بداية التسجيل على هذا الرابط <a href="Conditions">شروط القبول بدار الحديث الخيرية</a> </h5>
            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
              ثانيًا : يجب أن يتم تجهيز الوثائق المطلوبة المدونة في شروط القبول في ملف (PDF) واحد بحجم لا يتجاوز (5) ميجابايت.</p>
          <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
            ثالثًا : يجب التسجيل بالاسم الحقيقي حسب الهوية وتسجيل بريد إلكتروني صحيح لاستخدامه في الدخول للموقع مرة أخرى ومتابعة الطلب .  </p>
            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
              رابعًا : يجب أن تكون كلمة المرور قوية بحيث تكون عبارة عن 8 خانات سواء كانت أرقام أو حروف ، ويجب المحافظة عليها لاستخدامها في الدخول إلى الموقع مرة أخرى . </p>


        </div>
      </div>

<form method="POST" action="<?php echo e(route('register')); ?>">
<?php echo csrf_field(); ?>

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('الاسم')); ?></label>

<div class="col-md-6">
<input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

<?php $__errorArgs = ['name'];
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

<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('البريد')); ?></label>

<div class="col-md-6">
<input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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

<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('كلمة المرور')); ?></label>

<div class="col-md-6">
<input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

<?php $__errorArgs = ['password'];
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
<input name="cp" value="3" type="hidden">
<div class="form-group row">
<label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('تأكيد كلمة المرور')); ?></label>

<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
<?php echo e(__('الخظوة الأولى التسجيل')); ?>

</button>
</div>
</div>
</form> --}}
 {{-- <?php endif; ?>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/register.blade.php ENDPATH**/ ?>