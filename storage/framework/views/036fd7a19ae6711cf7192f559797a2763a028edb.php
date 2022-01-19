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
} elseif ($_instance->childHasBeenRendered('lfhgmub')) {
    $componentId = $_instance->getRenderedChildComponentId('lfhgmub');
    $componentTag = $_instance->getRenderedChildComponentTagName('lfhgmub');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lfhgmub');
} else {
    $response = \Livewire\Livewire::mount('add-send-sms',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('lfhgmub', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('send-sms',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('JxfzK7R')) {
    $componentId = $_instance->getRenderedChildComponentId('JxfzK7R');
    $componentTag = $_instance->getRenderedChildComponentTagName('JxfzK7R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JxfzK7R');
} else {
    $response = \Livewire\Livewire::mount('send-sms',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('JxfzK7R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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