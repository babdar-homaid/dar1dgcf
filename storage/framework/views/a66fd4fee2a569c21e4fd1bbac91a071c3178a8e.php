<?php if(Auth::user()and Auth::user()->cp==3): ?>
<?php if(!$id= App\register::where('user_id',Auth::user()->id)->first()): ?>
<?php echo $datd1 = new App\register();
  $user_id= $datd1->user_id = Auth::user()->id;
  $name= $datd1->name = Auth::user()->name;
  $datd1->save();; ?>

 <script type="text/javascript">
window.location = "/home";
</script>
 <div class="alert alert-success">
    <strong>لحظات من فضلة</strong>   <a href="#" class="alert-link">  </a>.
  </div>
  <?php endif; ?>
<?php if($id= App\register::where('user_id',Auth::user()->id)->first()): ?>
<?php endif; ?>
<?php if($id->hndl==1): ?>
<div class="card-header">
    <h3>    خطوات التسجيل</h3>

        <div class="d-flex justify-content-around bg-secondary mb-3">
                <div class="p-2 bg-success text-white">التسجيل <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-dark text-white">تعبئة البيانات <i class='far fa-times-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>
                </div>
              </div>


</div>

<div class="card-body">

<?php echo $__env->make('register.register_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php if($id->hndl==5): ?>
<div class="card-header">
    <h3>    خطوات التسجيل</h3>

        <div class="d-flex justify-content-around bg-secondary mb-3">
                <div class="p-2 bg-success text-white">التسجيل <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-dark text-white">تعبئة البيانات <i class='far fa-times-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>
                </div>
              </div>


</div>

<div class="card-body">

<?php echo $__env->make('register.register_form_ed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if($id->hndl==2): ?>

<div class="card-header">
    <h3>    خطوات التسجيل</h3>

        <div class="d-flex justify-content-around bg-secondary mb-3">
                <div class="p-2 bg-success text-white">التسجيل <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-success text-white">تعبئة البيانات <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>
                </div>
              </div>


</div>

<div class="card-body">
    <script type="text/javascript">
        window.location = "/studentـregistration";
        </script>

 انت تحتاج فقط للمرفقات
<?php endif; ?>
<?php if($id->hndl==3): ?>



<div class="card-header">
    <h3>    خطوات التسجيل</h3>

        <div class="d-flex justify-content-around bg-secondary mb-3">
                <div class="p-2 bg-success text-white">التسجيل <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-success text-white">تعبئة البيانات <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
                <div class="p-2 bg-success text-white">رفع المرفقات <i class='far fa-check-circle' style='font-size:24px'></i>
                </div>
              </div>


</div>
<div class="container">
  <br>
    <h3>حالة الطلب</h3>
<?php if($id->hndl1==1): ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<button type="button" class="btn btn-warning">انتظار</button>
</div>
<div class="card-body">

<div class="alert alert-success">

    <strong>المتقدم <?php echo e(Auth::user()->name); ?> </strong>نفيدكم بأنه تم استلام طلبكم بنحاح وسيتم تدقيق ملفكم من قبل شؤون الطلاب ومن ثم إبلاغكم بما سيتم حياله عن طريق رسالة جوال كما يمكنكم العودة  للحساب لمعرفة حالة الطلب <a href="#" class="alert-link"></a>. وفي حالة رغبتكم التواصل معنا عند وجود مشكلة يمكنكم التواصل عن طريق الواتساب على هذا الرقم : 0125284821
  </div>
  <?php if(App\register::where('user_id',Auth::user()->id)->first()->attachopn==2): ?>
  <?php echo $__env->make('register.dropzone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php endif; ?>
<?php if($id->hndl1==2): ?>
<?php if(App\exam::where('id',1)->first()->exam==1): ?>
اختبار


<?php endif; ?>
<?php if(App\exam::where('id',1)->first()->exam==2): ?>


<button type="button" class="btn btn-success">تم قبول الملف</button>

<div class="card-body">

    <div class="alert alert-success">

        <strong>المتقدم <?php echo e(Auth::user()->name); ?> </strong>


        تم ترشيحكم لدخول اختبار القبول بالمرحلة <a class="text-danger">(<?php echo e($id->Requestـstatus); ?> - <?php echo e($id->Stage); ?>)</a> في دار الحديث الخيرية والذي سيكون يوم الثلاثاء الموافق ١٦ محرم ١٤٤٣هـ الساعة السابعة صباحًا بإذن الله تعالى
        ، كما نفيدكم بضرورة إحضار الأوراق الرسمية للمطابقة بعد تجاوزكم إختبار القبول
<hr>
        <?php if($id->Requestـstatus=="المتوسطة"): ?>


        <p class="text-primary">
      كما نذكركم أيضا بأن اختبار المقابلة في المرحلة المتوسطة سيكون في الكتب التالية

        <BR />
        <strong>
            <li class="text-primary">
        التوحيد: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
    </li>
    <li class="text-primary">
        الفقه: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
    </li>
        <li class="text-primary">
        النحو (لغتي): الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
    </li>
        <li class="text-primary">
        الرياضيات: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
    </li>
    <li class="text-primary">
        الإملاء والخط (لغتي): الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).</strong></p><?php endif; ?>
    </li>
        <?php if($id->Requestـstatus=="العالية"): ?>

        <p class="text-primary">
            كما نذكركم أيضا بأن اختبار المقابلة في المرحلة العالية سيكون في الكتب التالية

        <strong>
            <li class="text-primary">
        التوحيد: العقيدة الواسطية لـشيخ الإسلام ابن تيمية.
    </li>
            <li class="text-primary">
        الفقه: الروض المربع للبهوتي ( الثلث الأخير ) من كتاب الجنايات إلى آخر الكتاب.
    </li>
        <li class="text-primary">
        النحو: شرح قطر الندى وبل الصدى لابن هشام.
    </li>
        <li class="text-primary">
        المصطلح: نزهة النظر في شرح نخبة الفكر لابن حجر.
    </li>
        <li class="text-primary">
        الحديث: صحيح البخاري من أول الكتاب إلى نهاية كتاب الصلاة مع أي شرح مختصر مع التعريف بالكتاب والمؤلف.
    </li>
        <li class="text-primary">
        الفرائض: عدة الباحث في أحكام التوارث لعبد العزيز الرشيد.
    </li class="text-primary">
        <li class="text-primary">
        مواد المقابلة الشفهية:١/ القرآن الكريم. ٢/ الثقافة العامة.
    </li>
    </strong></p><?php endif; ?>
       <?php if($id->Requestـstatus=="الثانوية"): ?>

       <p class="text-primary">
        كما نذكركم أيضا بأن اختبار المقابلة في المرحلة الثانوية سيكون في الكتب التالية


            <strong>
                <li class="text-primary">

         التوحيد: الجديد في شرح كتاب التوحيد لمحمد بن عبد العزيز القرعاوي.
        </li>
        <li class="text-primary">
         الفقه: عمدة الفقه لابن قدامة ( الثلث الأخير ) من أول كتاب الأطعمة إلى نهاية باب الإقرار.
                 <li class="text-primary">
         النحو: متممة الآجرومية لمحمد الحطاب الرعيني.
        </li>

        <li class="text-primary">

         مواد المقابلة الشفهية: ١/ القرآن الكريم. ٢/ الثقافة العامة.</strong></p>  </li><?php endif; ?>
        <a href="#" class="alert-link"></a>.
      </div>
  <?php endif; ?>
<?php endif; ?>
<?php if($id->hndl1==3): ?>
<button type="button" class="btn btn-danger">تم رفض الطلب</button>

<div class="card-body">





  <div class="alert alert-success">
        <p>الاسباب</p>
        <p><?php echo e($id->note); ?></p>
        <p>وفي حالة تصحيح وضعكم والرغبة في إعادة رفع الوثائق المطلوبة مرة أخرى</p>


      <form method="POST" action="/dlFileus">
        <?php echo e(csrf_field()); ?>

        <input type='hidden' class="form-control" value="<?php echo e($form->user_id); ?>" name="id" placeholder="الحقل مطلوب"
            id="text" required autocomplete="name" required autocomplete="name">
        <div class="col-sm-12 col-md-3 offset-sm-12">
            <button type="submit" class="btn btn-danger">أضغط هنا</button>
        </div>
        <input type="hidden" value="<?php echo e($form->Mobile_number); ?>" name="Mobile_number" class="form-control"
            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
        <input type="hidden" value="<?php echo e($form->name); ?>" name="name" class="form-control" placeholder="الحقل مطلوب"
            id="text" required autocomplete="name" required autocomplete="name">
            <br>
        </div>
    </form>

      <?php if(App\register::where('user_id',Auth::user()->id)->first()->attachopn==2): ?>

      <?php endif; ?>
<?php endif; ?>

<?php endif; ?>
 <?php endif; ?>




<?php /**PATH /Users/bndralsymy/Desktop/up/darallhadith1.com/resources/views/register/home.blade.php ENDPATH**/ ?>