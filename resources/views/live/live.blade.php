@extends('layouts.app')

@section('content')


<div class="row justify-content-center">



    @switch($User->Class)
    @case('الأول المتوسط')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @case('الثاني المتوسط')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break

    @case('الثالث المتوسط')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الأول الثانوي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الثاني الثانوي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الثالث الثانوي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الأول العالي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الثاني العالي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الثالث العالي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @case('الأول العالي')
    <div class=" col-md-8">
        <div class="card text-center">
   <div class="card-header">
بث {{$User->Class}}        </div>
   <div class="card-body">
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
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.live.net.sa/dar/" allowfullscreen></iframe>
      </div>     </div>
 </div>
    @break
    @default

    @endswitch


     @endsection

    </div>
