@if (Auth::user()and Auth::user()->cp==2 and Auth::user()->name=="بندر العصيمي")
<hr>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">  الطلاب المتقدمين للمرحلة  </div>


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
              <td>{{$Accepted1 + $Rejected1}}</td>
              <td>{{$Accepted1}}</td>
              <td>{{$Rejected1}}</td>
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
                ['عدد المقبولين',     {{$Accepted1}}],
                ['عدد المرفوضين',      {{$Rejected1}}],

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
         ['بندر العصيمي',     {{$bandar1}}],
         ['ياسر عيسى',      {{$yaser1}}],
         ['محمد الحارثي',      {{$mohmmad1}}],


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







@endif
