
@extends('layouts.app')

@section('content')
@section('title')
 -  كشف درجات الفصل الأول
@endsection


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header">  كشف درجات الفصل الثاني </div>
<table class="table">
    <thead>
        <tr>
            <th>الاسم</th>
            <th>الجنسية</th>
            <th>الصف</th>
            <th>الحالة</th>
        </tr>
    </thead>
    <tbody >


            <tr >
                 <td>{{ $User->name }}</td>
                 <td>{{$User->cardـrelationship->Nationality}}</td>

                 <td>{{ $User->Class }}</td>
                  <td>{{ $User->Status }}</td>



            </tr>


    </tbody>
</table>
<div class="card-body">
    <table class="table table-bordered">
        <tr>
        <td>مسلسل</td>
            <td>المادة</td>
            <td>النهائية<br> الكبرى</td>
            <td>النهائية<br> الصغرى</td>
            <td>الدرجة</td>
                </tr>
                    {{-- <tr>
            <td>رقمـــــا</td>
            <td>كتابة</td>
                </tr> --}}

  @if ($sum=0)@endif
  @if ($add=0)@endif
  @if ($Item_High=0)@endif
  @if ($Item_Low=0)@endif
  @if ($Chapter_Degree=0)@endif


@foreach ($collection as $item)

@if ($sum++)@endif
@if($item->Chapter_Degree_2+$item->Chapter_Degree_1< $item->Item_Low_Degree_2)
{{$item->Item_Name}}
@if ($if=1)@endif


@endif




            <td>{{$sum}} </td>
            <td>{{$item->Item_Name}}</td>
          <td>{{$item->Item_High_Degree_2}}</td>
            <td>{{$item->Item_Low_Degree_2}}</td>
             <td>
                @if ($item->Chapter_Degree_2 +$item->Chapter_Degree_1 < $item->Item_Low_Degree_1 and $item->Absence_Kind_Id==0)
                <div style=" color:red;"> {{$item->Chapter_Degree_2 +$item->Chapter_Degree_1 }}</div>
                @elseif ($item->Absence_Kind_Id ==8 or $item->Absence_Kind_Id==9)
                <div style=" color:red;">غائب</div>
                @else
                {{$item->Chapter_Degree_2 + $item->Chapter_Degree_1 }}
                @endif
             </td>
            {{-- <td>{{$item->Chapter_Degree_1}}</td> --}}
                </tr></div>




        <tr>
            @if ($Item_High+=$item->Item_High_Degree_2)@endif
            @if ($Item_Low+=$item->Item_Low_Degree_2)@endif
            @if ($Chapter_Degree+=$item->Chapter_Degree_2+$item->Chapter_Degree_1 )@endif
            @if ($item->Chapter_Degree_2+$item->Chapter_Degree_1 < $item->Item_Low_Degree_1)
            @if ($add++)@endif
            @endif


            @endforeach

            <td colspan='2'>المجموع العام للدرجات</td>
            <td> {{$Item_High}}</td>
            <td>{{$Item_Low}}</td>
            <td> {{$Chapter_Degree}}</td>
            {{-- <td -</td> --}}
                </tr>

     </table>
    @if ($add>0) عدد مواد الرسوب {{$add}}@endif




</div>
</div>
</div>
</div>

@endsection
