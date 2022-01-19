<div>





    <div class="container">






        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
   إضافة سؤال
  </button>
<hr>
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> وضع الإسئلة </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <div class="row">
                <div class="col-sm-12 col-md-12 offset-sm-12">
            <div class="form-group">
                <label for="exampleInputEmail1"> السوال</label>
                <input wire:model.defer="question" type="text" class="form-control" id="text" aria-describedby="text">
                <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <small id="emailHelp" class="form-text text-muted"></small>
                </div>

            </div>
            <div class="col-sm-12 col-md-6 offset-sm-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">الجواب الأول </label>
                    <input wire:model.defer="answer1" type="text" class="form-control" id="text" aria-describedby="text">
                    <?php $__errorArgs = ['answer1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">الجواب الثاني </label>
                    <input wire:model.defer="answer2" type="text" class="form-control" id="text" aria-describedby="text">
                    <?php $__errorArgs = ['answer2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small wire:model.defer="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 offset-sm-12">

                <div class="form-group">
                    <label for="exampleInputEmail1">الجواب الثالث </label>
                    <input wire:model.defer="answer3" type="text" class="form-control" id="text" aria-describedby="text">
                    <?php $__errorArgs = ['answer3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">الجواب الرابع </label>
                    <input wire:model.defer="answer4" type="text" class="form-control" id="text" aria-describedby="text">
                    <?php $__errorArgs = ['answer4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 offset-sm-12">

                <div class="form-group">
                    <label for="sel1">الجواب الصحيح</label>
                    <select wire:model.defer="trues" class="form-control" id="sel1">
                        <option></option>
                        <option value="1">الأول</option>
                        <option value="2">الثاني</option>
                        <option value="3">الثالث</option>
                        <option value="4">الرابع</option>
                    </select>
                    <?php $__errorArgs = ['trues'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
            </div>

                <button wire:click.prevent='add()'  class="btn btn-primary">حفظ </button>
                <hr>

            </div>
            </div>

        </div>

      </div>
    </div>
  </div>



            </div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/add-question.blade.php ENDPATH**/ ?>