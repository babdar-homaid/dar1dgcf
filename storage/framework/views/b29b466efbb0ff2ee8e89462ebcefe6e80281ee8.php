<?php $__env->startSection('content'); ?>



<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-question',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('r0DTrhI')) {
    $componentId = $_instance->getRenderedChildComponentId('r0DTrhI');
    $componentTag = $_instance->getRenderedChildComponentTagName('r0DTrhI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('r0DTrhI');
} else {
    $response = \Livewire\Livewire::mount('add-question',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('r0DTrhI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('up-question',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('rN0cV0w')) {
    $componentId = $_instance->getRenderedChildComponentId('rN0cV0w');
    $componentTag = $_instance->getRenderedChildComponentTagName('rN0cV0w');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rN0cV0w');
} else {
    $response = \Livewire\Livewire::mount('up-question',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('rN0cV0w', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-question',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('ZHDlRCZ')) {
    $componentId = $_instance->getRenderedChildComponentId('ZHDlRCZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZHDlRCZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZHDlRCZ');
} else {
    $response = \Livewire\Livewire::mount('show-question',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('ZHDlRCZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>




    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/question/addQ.blade.php ENDPATH**/ ?>