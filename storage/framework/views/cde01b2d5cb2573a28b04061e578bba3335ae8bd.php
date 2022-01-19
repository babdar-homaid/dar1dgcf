<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 -  كشف درجات الفصل الأول
<?php $__env->stopSection(); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header"> كشوف الدرجات</div>
<?php if(empty($User->Student_ID )): ?>
 <br>
<div class="alert alert-danger" role="alert">
لا توجد نتيحة
</div>
  <?php else: ?>
  <br>
  <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-md-4"> <a href="/student/first/<?php echo e($User->Student_ID); ?>"><button type="button " class="btn btn-outline-success col-sm-12 ">درجات الفصل الأول</button></a></div>
          <div class="col-sm-3 col-md-4"><a href="/student/second/<?php echo e($User->Student_ID); ?>"> <button type="button " class="btn btn-outline-success col-sm-12 ">درجات الفصل الثاني</button></a></div>
       <div class="col-sm-3 col-md-4"> <a href="/exam/3"><button type="button " class="btn btn-outline-success col-sm-12 ">درجات الدور الثاني</button></a></div>
  </div>
  <hr>
  <table class="table">
      <thead>
    <thead>
        <tr>
            <th>الاسم</th>
            <th>الجنسية</th>
            <th>الصف</th>
            <th>الحالة</th>
        </tr>
    </thead>
    <tbody >





<?php endif; ?>


            <tr >
                 <td><?php echo e($User->Name ?? ''); ?></td>
                 <td><?php echo e($User->Nationality ?? ''); ?></td>
                 <td><?php echo e($User->Class ?? ''); ?></td>
                  <td><?php echo e($User->Status ?? ''); ?></td>



            </tr>


    </tbody>
</table>

</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/search_Student.blade.php ENDPATH**/ ?>