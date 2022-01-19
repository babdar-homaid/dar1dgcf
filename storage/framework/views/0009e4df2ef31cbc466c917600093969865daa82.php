<?php if(Auth::user()and Auth::user()->cp==4): ?>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">  الطلاب المتقدمين للمرحلة  <?php echo e($Requestـstatus); ?></div>


    <table class="table table-striped">
        <thead>
          <tr>
              <th> عددالطلاب المتقدمين<i class='fas fa-sort-down'></i></th>
          <th> عدد الطلاب المقبولين <i class='fas fa-sort-down'></i></th>
          <th> عدد الطلاب المرفوضين<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td><?php echo e($Accepted1 + $Rejected1); ?></td>
              <td><?php echo e($Accepted); ?></td>
              <td><?php echo e($Rejected); ?></td>
          </tr>

        </tbody>
      </table>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Dinosaur', 'Length'],
                ['عدد المقبولين',     <?php echo e($Accepted); ?>],
                ['عدد المرفوضين',      <?php echo e($Rejected); ?>],

              ]);

              var options = {
                title: 'المتقدمين',

              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart_1'));
              chart.draw(data, options);
            }
          </script>


   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:["corechart"]});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Dinosaur', 'Length'],
         ['بندر العصيمي',     <?php echo e($bandar); ?>],
         ['ياسر عيسى',      <?php echo e($yaser); ?>],
         ['محمد الحارثي',      <?php echo e($mohmmad); ?>],


       ]);

       var options = {
         title: 'عمل الموظفين',

       };

       var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));
       chart.draw(data, options);
     }
   </script>
   <div class="row ">
    <div class="col-md-12">
          <div id="piechart_1" style="width: 700px; height: 500px;"></div>
        </div>

          <div class="col-md-12">

          <div id="piechart_2" style="width: 700px; height: 500px;"></div>
        </div>
    </div>

</div>
</div>
</div>
</div>







<?php endif; ?>
<?php /**PATH /home/bandar/public_html/resources/views/register/Informationـforـapplicantsـforـtheـstages.blade.php ENDPATH**/ ?>