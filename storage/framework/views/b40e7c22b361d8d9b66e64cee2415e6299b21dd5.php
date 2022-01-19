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
} elseif ($_instance->childHasBeenRendered('rFsGjaG')) {
    $componentId = $_instance->getRenderedChildComponentId('rFsGjaG');
    $componentTag = $_instance->getRenderedChildComponentTagName('rFsGjaG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rFsGjaG');
} else {
    $response = \Livewire\Livewire::mount('statement-add');
    $html = $response->html();
    $_instance->logRenderedChild('rFsGjaG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statement-show')->html();
} elseif ($_instance->childHasBeenRendered('zYkUfw7')) {
    $componentId = $_instance->getRenderedChildComponentId('zYkUfw7');
    $componentTag = $_instance->getRenderedChildComponentTagName('zYkUfw7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zYkUfw7');
} else {
    $response = \Livewire\Livewire::mount('statement-show');
    $html = $response->html();
    $_instance->logRenderedChild('zYkUfw7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bandar/public_html/resources/views/exam/statement_admin.blade.php ENDPATH**/ ?>