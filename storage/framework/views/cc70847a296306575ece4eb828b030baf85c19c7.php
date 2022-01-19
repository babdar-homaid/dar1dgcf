<div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    بحث
  </button>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">بحث عن طالب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="exampleInputEmail1">ضع الأسم أو رقم الهوية</label>
                <input wire:model.debounce.500ms="search" type="text" class="form-control" id="text" aria-describedby="text">
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

<table class="table table-striped">
    <thead>
      <tr>
        <th>اي دي</th>
        <th>الاسم</th>
        <th>التقدم</th>
        <th>الحالة</th>
        <th>الموظف المدقق</th>
        <th>عرض</th>
      </tr>
    </thead>
    <?php if($sum=0): ?>
    <?php endif; ?>
  <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($sum++): ?>
    <?php endif; ?>
    <tr>
    <td><?php echo e($item->user->id); ?></td>


      <td><?php echo e($item->name); ?> <?php echo e($item->user->email); ?></td>
      <td>
          <?php if($item->hndl==2): ?><button type="button" class="btn btn-warning">تم تسجيل الاستمارة</button> <?php endif; ?>
          <?php if($item->hndl==3): ?><button type="button" class="btn btn-success"> تم تسجيل الاستمارة ورفع الملف  </button> <?php endif; ?>

       </td>
      <td>
          <?php if($item->hndl1==1): ?><button type="button" class="btn btn-warning"> الطلب انتظار </button> <?php endif; ?>
          <?php if($item->hndl1==2): ?><button type="button" class="btn btn-success">الطلب مقبول  </button> <?php endif; ?>
          <?php if($item->hndl1==3): ?><button type="button" class="btn btn-danger">الطلب مرفوض  </button> <?php endif; ?>
          <?php if($item->hndl1==4): ?><button type="button" class="btn btn-Info">تصحيح الطلب</button> <?php endif; ?>

       </td>

  <td> <?php echo e($item->EmployeeـName->name ?? null); ?></td>
      <td><a href="/New_student_information/<?php echo e($item->id); ?>"><i class='far fa-eye' style='font-size:20px'></i></a>
     <a href="/form/<?php echo e($item->id); ?>"><i class='far fa-edit' style='font-size:20px'></i></a>
  </td>
    </tr>


  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </table>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>


</div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/question/search-user.blade.php ENDPATH**/ ?>