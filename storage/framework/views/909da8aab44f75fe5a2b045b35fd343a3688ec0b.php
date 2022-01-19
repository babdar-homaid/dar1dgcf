<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search-user')->html();
} elseif ($_instance->childHasBeenRendered('EjsjQwD')) {
    $componentId = $_instance->getRenderedChildComponentId('EjsjQwD');
    $componentTag = $_instance->getRenderedChildComponentTagName('EjsjQwD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EjsjQwD');
} else {
    $response = \Livewire\Livewire::mount('search-user');
    $html = $response->html();
    $_instance->logRenderedChild('EjsjQwD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/register/searchuser.blade.php ENDPATH**/ ?>