<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
- مراسلة الطلاب
<?php $__env->stopSection(); ?>
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div id='font_news' class="card-header"> ملااسلة الطلاب</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3 ">
                                <form method="POST"
                                    action="https://wa.me/<?php echo e($Mobile); ?>?text= الطالب المتقدم <?php echo e($name); ?> السلام عليكم ورحمة الله وبركاته فقد لاحظنا تسجيلكم في موقع دار الحديث الخيرية وقمتم بتعبئة الإستمارة ولم يتم رفع ملف الوثائق المطلوبة لذلك نذكركم برفع الوثائق قبل إنتهاء موعد التقديم وإلا سيتم رفض ملفكم ولن يسمح لكم بدخول إختبار القبول">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" class="btn btn-primary col-sm-12"> رسالة تذكير </button>
                                </form>
                            </div>



                            <div class="col-md-3">
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
"><?php endif; ?>


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

                                            <button type="submit" class="btn btn-success col-sm-12">رسالة قبول</button>
                                        </form>
                            </div>




                            <div class="col-md-3">
                                <form method="POST"
                                    action="https://wa.me/<?php echo e($Mobile); ?>?text= السلام عليكم ورحمة الله وبركاته ، المتقدم <?php echo e($name); ?> تم رفض ملفك في دار الحديث الخيرية والسبب <?php echo e(App\register::where('id',$id)->first()->note); ?> ">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" class="btn btn-danger col-sm-12">رسالة رفض</button>
                                </form>
                            </div>


                            <div class="col-md-3">
                                <form method="POST"
                                    action="https://wa.me/<?php echo e($Mobile); ?>?text= الطالب المتقدم <?php echo e($name); ?> السلام عليكم ورحمة الله وبركاته نرجو منكم سرعة تسليم الملف لقسم شؤون الطلاب بدار الحديث الخيرية ،ويجب إحضار جميع الطلبات المنصوص عليها في شروط القبول ،وكذلك يجب إحضار أصول هذه الأوراق للمطابقة مع الصور ، علما أنه إذا لم يتم إحضار الملف فسيتم تجاهل طلب التقديم نهائيا من الدار">
                                    <?php echo e(csrf_field()); ?>


                                    <button type="submit" class="btn btn-primary col-sm-12">طلب إكمال الملف </button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('send-sms-user',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('MuDGmdy')) {
    $componentId = $_instance->getRenderedChildComponentId('MuDGmdy');
    $componentTag = $_instance->getRenderedChildComponentTagName('MuDGmdy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MuDGmdy');
} else {
    $response = \Livewire\Livewire::mount('send-sms-user',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('MuDGmdy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php echo \Livewire\Livewire::scripts(); ?>

                </div>
            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/whatsapp.blade.php ENDPATH**/ ?>