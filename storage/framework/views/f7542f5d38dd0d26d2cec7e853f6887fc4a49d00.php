


<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<div id ='rv21'>


<?php if( $dropzone->count()<5): ?>
<form action="/fileupload"

class="dropzone"
id="my-awesome-dropzone">
<?php echo csrf_field(); ?>

</form>
<?php else: ?>
<div class="alert alert-success">
    <strong>شكر لك  تم استقبال الملفات المطلوبة</strong>
  </div>


<?php endif; ?>
</div>
<div id ='rv1'>
    <?php if($index=6): ?><?php endif; ?>
    <?php $__currentLoopData = $dropzone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($index++): ?><?php endif; ?>
    <br>
    <div class="d-flex justify-content-center">

    <a href="attachment/<?php echo e(Auth::user()->id); ?>/<?php echo e($item->url); ?>"> الملف (<?php echo e($item->url); ?>)</a>
    &nbsp;&nbsp;&nbsp;&nbsp;

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <input id="id" type="hidden" value="<?php echo e($dropzone->count()); ?>">



<?php switch($index):
case (6): ?>
<?php break; ?>
<?php case (5): ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  جميع الملفات المطلوبة </h4>
</div>
<?php break; ?>
<?php case (4): ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الرابع</h4>
</div>
<?php break; ?>
<?php case (3): ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الثالث</h4>
</div>
<?php break; ?>
<?php case (2): ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الثاني</h4>
</div>
<?php break; ?>
<?php case (1): ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع تم رقع الملف الأول </h4>
</div>
<?php break; ?>
<?php default: ?>
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">يجب عليك التقيد برفع اربعة ملفات فقط</h4>
</div>
<?php endswitch; ?>
</div>

<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/dropzone.blade.php ENDPATH**/ ?>