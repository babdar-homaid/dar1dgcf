<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
    <?php if(Auth::user()and Auth::user()->cp==5): ?>

    <?php echo $__env->make('remotely.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

 <?php if(Auth::user()and Auth::user()->cp==2): ?>
<div class="card-header">صفحة الدخول</div>

<div class="card-body">
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
<?php echo e(session('status')); ?>

</div>
<?php endif; ?>
تم تسجيل دخولك بنجاح <?php echo e(Auth::user()->name); ?>

<br>

<br>

<div>
    <input name="name" id='name' class="form-control mr-sm-2" type="text" placeholder="بحث">
    </form>
    <div id="dv" >
</div>
<br>

<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الاعضاء                              <span class="badge badge-primary badge-pill"><?php echo e(Auth::user()->count()); ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الاخبار                              <span class="badge badge-primary badge-pill"><?php echo e($neww); ?></span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الكتب                              <span class="badge badge-primary badge-pill"><?php echo e($book); ?></span>

</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
         عدد المناهج الموزعة على الكتب                               <span class="badge badge-primary badge-pill"><?php echo e($detail); ?></span>
        </li>
        <form action="/Scales_edit" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-check">
              <label class="form-check-label" for="radio2">
       <input type="radio" class="form-check-input" id="radio2" name="optradio" value="2" <?php if($exams->Scales==2): ?> checked <?php endif; ?>> [الجداول]
              </label>
            </div>
            <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="1" <?php if($exams->Scales==1): ?> checked <?php endif; ?>> [النتائج]
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="3" <?php if($exams->Scales==3): ?> checked <?php endif; ?>> [اغلاق]
                  </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="radio1">
                      <input type="checkbox" class="form-check-input" id="radio1" name="exam"  <?php if($exams->exam==1): ?> checked  <?php endif; ?>> [فتح اختبار القبول]
                    </label>
                  </div>
            <button type="submit" class="btn btn-primary"> تغيير</button>
          </form>
</ul>

<?php endif; ?>

<?php echo $__env->make('register.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('register.Informationـforـapplicantsـforـtheـstages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('register.Detailsـofـtheـnumberofـapplicants', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('register.Informationـforـapplicants', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>
</div>
</div>
</div>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




      </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/darallhadith1.com/resources/views/home.blade.php ENDPATH**/ ?>