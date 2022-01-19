<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-user')->html();
} elseif ($_instance->childHasBeenRendered('GWBfyy1')) {
    $componentId = $_instance->getRenderedChildComponentId('GWBfyy1');
    $componentTag = $_instance->getRenderedChildComponentTagName('GWBfyy1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GWBfyy1');
} else {
    $response = \Livewire\Livewire::mount('search-user');
    $html = $response->html();
    $_instance->logRenderedChild('GWBfyy1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/search1.blade.php ENDPATH**/ ?>