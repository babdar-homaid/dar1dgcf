<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="row justify-content-center">





<form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= الطالب المتقدم <?php echo e($name); ?> السلام عليكم ورحمة الله وبركاته فقد لاحظنا تسجيلكم في موقع دار الحديث الخيرية وقمتم بتعبئة الإستمارة ولم يتم رفع ملف الوثائق المطلوبة لذلك نذكركم برفع الوثائق قبل إنتهاء موعد التقديم وإلا سيتم رفض ملفكم ولن يسمح لكم بدخول إختبار القبول">
<?php echo e(csrf_field()); ?>

<div class="col-md-4">
<button type="submit" class="btn btn-primary"> رسالة تذكير  </button>
</form>
<div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
</div>
</div>


<?php if($Stage=="المتوسطة"): ?> <form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= السلام عليكم ورحمة الله وبركاته ، المتقدم
&nbsp;
*<?php echo e($name); ?>* تم ترشيحكم لدخول اختبار القبول في دار الحديث الخيرية والذي سيكون يوم *الثلاثاء الموافق ١٦ محرم ١٤٤٣هـ الساعة السابعة صباحًا* بإذن الله تعالى
&nbsp;
كم نذكركم أيضا بأن اختبار المقابلة في المرحلة
&nbsp;
*<?php echo e($Stage); ?>*
&nbsp;
سيكون في الكتب التالية
&nbsp;
*
التوحيد: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
الفقه: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
النحو (لغتي): الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
الرياضيات: الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
الإملاء والخط (لغتي): الكتاب المقرر في وزارة التعليم للصف السادس الابتدائي ( مقرر الفصلين ).
*
"> <?php endif; ?>


<?php if($Stage=="العالية"): ?> <form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= السلام عليكم ورحمة الله وبركاته ، المتقدم
&nbsp;

*<?php echo e($name); ?>* تم ترشيحكم لدخول اختبار القبول في دار الحديث الخيرية والذي سيكون يوم *الثلاثاء الموافق ١٦ محرم ١٤٤٣هـ الساعة السابعة صباحًا* بإذن الله تعالى
&nbsp;
كما نذكركم أيضا بأن اختبار المقابلة في المرحلة
&nbsp;
*<?php echo e($Stage); ?>*
&nbsp;
سيكون في الكتب التالية
&nbsp;
*
التوحيد: العقيدة الواسطية، لـشيخ الإسلام ابن تيمية.
الفقه: الروض المربع،للبهوتي . ( الثلث الأخير ) من: كتاب الجنايات، إلى: آخر الكتاب.
النحو: شرح قطر الندى وبل الصدى،لابن هشام.
المصطلح: نزهة النظر في شرح نخبة الفكر، لابن حجر.
البخاري: من: أول الكتاب، إلى: نهاية كتاب الصلاة. مع أي شرح مختصر مع التعريف بالكتاب والمؤلف.
الفرائض: عدة الباحث في أحكام التوارث، لـ عبد العزيز الرشيد.
مواد المقابلة الشفهية:١/ القرآن الكريم. ٢/ الثقافة العامة.*"> <?php endif; ?>


<?php if($Stage=="الثانوية"): ?> <form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= السلام عليكم ورحمة الله وبركاته ، المتقدم
&nbsp;
*<?php echo e($name); ?>* تم ترشيحكم لدخول اختبار القبول في دار الحديث الخيرية والذي سيكون يوم *الثلاثاء الموافق ١٦ محرم ١٤٤٣هـ الساعة السابعة صباحًا* بإذن الله تعالى
&nbsp;
كما نذكركم أيضا بأن اختبار المقابلة في المرحلة
&nbsp;
*<?php echo e($Stage); ?>*
&nbsp;
سيكون في الكتب التالية
&nbsp;
*
 التوحيد: الجديد في شرح كتاب التوحيد، لمحمد بن عبد العزيز القرعاوي.
 الفقه: عمدة الفقه، لابن  قدامة. ( الثلث الأخير ) من: أول كتاب الأطعمة، إلى: نهاية باب الإقرار.
 النحو: متممة الآجرومية، لمحمد الحطاب الرعيني.
 المصطلح: تيسير مصطلح الحديث،لـمحمود الطحان.
 مواد المقابلة الشفهية: ١/ القرآن الكريم. ٢/ الثقافة العامة.*"> <?php endif; ?>


<?php echo e(csrf_field()); ?>

<div class="col-md-4">
<button type="submit" class="btn btn-success">رسالة قبول</button>
</form>
<div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">

</div>
</div>




<form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= السلام عليكم ورحمة الله وبركاته ، المتقدم <?php echo e($name); ?> تم رفض ملفك في دار الحديث الخيرية والسبب <?php echo e(App\register::where('id',$id)->first()->note); ?> ">
<?php echo e(csrf_field()); ?>

<div class="col-md-4">
<button type="submit" class="btn btn-danger">رسالة رفض</button>
</form>
<div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">

</div>
</div>



<form method="POST" action="https://wa.me/<?php echo e($Mobile); ?>?text= الطالب المتقدم <?php echo e($name); ?> السلام عليكم ورحمة الله وبركاته نرجو منكم سرعة تسليم الملف لقسم شؤون الطلاب بدار الحديث الخيرية ،ويجب إحضار جميع الطلبات المنصوص عليها في شروط القبول ،وكذلك يجب إحضار أصول هذه الأوراق للمطابقة مع الصور ، علما أنه إذا لم يتم إحضار الملف فسيتم تجاهل طلب التقديم نهائيا من الدار">
    <?php echo e(csrf_field()); ?>

    <div class="col-md-4">
    <button type="submit" class="btn btn-primary">طلب إكمال الملف </button>
    </form>
    <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
    </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/whatsapp.blade.php ENDPATH**/ ?>