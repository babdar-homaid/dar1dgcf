<?php $__env->startSection('content'); ?>



<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-question',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('Ywsd3pF')) {
    $componentId = $_instance->getRenderedChildComponentId('Ywsd3pF');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ywsd3pF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ywsd3pF');
} else {
    $response = \Livewire\Livewire::mount('add-question',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('Ywsd3pF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-question',['id' =>$id])->html();
} elseif ($_instance->childHasBeenRendered('2TKGW9E')) {
    $componentId = $_instance->getRenderedChildComponentId('2TKGW9E');
    $componentTag = $_instance->getRenderedChildComponentTagName('2TKGW9E');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2TKGW9E');
} else {
    $response = \Livewire\Livewire::mount('show-question',['id' =>$id]);
    $html = $response->html();
    $_instance->logRenderedChild('2TKGW9E', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>




    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/live.blade.php ENDPATH**/ ?>