

@extends('layouts.app')
@section('title')
 -  التسجيل الخطوة الثالثة
@endsection
@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
    <div class="card-header">
        <h3>    خطوات التسجيل</h3>

            <div class="d-flex justify-content-around bg-secondary mb-3">
                    <div class="p-2 bg-success text-white">التسجيل <i class='far fa-check-circle' style='font-size:24px'></i>
                    </div>
                    <div class="p-2 bg-success text-white">تعبئة البيانات <i class='far fa-check-circle' style='font-size:24px'></i>
                    </div>
                    <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>
                    </div>
                  </div>


    </div>

    <div class="card-body">
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<br/>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif
<div class="" role="alert">
    <div class="card  bg-warning mb-3" >
        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
            تنبيهات مهمة جدًا : </div>
        <div class="card-body">
          <h5 class="card-title"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
            أولاً :  يجب أن يكون الملف المرفق بصيغة (PDF)  .ولا تُقبل أي صيغة أخرى للملف  </h5>
          <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
            ثانيًا : يجب أن لا يتجاوز حجم الملف المرفق (5 ميجابايت) </p>
          <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>
            ثالثًا : يجب أن تكون الوثائق المرفقة واضحة وعليها التصديقات الرسمية واضحة ، علماً بأن الوثائق المطلوبة هي : ( أصل الهوية ، وأصل المؤهل الدراسي ، وصورة شخصية ، وتزكيتين ، وخطاب موافقة جهة العمل للسعودي وموافقة الكفيل لغير السعودي ) </p>

        </div>
      </div>

<form method="POST" action="studentـregistration" enctype="multipart/form-data">
{{ csrf_field() }}

</div>
<div class="row">
 <div class="col-md-4 sm-12">
<label for="exampleInputEmail1"> اختر الملف  </label>
<input type="file" class="form-control-file border" name="upload" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
</div>
<br>
<button type="submit" class="btn btn-primary col-md-2 sm-12">الخطوة الثالثة رفع الملف </button>
</form>

</div>



@include('sweetalert::alert')


</div>
</div>
@if($id= App\register::where('user_id',Auth::user()->id)->first())

@endif
@if($id->hndl==3 or $id->hndl==1 )
<script type="text/javascript">
    window.location = "/home";
    </script>
@endif

@if($id->hndl==3 or $id->hndl==5 )
<script type="text/javascript">
    window.location = "/home";
    </script>
@endif
@endsection
