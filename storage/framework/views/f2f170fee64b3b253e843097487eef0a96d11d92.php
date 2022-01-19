<div>

    <div>
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div>
        <?php if(session()->has('message1')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('message1')); ?>

            </div>
        <?php endif; ?>
    </div>
            <div class="card text-center">



                        <div class="form-group col-md-6">
                            <label for="sel1"> أختر الفئة</label>
                            <select class="form-control" wire:model="Guidance" id="sel1">
                                <option value="">اختر</option>
                                <option value="إدارة الجوازات">تعريف للجوازات</option>
                                <option value="من يهمه الأمر">تعريف لمن يهمه الأمر</option>
                                <option value="وقف المغاربة">تعرف لوقف المغارية</option>
                            </select>
                            <?php $__errorArgs = ['Guidance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                            <div class="form-group col-md-6">
                                <label for="sel1"> رقم بطاقة الطالب </label>
                            <input type="text" wire:model="Student_ID" class="form-control">
                            <?php $__errorArgs = ['Student_ID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>
                            <br>
                            <hr>
                            <div class="col-md-6">
                                <button wire:click.prevent='add' class="btn btn-primary form-control">ارسال</button>
                            </div>
                            <br>

        </div>

</div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/statement-add.blade.php ENDPATH**/ ?>