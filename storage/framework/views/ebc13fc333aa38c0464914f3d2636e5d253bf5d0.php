<div>
            <div class="card text-center">
                <table class="table table-striped ">
                    <tr>
                        <th>م</th>
                        <th> الاسم</th>
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
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e(\Arabic\Arabic::adate($item->date)); ?></td>
                        <td><?php echo e($item->Guidance); ?></td>
                        <th><a href="/exam/General_definition/<?php echo e($item -> id); ?>" style="color:green;">
                            <button  class="btn btn-dark"><i class="fas fa-file-download"></i></button>
                            <button  onclick="confirm('هل أنت متأكد من الحذف؟') || event.stopImmediatePropagation()" wire:click.prevent='dll(<?php echo e($item->id); ?>)'  class="btn"><i class='far fa-trash-alt'
                                style='font-size:25px;color:red'> </i></button>
                            </a>
                        </th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>

            </div>
            <?php echo e($data->links()); ?>


</div>
<?php /**PATH /Users/bndralsymy/Desktop/up/dar/resources/views/livewire/statement-show.blade.php ENDPATH**/ ?>