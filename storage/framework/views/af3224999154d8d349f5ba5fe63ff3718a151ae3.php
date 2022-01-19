<?php if(Auth::user()and Auth::user()->cp==2 and Auth::user()->name=="بندر العصيمي"): ?>


<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
 - الطلاب الجدد
<?php $__env->stopSection(); ?><div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">  احصاء الجنسيات    </div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">الجنسية</th>
        <th scope="col">عدد المتقدمين</th>
        <th scope="col">عدد المقبولين</th>
        <th scope="col">عدد المرفوضين</th>
      </tr>
    </thead>
<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php if($count[$item->Nationalty_Id] >0): ?>




        <tbody>
          <tr>
            <th scope="row"><?php echo e($item->Nationalty_Name); ?></th>
            <td><?php echo e($count[$item->Nationalty_Id]); ?></td>
            <td><?php echo e($yes[$item->Nationalty_Id]); ?></td>
            <td><?php echo e($no[$item->Nationalty_Id]); ?></td>
          </tr>


        </tbody>


<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['الجنسيات', 'المتقدمين', 'المقبولين', 'المرفوضين'],
<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php if($count[$item1->Nationalty_Id] >0): ?>
["<?php echo e($item1->Nationalty_Name); ?>", <?php echo e($count[$item1->Nationalty_Id]); ?>, <?php echo e($yes[$item1->Nationalty_Id]); ?>, <?php echo e($no[$item1->Nationalty_Id]); ?>],

     // ["<?php echo e($item1->Nationalty_Name); ?>", <?php echo e($count[$item1->Nationalty_Id]); ?>, "#b87333"],


<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

]);


var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>
<div id="barchart_material" style="width: 1000px; height: 500px;"></div>


</div>
</div>
</div>
</div>



<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/bndralsymy/Desktop/up/darallhadith1.com/resources/views/register/Nationalitiesـstats.blade.php ENDPATH**/ ?>