<?php $__env->startSection('content'); ?>

<div class="container">









     <form method="POST" action="/update_book">
      <?php echo e(csrf_field()); ?>



      <div class="form-group">
        <label for="comment">المنهج</label>
        <textarea name="note" class="form-control" rows="5" id="comment"><?php echo e($value->note); ?></textarea>
      </div>

              <input type="hidden" value="<?php echo e($value->id); ?>" name="id"  class="form-control" >

              <input type="hidden" value="<?php echo e($value->book_id); ?>" name="book_id"  class="form-control" >


      <button type="submit" class="btn btn-primary">تعديل المنهج</button>
      </form>
  <br>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/book/update_admin.blade.php ENDPATH**/ ?>