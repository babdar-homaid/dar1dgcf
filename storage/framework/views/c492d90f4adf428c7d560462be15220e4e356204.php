<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 -  التسجيل والقبول
<?php $__env->stopSection(); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header"> التسجيل والقبول </div>

<div class="card-body">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statement-add')->html();
} elseif ($_instance->childHasBeenRendered('14DsQzd')) {
    $componentId = $_instance->getRenderedChildComponentId('14DsQzd');
    $componentTag = $_instance->getRenderedChildComponentTagName('14DsQzd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('14DsQzd');
} else {
    $response = \Livewire\Livewire::mount('statement-add');
    $html = $response->html();
    $_instance->logRenderedChild('14DsQzd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statement-show')->html();
} elseif ($_instance->childHasBeenRendered('wPBk16e')) {
    $componentId = $_instance->getRenderedChildComponentId('wPBk16e');
    $componentTag = $_instance->getRenderedChildComponentTagName('wPBk16e');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wPBk16e');
} else {
    $response = \Livewire\Livewire::mount('statement-show');
    $html = $response->html();
    $_instance->logRenderedChild('wPBk16e', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/darallhadith1.com/resources/views/exam/statement_admin.blade.php ENDPATH**/ ?>