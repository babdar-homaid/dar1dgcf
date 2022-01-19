<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 -  إستخراج التعاريف
<?php $__env->stopSection(); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header">إرسال تنبيهات على الجوال</div>

<div class="card-body">
 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-send-sms',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('wICY9mS')) {
    $componentId = $_instance->getRenderedChildComponentId('wICY9mS');
    $componentTag = $_instance->getRenderedChildComponentTagName('wICY9mS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wICY9mS');
} else {
    $response = \Livewire\Livewire::mount('add-send-sms',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('wICY9mS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('send-sms',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('zeaY1OX')) {
    $componentId = $_instance->getRenderedChildComponentId('zeaY1OX');
    $componentTag = $_instance->getRenderedChildComponentTagName('zeaY1OX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zeaY1OX');
} else {
    $response = \Livewire\Livewire::mount('send-sms',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('zeaY1OX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>




</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/sendsms.blade.php ENDPATH**/ ?>