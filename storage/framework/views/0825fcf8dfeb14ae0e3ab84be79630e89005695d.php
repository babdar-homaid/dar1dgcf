<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - الطلاب الجدد
<?php $__env->stopSection(); ?>
<style>

    .fo{
      font-family: 'Roboto', sans-serif;font-size: 24px;

    }

    </style>
<style>
    @import  url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

@media  print {
.bb {
page-break-before: always;

}
}

</style>
<?php if(Auth::user()->Requestـstatus == $Requestـstatus or Auth::user()->cp==2 ): ?>

<?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="container  fo">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <img src="/image/dar.jpeg">
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="d-flex justify-content-center">
       <p> <h2>استمارة تسجيل طالب <?php echo e($value->Stage); ?> بالمرحلة <?php echo e($value->Requestـstatus); ?></h2></p>
            </div>
       <div class="d-flex justify-content-center">
        <p> <h2>للعام الدراسي ١٤٤٢هـ</h2></p>
    </div>
       <div class="d-flex justify-content-center">
           <?php if($value->hndl1==5): ?>
           <p> <h2> رقم الاستمارة <?php echo e(\Arabic\Arabic::num($value->Student_Number)); ?></h2></p>

           <?php else: ?>
           <p> <h2> رقم الاستمارة <?php echo e(\Arabic\Arabic::num($value->id)); ?></h2></p>

           <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-1">

        </div>
      </div>

<hr>
      <table class="table table-bordered  fo">
        <thead>
          <tr class="table-active">

            <th> اسم الطالب <i class='fas fa-sort-down'></i></th>
            <th> الجنسية <i class='fas fa-sort-down'></i></th>
            <th>  مكان الميلاد <i class='fas fa-sort-down'></i></th>
            <th> تاريخ الميلاد<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b><?php echo e($value->name); ?></b></td>
            <td><b><?php echo e($value->national->Nationalty_Name); ?></b></td>
              <td><b><?php echo e($value->placeـofـbirth); ?></b></td>
              <td><b> <?php echo e(\Arabic\Arabic::num($value->BirthDay_Year."/".$value->BirthDay_Month."/".$value->BirthDay_Day)); ?> هـ </b></td>


          </tr>

        </tbody>
      </table>
      <hr>


    <table class="table table-bordered  fo">
        <thead>
          <tr class="table-active">

            <th>رقم الهوية <i class='fas fa-sort-down'></i></th>
            <th>نوعها <i class='fas fa-sort-down'></i></th>
            <th> تاريخ الانتهاء <i class='fas fa-sort-down'></i></th>
            <th>المهنة في الهوية <i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td><b><?php echo e(\Arabic\Arabic::num($value->IdentificationـNumber)); ?></b></td>
              <td><b><?php echo e($value->Itsـhistory); ?></b></td>
              <td><b> <?php echo e(\Arabic\Arabic::num($value->Personality_End_Year."/".$value->Personality_End_Month."/".$value->Personality_End_Day)); ?> هـ</b></td>
              <td><b><?php echo e($value->Occupation); ?></b></td>
          </tr>

        </tbody>
      </table>
      <hr>
      <table class="table table-bordered  fo">
          <thead>
            <tr class="table-active">
                <th>الشهادة الحاصل عليها <i class='fas fa-sort-down'></i></th>
            <th>الجهة المانحة <i class='fas fa-sort-down'></i></th>
            <th>تاريخها <i class='fas fa-sort-down'></i></th>
            <th> التقدير <i class='fas fa-sort-down'></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><b><?php echo e($value->Certificate); ?></b></td>
                <td><b><?php echo e($value->Donor); ?></b></td>
                <td><b><?php echo e(\Arabic\Arabic::num($value->Dateـofـtheـcertificate)); ?></b></td>
                <td><b><?php echo e($value->Appreciation); ?></b></td>
            </tr>

          </tbody>
        </table>


        <hr>
        <table class="table table-bordered  fo">
            <thead>
              <tr class="table-active">
                  <th>رقم جوال الطالب <i class='fas fa-sort-down'></i></th>
              <th> ولي امر الطالب <i class='fas fa-sort-down'></i></th>
              <th>جوال ولي أمر الطالب <i class='fas fa-sort-down'></i></th>
              <th> عنوان الطالب <i class='fas fa-sort-down'></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td><b><?php echo e(\Arabic\Arabic::num($value->Mobile_number)); ?></b></td>
                  <td><b><?php echo e($value->Guardian); ?></b></td>
                  <td><b><?php echo e(\Arabic\Arabic::num($value->Guardian_Mobile)); ?></b></td>
                  <td><b><?php echo e($value->Student_address); ?></b></td>
              </tr>

            </tbody>
          </table>


          <hr>
          <table class="table table-bordered  fo">
              <thead>
                <tr class="table-active">
                    <th> اسم المزكي الأول <i class='fas fa-sort-down'></i></th>
                <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                <th>اسم المزكي الثاني <i class='fas fa-sort-down'></i></th>
                <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td><b><?php echo e($value->mzki1); ?></b></td>
                    <td><b><?php echo e($value->Currency1); ?></b></td>
                    <td><b><?php echo e($value->mzki2); ?></b></td>
                    <td><b><?php echo e($value->Currency2); ?></b></td>
                </tr>

              </tbody>
            </table>
        <br/>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">توقيع الموظف المختص <?php echo e($value->EmployeeـName['name'] ?? ''); ?> </div>
          </div>

          <div class="row">
            <div class="col"></div>
            <div class="col"><img src="/Signature/ktm.jpg" width="200px" class="rounded" alt="Cinque Terre"></div>
<div class="col"><img src="/Signature/<?php echo e($value->Concernedـemployee); ?>.gif" class="rounded" alt="Cinque Terre">
</div>
          </div>
    </div>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>

<div class="card border-danger mb-3" >
    <div ><h4>صاحب المستخدم</h4></div>
    <div class="card-body text-danger">
      <h5 class="card-title"><h4> <?php echo e(Auth::user()->name); ?></h4></h5>
      <p class="card-text"><h4> لا تفتش في شغل غيرك انجز عملك وبس</h4></p>
    </div>
  </div>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/print_one.blade.php ENDPATH**/ ?>