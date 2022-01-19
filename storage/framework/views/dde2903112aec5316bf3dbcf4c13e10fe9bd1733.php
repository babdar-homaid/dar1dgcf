<div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">

  بحث عن ملف في الأرشيف
</button>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> بحث في ملفات الأرشيف</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <div class="form-group">
                <label for="exampleInputEmail1">ضع الأسم</label>
                <input wire:model.debounce.500ms="search" type="text" class="form-control" id="text" aria-describedby="text">
                <?php $__errorArgs = ['search'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error text-danger"></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>الاسم</th>
                    <th>رقم الملف</th>

                  </tr>
                </thead>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



            <tr>
            <td><?php echo e($item->name); ?></td>


              <td><?php echo e($item->id); ?> </td>


                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>

                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>






    </div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/archives.blade.php ENDPATH**/ ?>