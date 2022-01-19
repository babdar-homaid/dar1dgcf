<?php $__env->startSection('content'); ?>



 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('show-answer')->html();
} elseif ($_instance->childHasBeenRendered('1aBU1WF')) {
    $componentId = $_instance->getRenderedChildComponentId('1aBU1WF');
    $componentTag = $_instance->getRenderedChildComponentTagName('1aBU1WF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1aBU1WF');
} else {
    $response = \Livewire\Livewire::mount('show-answer');
    $html = $response->html();
    $_instance->logRenderedChild('1aBU1WF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php echo \Livewire\Livewire::scripts(); ?>

            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/question/answers_show.blade.php ENDPATH**/ ?>