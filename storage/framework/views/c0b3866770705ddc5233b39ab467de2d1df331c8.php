<div>
    <div class="card-header"> الاسئلة</div>
    <div class="card-body">
        <?php if(session('success')): ?>
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table">
            <tr>
                <?php if($item->cp  ==1 ): ?>          <td> السؤال : <?php echo e($item->question); ?>  </td><?php endif; ?>

            </tr>
            <tr>
                <td>
<?php if($item->cp  ==3 ): ?>   <?php echo e($item->question); ?> <button class="btn btn-success btn-lg btn-block" style='font-size:20px'> شكرا لك تم إستلام اللإجابة على السؤال   <i class='far fa-check-circle'></i></button><?php endif; ?>
<?php if($item->cp  ==1): ?>
                    <button type="button" class="btn btn-primary" wire:click.prevent="up('<?php echo e($item->id); ?>')" data-toggle="modal" data-target="#add<?php echo e($item->id); ?>">
                    <?php echo e($item->question); ?>

                    <?php endif; ?>
                </td>

            </tr>
            <tr>

                <td>


        </table>





        <div wire:ignore.self class="modal fade" id="add<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="add<?php echo e($item->id); ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <?php echo e($item->question); ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">






                <button type="button" wire:click.prevent="answer1('<?php echo e($item->id); ?>')" data-dismiss="modal" class="btn btn-success btn-lg btn-block"><?php echo e($item->answer1); ?> </button>
                   <button type="button" wire:click.prevent="answer2('<?php echo e($item->id); ?>')" data-dismiss="modal" class="btn btn-primary btn-lg btn-block"><?php echo e($item->answer2); ?> </button>
                   <button type="button" wire:click.prevent="answer3('<?php echo e($item->id); ?>')" data-dismiss="modal" class="btn btn-warning btn-lg btn-block"><?php echo e($item->answer3); ?></button>
                 <button type="button" wire:click.prevent="answer4('<?php echo e($item->id); ?>')" data-dismiss="modal" class="btn btn-info btn-lg btn-block"><?php echo e($item->answer4); ?></button>



                    </div>
                    </div>

                </div>

              </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/show-answer.blade.php ENDPATH**/ ?>