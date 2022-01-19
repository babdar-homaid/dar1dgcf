
<!doctype html>
<html dir="rtl">
<head>


    <meta charset="utf-8">
<title>بيان باسماء طلاب المرحلة <?php echo e($id); ?></title>

<style>
 body{
    font-size: 30px;

    font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
 }

table {
    font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 18px;
}

th, td {
    text-align: right;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<table>

<tr>

                <thead ><th> م </th>
                <th>رقم الاستمارة</th>
                <th>الاسم بالكامل</th>
                <th>الجنسية</th>
                <th> القيد</th>
            </tr>
        </thead >
            <tbody>
            <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php if($index++): ?><?php endif; ?>
            <tr class="details">
                <td><?php echo e(\Arabic\Arabic::num($index)); ?></td>
                    <td><?php echo e(\Arabic\Arabic::num($value->id)); ?></td>
                    <td><?php echo e($value->name); ?></td>
                  <td><?php echo e($value->national->Nationalty_Name); ?></td>
                  <td><?php echo e($value->Stage); ?></td>


            </tr>
        </tbody>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html>
<?php /**PATH /home1/aaalxzw/darallhadith.com/resources/views/register/pdf.blade.php ENDPATH**/ ?>