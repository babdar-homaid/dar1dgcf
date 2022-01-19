@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">صفحة البداية</div>

     <div class="card-body">

  @if ($User->Status ==1)
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">مرحبا بك {{$User->name }}</h4>
    <p>ينبغي عليك في أول دخول لك أن تقوم بربط حسابك برقم البطاقة حتى تتمكن من الاستفادة من خدمات الموقع</p>
    <hr>
    <p class="mb-0"> أدخل رقم البطاقة بالاسفل</p>
  </div>


                    <form method="POST" action="card/add" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">

                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('رقم البطاقة') }}</label>

                            <div class="col-md-6">
                            <input type="text" name='card' onkeyup="this.value=this.value.replace(/[^\0-9]/,'')" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                            {{ __('ارسل') }}
                            </button>
                            </div>
                            </div>
                            </form>

@else

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

@endif

            </div>
    </div>
</div>
</div>@include('sweetalert::alert')

@endsection
