
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('archives')->html();
} elseif ($_instance->childHasBeenRendered('YB8pJcB')) {
    $componentId = $_instance->getRenderedChildComponentId('YB8pJcB');
    $componentTag = $_instance->getRenderedChildComponentTagName('YB8pJcB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YB8pJcB');
} else {
    $response = \Livewire\Livewire::mount('archives');
    $html = $response->html();
    $_instance->logRenderedChild('YB8pJcB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>



<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/archive.blade.php ENDPATH**/ ?>