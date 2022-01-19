<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 -  إستخراج التعاريف
<?php $__env->stopSection(); ?>


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header"> إستخراج التعاريف  </div>

<div class="card-body">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statement-add')->html();
} elseif ($_instance->childHasBeenRendered('z1uV418')) {
    $componentId = $_instance->getRenderedChildComponentId('z1uV418');
    $componentTag = $_instance->getRenderedChildComponentTagName('z1uV418');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('z1uV418');
} else {
    $response = \Livewire\Livewire::mount('statement-add');
    $html = $response->html();
    $_instance->logRenderedChild('z1uV418', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statement-show')->html();
} elseif ($_instance->childHasBeenRendered('ndn8pFq')) {
    $componentId = $_instance->getRenderedChildComponentId('ndn8pFq');
    $componentTag = $_instance->getRenderedChildComponentTagName('ndn8pFq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ndn8pFq');
} else {
    $response = \Livewire\Livewire::mount('statement-show');
    $html = $response->html();
    $_instance->logRenderedChild('ndn8pFq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/statement_admin.blade.php ENDPATH**/ ?>