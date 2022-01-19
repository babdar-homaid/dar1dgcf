<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
      طلب مراجعة
       </div>
       <div class="card-body">
         <form method="post" action="/student/search_Student">
             <?php echo csrf_field(); ?>
             <div class="form-group row">

                     <div class="col-md-6">
                     <label for="">رقم البطاقه</label>

                     <input type="text" name="Student_Number" id="" class="form-control" aria-describedby="helpId">
                    </div>
                </div>

                    <br>
                    <hr>
                    <div class="form-group row">

                    <div class="col-md-12">

                     <button type="submit" class="btn btn-primary form-control">ارسال</button>
                     </div>
                     <br>

             </div>
         </form>

       </div>

     </div>
     </div>
     </div>
     <?php $__env->stopSection(); ?>

    </div>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/search.blade.php ENDPATH**/ ?>