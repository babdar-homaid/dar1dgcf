<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
-الكتب والمناهج <?php echo e($id); ?>

<?php $__env->stopSection(); ?>
<div class="container">

<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
    <div class="nav-link active"    role="tab" aria-controls="home-md"
      aria-selected="true">
       <?php if($id=="المتوسط"): ?><h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة المتوسطة</h3> <?php endif; ?>
      <?php if($id=="الثانوي"): ?><h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة الثانوية</h3> <?php endif; ?>
      <?php if($id=="العالي"): ?><h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة العالية</h3> <?php endif; ?></div>

</ul>
<div class="tab-content card pt-5" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">

<br>
     <table class="table">

          <thead>
            <tr>
                <th scope="col">المادة <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col">الكتاب <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col "  class="d-none d-sm-block ">المؤلف <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col"> </th>
            </tr>
            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sum=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


          </thead>
          <tbody>
            <tr>
               <td> <?php echo e($item->Subject); ?></td>
              <td> <?php echo e($item->name); ?></td>
              <td  class="d-none d-sm-block "><?php echo e(str_limit($item->note, 40)); ?></td>
              <td><a href="/show_book/<?php echo e($item->id); ?>"><i class='far fa-eye' style='font-size:36px'></i></a> </td>
            </tr>


          </tbody>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php echo e($value->links()); ?>


      </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/book/index.blade.php ENDPATH**/ ?>