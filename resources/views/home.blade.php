@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
    @if (Auth::user()and Auth::user()->cp==5)

    @include('remotely.home')

    @endif

 @if (Auth::user()and Auth::user()->cp==2)
<div class="card-header">صفحة الدخول</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
تم تسجيل دخولك بنجاح {{Auth::user()->name}}
<br>

<br>

<div>
    @include('exam.archive')

<br>

<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الاعضاء                              <span class="badge badge-primary badge-pill">{{Auth::user()->count()}}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الاخبار                              <span class="badge badge-primary badge-pill">{{$neww}}</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
عدد الكتب                              <span class="badge badge-primary badge-pill">{{$book}}</span>

</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
         عدد المناهج الموزعة على الكتب                               <span class="badge badge-primary badge-pill">{{$detail}}</span>
        </li>
        <form action="/Scales_edit" method="POST">
            {{csrf_field()}}
            <div class="form-check">
              <label class="form-check-label" for="radio2">
       <input type="radio" class="form-check-input" id="radio2" name="optradio" value="2" @if($exams->Scales==2) checked @endif> [الجداول]
              </label>
            </div>
            <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="1" @if($exams->Scales==1) checked @endif> [النتائج]
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="3" @if($exams->Scales==3) checked @endif> [اغلاق]
                  </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label" for="radio1">
                      <input type="checkbox" class="form-check-input" id="radio1" name="exam"  @if($exams->exam==1) checked  @endif> [فتح اختبار القبول]
                    </label>
                  </div>
            <button type="submit" class="btn btn-primary"> تغيير</button>
          </form>
</ul>

@endif

@include('register.home')
@include('register.Informationـforـapplicantsـforـtheـstages')
@include('register.Detailsـofـtheـnumberofـapplicants')
@include('register.Informationـforـapplicants')


</div>
</div>
</div>
</div>

@include('sweetalert::alert')




      </body>

@endsection
