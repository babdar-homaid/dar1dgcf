<div>


    <?php if(session()->has('message')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>



<input value="<?php echo e($data->Mobile_number); ?>" type="hidden" wire:model="Mobile_number"  class="form-control">
<input value="<?php echo e($data->name); ?>" type="hidden" wire:model="name"  class="form-control">
<input value="<?php echo e($data->id); ?>" type="hidden" wire:model="user_id"  class="form-control">


<br>
<hr>

    <button wire:click.prevent='add' class="btn btn-primary form-control">ارسال</button>

<br>
</div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/send-sms.blade.php ENDPATH**/ ?>