@extends('layouts.app')
@section('title')
 -  التسجيل الخطوة الأولى
@endsection
@section('content')
<div class="container">

 <div class="card  bg-warning mb-3" >
        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
          أنتهت المدة المحددة لقبول الملفات </div> 
          
<!-- <div class="row justify-content-center">-->
<!--<div class="col-md-12">-->
<!--<div class="card">-->
<!--        <div class="card-header">{{ __('تسجيل') }}</div>-->
<!--        <div class="card-body">-->
<!--  @auth-->
<!--  <script type="text/javascript">-->
<!--    window.location = "/home";-->
<!--</script>-->
<!--@endauth-->
<!--@guest-->
<!--<h3>    خطوات التسجيل</h3>-->

<!--<div class="d-flex justify-content-around bg-secondary mb-3">-->
<!--        <div class="p-2 bg-dark text-white"> التسجيل  <i class='far fa-times-circle' style='font-size:24px'></i>-->
<!--        </div>-->
<!--        <div class="p-2 bg-dark text-white">تعبئة البيانات <i class='far fa-times-circle' style='font-size:24px'></i>-->
<!--        </div>-->
<!--        <div class="p-2 bg-dark text-white">رفع المرفقات <i class='far fa-times-circle' style='font-size:24px'></i>-->
<!--        </div>-->
<!--      </div>-->
<!--<div class="card-header">-->

<!--    <div class="card  bg-warning mb-3" >-->
<!--        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>-->
<!--            تنبيهات مهمة جدًا </div>-->
<!--        <div class="card-body">-->
<!--            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>-->
<!--                سيكون التقديم -إن شاء الله- سهلاً وميسرًا في ثلاث خطوات هي : التسجيل ثم تعبئة البيانات ثم رفع ملف الوثائق المطلوبة ويجب عليك التنبه للتالي : </p>-->
<!--          <h5 class="card-title"> <i class='far fa-hand-point-left' style='font-size:24px'></i>-->
<!--            أولاً :  يجب النظر في شروط القبول قبل بداية التسجيل على هذا الرابط <a href="Conditions">شروط القبول بدار الحديث الخيرية</a> </h5>-->
<!--            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>-->
<!--              ثانيًا : يجب أن يتم تجهيز الوثائق المطلوبة المدونة في شروط القبول في ملف (PDF) واحد بحجم لا يتجاوز (5) ميجابايت.</p>-->
<!--          <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>-->
<!--            ثالثًا : يجب التسجيل بالاسم الحقيقي حسب الهوية وتسجيل بريد إلكتروني صحيح لاستخدامه في الدخول للموقع مرة أخرى ومتابعة الطلب .  </p>-->
<!--            <p class="card-text"> <i class='far fa-hand-point-left' style='font-size:24px'></i>-->
<!--              رابعًا : يجب أن تكون كلمة المرور قوية بحيث تكون عبارة عن 8 خانات سواء كانت أرقام أو حروف ، ويجب المحافظة عليها لاستخدامها في الدخول إلى الموقع مرة أخرى . </p>-->


<!--        </div>-->
<!--      </div>-->

<!--<form method="POST" action="{{ route('register') }}">-->
<!--@csrf-->

<!--<div class="form-group row">-->
<!--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>-->

<!--<div class="col-md-6">-->
<!--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>-->

<!--@error('name')-->
<!--<span class="invalid-feedback" role="alert">-->
<!--<strong>{{ $message }}</strong>-->
<!--</span>-->
<!--@enderror-->
<!--</div>-->
<!--</div>-->

<!--<div class="form-group row">-->
<!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد') }}</label>-->

<!--<div class="col-md-6">-->
<!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">-->

<!--@error('email')-->
<!--<span class="invalid-feedback" role="alert">-->
<!--<strong>{{ $message }}</strong>-->
<!--</span>-->
<!--@enderror-->
<!--</div>-->
<!--</div>-->

<!--<div class="form-group row">-->
<!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>-->

<!--<div class="col-md-6">-->
<!--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">-->

<!--@error('password')-->
<!--<span class="invalid-feedback" role="alert">-->
<!--<strong>{{ $message }}</strong>-->
<!--</span>-->
<!--@enderror-->
<!--</div>-->
<!--</div>-->
<!--<input name="cp" value="3" type="hidden">-->
<!--<div class="form-group row">-->
<!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة المرور') }}</label>-->

<!--<div class="col-md-6">-->
<!--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">-->
<!--</div>-->
<!--</div>-->

<!--<div class="form-group row mb-0">-->
<!--<div class="col-md-6 offset-md-4">-->
<!--<button type="submit" class="btn btn-primary">-->
<!--{{ __('الخظوة الأولى التسجيل') }}-->
<!--</button>-->
<!--</div>-->
<!--</div>-->
<!--</form>-->
<!-- @endguest-->

<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
@endsection
