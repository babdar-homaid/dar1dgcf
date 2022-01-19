
@extends('layouts.app')

@section('content')
@section('title')
 - الطلاب الجدد
@endsection
<style>

    .fo{
      font-family: 'Roboto', sans-serif;font-size: 24px;

    }

    </style>
<style>
 @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

@media print {
.bb {
page-break-before: always;

}
}

</style>
@if(Auth::user()->Requestـstatus == $Requestـstatus or Auth::user()->cp==2 )

@foreach ($collection as $value)

<div class="container  fo">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <img src="/image/dar.jpeg">
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="d-flex justify-content-center">
       <p> <h2>استمارة تسجيل طالب {{$value->Stage}} بالمرحلة {{$value->Requestـstatus}}</h2></p>
            </div>
       <div class="d-flex justify-content-center">
        <p> <h2>للعام الدراسي ١٤٤٣هـ</h2></p>
    </div>
       <div class="d-flex justify-content-center">
           @if ($value->hndl1==5)
           <p> <h2> رقم الاستمارة {{\Arabic\Arabic::num($value->Student_Number)}}</h2></p>

           @else
           <p> <h2> رقم الاستمارة {{\Arabic\Arabic::num($value->id)}}</h2></p>

           @endif
            </div>
        </div>
        <div class="col-sm-12 col-md-1">

        </div>
      </div>

<hr>
      <table class="table table-bordered  fo">
        <thead>
          <tr class="table-active">

            <th> اسم الطالب <i class='fas fa-sort-down'></i></th>
            <th> الجنسية <i class='fas fa-sort-down'></i></th>
            <th>  مكان الميلاد <i class='fas fa-sort-down'></i></th>
            <th> تاريخ الميلاد<i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><b>{{$value->name}}</b></td>
            <td><b>{{$value->national->Nationalty_Name}}</b></td>
              <td><b>{{$value->placeـofـbirth}}</b></td>
              <td><b> {{\Arabic\Arabic::num($value->BirthDay_Year."/".$value->BirthDay_Month."/".$value->BirthDay_Day)}} هـ </b></td>


          </tr>

        </tbody>
      </table>
      <hr>


    <table class="table table-bordered  fo">
        <thead>
          <tr class="table-active">

            <th>رقم الهوية <i class='fas fa-sort-down'></i></th>
            <th>نوعها <i class='fas fa-sort-down'></i></th>
            <th> تاريخ الانتهاء <i class='fas fa-sort-down'></i></th>
            <th>المهنة في الهوية <i class='fas fa-sort-down'></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td><b>{{\Arabic\Arabic::num($value->IdentificationـNumber)}}</b></td>
              <td><b>{{$value->Itsـhistory}}</b></td>
              <td><b> {{\Arabic\Arabic::num($value->Personality_End_Year."/".$value->Personality_End_Month."/".$value->Personality_End_Day)}} هـ</b></td>
              <td><b>{{$value->Occupation}}</b></td>
          </tr>

        </tbody>
      </table>
      <hr>
      <table class="table table-bordered  fo">
          <thead>
            <tr class="table-active">
                <th>الشهادة الحاصل عليها <i class='fas fa-sort-down'></i></th>
            <th>الجهة المانحة <i class='fas fa-sort-down'></i></th>
            <th>تاريخها <i class='fas fa-sort-down'></i></th>
            <th> التقدير <i class='fas fa-sort-down'></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><b>{{$value->Certificate}}</b></td>
                <td><b>{{$value->Donor}}</b></td>
                <td><b>{{\Arabic\Arabic::num($value->Dateـofـtheـcertificate)}}</b></td>
                <td><b>{{$value->Appreciation}}</b></td>
            </tr>

          </tbody>
        </table>


        <hr>
        <table class="table table-bordered  fo">
            <thead>
              <tr class="table-active">
                  <th>رقم جوال الطالب <i class='fas fa-sort-down'></i></th>
              <th> ولي امر الطالب <i class='fas fa-sort-down'></i></th>
              <th>جوال ولي أمر الطالب <i class='fas fa-sort-down'></i></th>
              <th> عنوان الطالب <i class='fas fa-sort-down'></i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td><b>{{\Arabic\Arabic::num($value->Mobile_number)}}</b></td>
                  <td><b>{{$value->Guardian}}</b></td>
                  <td><b>{{\Arabic\Arabic::num($value->Guardian_Mobile)}}</b></td>
                  <td><b>{{$value->Student_address}}</b></td>
              </tr>

            </tbody>
          </table>


          <hr>
          <table class="table table-bordered  fo">
              <thead>
                <tr class="table-active">
                    <th> اسم المزكي الأول <i class='fas fa-sort-down'></i></th>
                <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                <th>اسم المزكي الثاني <i class='fas fa-sort-down'></i></th>
                <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td><b>{{$value->mzki1}}</b></td>
                    <td><b>{{$value->Currency1}}</b></td>
                    <td><b>{{$value->mzki2}}</b></td>
                    <td><b>{{$value->Currency2}}</b></td>
                </tr>

              </tbody>
            </table>
        <br/>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">توقيع الموظف المختص {{$value->EmployeeـName['name'] ?? ''}} </div>
          </div>

          <div class="row">
            <div class="col"></div>
            <div class="col"><img src="/Signature/ktm.jpg" width="200px" class="rounded" alt="Cinque Terre"></div>
<div class="col"><img src="/Signature/{{$value->Concernedـemployee}}.gif" class="rounded" alt="Cinque Terre">
</div>
          </div>
    </div>



@endforeach
@else

<div class="card border-danger mb-3" >
    <div ><h4>صاحب المستخدم</h4></div>
    <div class="card-body text-danger">
      <h5 class="card-title"><h4> {{Auth::user()->name}}</h4></h5>
      <p class="card-text"><h4> لا تفتش في شغل غيرك انجز عملك وبس</h4></p>
    </div>
  </div>
@endif


@endsection
