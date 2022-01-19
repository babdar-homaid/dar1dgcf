
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('archives')->html();
} elseif ($_instance->childHasBeenRendered('VYkBCrE')) {
    $componentId = $_instance->getRenderedChildComponentId('VYkBCrE');
    $componentTag = $_instance->getRenderedChildComponentTagName('VYkBCrE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VYkBCrE');
} else {
    $response = \Livewire\Livewire::mount('archives');
    $html = $response->html();
    $_instance->logRenderedChild('VYkBCrE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>



<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/exam/archive.blade.php ENDPATH**/ ?>