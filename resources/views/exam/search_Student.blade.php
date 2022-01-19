
@extends('layouts.app')

@section('content')
@section('title')
 -  كشف درجات الفصل الأول
@endsection


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header"> كشوف الدرجات</div>
@if(empty($User->Student_ID ))
 <br>
<div class="alert alert-danger" role="alert">
لا توجد نتيحة
</div>
  @else
  <br>
  <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-md-4"> <a href="/student/first/{{$User->Student_ID}}"><button type="button " class="btn btn-outline-success col-sm-12 ">درجات الفصل الأول</button></a></div>
          <div class="col-sm-3 col-md-4"><a href="/student/second/{{$User->Student_ID}}"> <button type="button " class="btn btn-outline-success col-sm-12 ">درجات الفصل الثاني</button></a></div>
       <div class="col-sm-3 col-md-4"> <a href="/exam/3"><button type="button " class="btn btn-outline-success col-sm-12 ">درجات الدور الثاني</button></a></div>
  </div>
  <hr>
  <table class="table">
      <thead>
    <thead>
        <tr>
            <th>الاسم</th>
            <th>الجنسية</th>
            <th>الصف</th>
            <th>الحالة</th>
        </tr>
    </thead>
    <tbody >





@endif


            <tr >
                 <td>{{ $User->Name ?? ''}}</td>
                 <td>{{$User->Nationality ?? ''}}</td>
                 <td>{{ $User->Class ?? ''}}</td>
                  <td>{{ $User->Status ?? ''}}</td>



            </tr>


    </tbody>
</table>

</div>
</div>
</div>

@endsection
