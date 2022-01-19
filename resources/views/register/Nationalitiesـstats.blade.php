@if (Auth::user()and Auth::user()->cp==2 and Auth::user()->name=="بندر العصيمي")
@extends('layouts.app')

@section('content')
@section('title')
 - الطلاب الجدد
@endsection<div class="container">
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
@foreach ($value as $item)

@if($count[$item->Nationalty_Id] >0)




        <tbody>
          <tr>
            <th scope="row">{{$item->Nationalty_Name}}</th>
            <td>{{$count[$item->Nationalty_Id]}}</td>
            <td>{{$yes[$item->Nationalty_Id]}}</td>
            <td>{{$no[$item->Nationalty_Id]}}</td>
          </tr>


        </tbody>


@endif
@endforeach
</table>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['الجنسيات', 'المتقدمين', 'المقبولين', 'المرفوضين'],
@foreach ($value as $item1)

@if($count[$item1->Nationalty_Id] >0)
["{{$item1->Nationalty_Name}}", {{$count[$item1->Nationalty_Id]}}, {{$yes[$item1->Nationalty_Id]}}, {{$no[$item1->Nationalty_Id]}}],

     // ["{{$item1->Nationalty_Name}}", {{$count[$item1->Nationalty_Id]}}, "#b87333"],


@endif
@endforeach

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



@endif
@endsection
