<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">


  
      
        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
     شهادات طلاب دار الحديث (مراحل التخرج)
       </div>
       <div class="card-body">
         <form method="post"  action='/certificates1'>
         <?php echo e(csrf_field()); ?>


             <div class="form-group row">
                  
                     <div class="col-md-12">
                     <label for="">رقم البطاقه</label>

                     <input type="text" name="id"  class="form-control" aria-describedby="helpId">
                    </div>
                   

                     <button type="submit" class="btn btn-primary form-control">ارسال</button>
                     </div>
                     <br>

             </div>
         </form>

       </div>
       <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     </div>
     </div>
     </div>
     <?php $__env->stopSection(); ?>

    </div>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/certificates_s.blade.php ENDPATH**/ ?>