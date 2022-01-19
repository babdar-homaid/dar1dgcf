<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="container">

<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
      aria-selected="true">الكتب والمناهج</a>

</ul>
<div class="tab-content card pt-5" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
      <table class="table table-bordered">

          <thead>
            <tr>
              <th scope="col">الكتاب </th>
              <th scope="col">المؤلف</th>
              <th scope="col">القسم</th>
              <th scope="col">وصول</th>
            </tr>



          </thead>
          <tbody>
            <tr>
              <td> <?php echo e($name->name); ?></td>
              <td><?php echo e($name->note); ?></td>
              <td><?php echo e($name->Stage); ?></td>
              <td><a href="/show_book/<?php echo e($name->id); ?>">عرض</a> </td>
            </tr>


          </tbody>

        </table>


      </div>
    </div>
    <div class="card-body">
        <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
        <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>



        <form method="POST" action="/add_curriculum">
        <?php echo e(csrf_field()); ?>



        <div class="form-group">
          <label for="comment">المنهج</label>
          <textarea name="note" class="form-control" rows="5" placeholder="الحقل مطلوب" required id="comment"></textarea>
        </div>

            <input type="hidden" value="<?php echo e($name->name); ?>" name="name" type="text" class="form-control" id="text">

               <input type="hidden" value="<?php echo e($name->Stage); ?>" name="Stage"  class="form-control" >

                <input type="hidden" value="<?php echo e($name->id); ?>" name="book_id"  class="form-control" >



        <button type="submit" class="btn btn-primary">أدخل المنهج</button>
        </form>
    <br>
    <?php if(session('msg')): ?>
<div class="alert alert-success">
<p>
<?php echo e(session('msg')); ?>

</div>
<?php endif; ?>

<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="alert alert-success">
    <a href="/update_book/<?php echo e($values->id); ?>"><i class='far fa-edit' style='font-size:25px;color:red'> </i></a>
<li> <strong><?php echo nl2br($values->note); ?></strong> </li>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/book/book_admin.blade.php ENDPATH**/ ?>