<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class=" col-md-8">
        <div class="card text-center">
            <div class="card-header">
                إستخراج إفادة طالب
            </div>
            <div class="card-body">
                <form method="POST" action="/exam/statement">
                    <?php echo csrf_field(); ?>
                    <div class="form-group col-md-6">
                        <label for="sel1"> أختر الفئة</label>
                        <select class="form-control" id="sel1" name="name">
                            <option value="إدارة الجوازات">تعريف للجوازات</option>
                            <option value="من يهمه الأمر">تعريف لمن يهمه الأمر</option>
                            <option value="وقف المغاربة">تعرف لوقف المغارية</option>
                        </select>
                        <br>
                        <hr>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary form-control">ارسال</button>
                        </div>
                        <br>
                </form>
            </div>
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <table class="table table-striped ">
                <tr>
                    <th>م</th>
                    <th>تاريخ الإفادة</th>
                    <th> الجهة</th>
                    <th>تحميل</th>
                </tr>
                <?php if($sum=0): ?>
                <?php endif; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($sum++): ?>
                <?php endif; ?>
                <tr>
                    <td><?php echo e(\Arabic\Arabic::adate($sum)); ?></td>
                    <td><?php echo e(\Arabic\Arabic::adate($item->date)); ?></td>
                    <td><?php echo e($item->Guidance); ?></td>
                    <th><a href="/exam/General_definition/<?php echo e($item -> id); ?>" style="color:green;">
                            <button type='submit' class="btn btn-dark"><i class="fas fa-file-download"></i></button>
                        </a></th>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

</div>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/exam/statement.blade.php ENDPATH**/ ?>