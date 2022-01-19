<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-user')->html();
} elseif ($_instance->childHasBeenRendered('nCS4Cvh')) {
    $componentId = $_instance->getRenderedChildComponentId('nCS4Cvh');
    $componentTag = $_instance->getRenderedChildComponentTagName('nCS4Cvh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nCS4Cvh');
} else {
    $response = \Livewire\Livewire::mount('search-user');
    $html = $response->html();
    $_instance->logRenderedChild('nCS4Cvh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/searchuser.blade.php ENDPATH**/ ?>