<div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">م</th>
            <th scope="col">الاسم</th>
            <th scope="col">وقت الارسال</th>
            <th scope="col"> المرسل</th>

          </tr>
        </thead>


    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($item->name); ?></td>
      <td><?php echo e(\Arabic\Arabic::since($item->created_at)); ?></td>
      <td><?php echo e($item->admin); ?></td>

    </tr>
    <tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
    </div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/add-send-sms.blade.php ENDPATH**/ ?>