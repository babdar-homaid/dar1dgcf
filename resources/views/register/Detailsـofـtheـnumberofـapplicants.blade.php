@if (Auth::user()and Auth::user()->cp==2 and Auth::user()->name=="بندر العصيمي")
<hr>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header"> تفاصيل المتقدمين </div>

<table class="table table-striped">
        <thead>
          <tr>
              <th> العالية منتظمون<i class='fas fa-sort-down'></i></th>
          <th>   العالية منتسبون <i class='fas fa-sort-down'></i></th>
          <th>   المجموع<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>{{$al2}}</td>
              <td>{{$al1}}</td>
              <td>{{$al1+$al2}}</td>
          </tr>

        </tbody>
      </table>
      <table class="table table-striped">
        <thead>
          <tr>
              <th> الثانوية منتظمون<i class='fas fa-sort-down'></i></th>
          <th>   الثانوية منتسبون <i class='fas fa-sort-down'></i></th>
          <th>   المجموع<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>{{$ta2}}</td>
              <td>{{$ta1}}</td>
              <td>{{$ta1+$ta2}}</td>
          </tr>

        </tbody>
      </table>
      <table class="table table-striped">
        <thead>
          <tr>
              <th> المتوسطة منتظمون<i class='fas fa-sort-down'></i></th>
          <th>   المتوسطة منتسبون <i class='fas fa-sort-down'></i></th>
          <th>   المجموع<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>{{$mt2}}</td>
              <td>{{$mt1}}</td>
              <td>{{$mt1+$mt2}}</td>
          </tr>

        </tbody>
      </table>
    <a href="{{route ('proportions')}}" target="_blank">PDF</a>

</div>
</div>
</div>
</div>







@endif
