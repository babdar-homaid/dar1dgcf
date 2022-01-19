<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>دار الحديث الخيرية @yield('title')</title>

<link rel="shortcut icon" href="/image/dar.jpeg" type="image/x-icon" />


{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/dropzone.js') }}" defer></script>




<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->


  <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
     <link href="{{ asset('fontawesome-free-5.15.1-web\css\all.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js') }}" defer></script>

<script src="{{ asset('js/cood.js') }}" defer></script>

<style>
  .arb {
    text-align:justify;
}
body {
font-family: 'Cairo', sans-serif;font-size: 18px;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <a class="navbar-brand" href="/">
        <img src="/image/DarHa.gif" width="250" height="70" class="d-inline-block align-top" alt="">
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">

{{--  <a class="nav-item nav-link" href="/">--}}
{{--    <i class='fas fa-home' style='font-size:24px'></i>  صفحة البداية </a>--}}
{{--  <a class="nav-item nav-link" href="/index_book/العالي">--}}
{{--    <i class='fas fa-pencil-alt' style='font-size:24px'></i>  القسم العالي </a>--}}
{{--  <a class="nav-item nav-link" href="/index_book/الثانوي">--}}
{{--    <i class='fas fa-pencil-alt' style='font-size:24px'></i> القسم الثانوي </a>--}}
{{--  <a class="nav-item nav-link" href="/index_book/المتوسط">--}}
{{--    <i class='fas fa-pencil-alt' style='font-size:24px'></i>  القسم المتوسط </a>--}}

@if (Auth::user()and Auth::user()->cp==2)
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='fa fa-book' style='font-size:24px'></i> الاضافات
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="/add_book">
<i class='far fa-edit'></i> إضافة كتاب </a>
<a class="dropdown-item" href="/add_news">
<i class='far fa-edit' ></i> إضافة خبر</a>
<a class="dropdown-item" href="/add_table">
<i class='far fa-edit' ></i> رفع الجداول </a>
<a class="dropdown-item" href="/Arranging/المتوسط">
<i class='fas fa-tasks' ></i> ترتيب المتوسط </a>
<a class="dropdown-item" href="/Arranging/الثانوي">
<i class='fas fa-tasks' ></i> ترتيب الثانوي </a>
<a class="dropdown-item" href="/Arranging/العالي">
<i class='fas fa-tasks' ></i> ترتيب العالي </a>
</div>
</li>

@if (Auth::user()and Auth::user()->id==1 or Auth::user()->id==3 or Auth::user()->id==35 or Auth::user()->id==36)

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='far fa-user' style='font-size:24px'></i> المتوسطة </a>
<div class="dropdown-menu">

<a class="dropdown-item" href="/new_students/1/الجميع/1">
<i class='fas fa-users'></i> جميع المتقدمين </a>
<a class="dropdown-item" href="/new_students/1/المتوسطة/1">
<i class='far fa-user'></i> انتظار  </a>
<a class="dropdown-item" href="/new_students/1/المتوسطة/2">
<i class='far fa-thumbs-up'></i> المقبولين  </a>
<a class="dropdown-item" href="/new_students/1/المتوسطة/3">
<i class='far fa-thumbs-down'></i> المرفوضين  </a>
<a class="dropdown-item" href="/new_students/1/المتوسطة/5">
    <i class='far fa-handshake'></i> رشح للدراسة  </a>
<a class="dropdown-item" href="/print_all/المتوسطة">
<i class='fas fa-print' ></i> طباعة الاستمارات </a>
<a class="dropdown-item" href="/word/المتوسطة">
<i class='far fa-file-word' ></i> تصدير الاسماء </a>
<a class="dropdown-item" href="/student_Export_pdf/المتوسطة" target="_blank">
    <i class='far fa-file-pdf' ></i> تصدير الاسماء </a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='far fa-user' style='font-size:24px'></i> الثانوية </a>
<div class="dropdown-menu">
<a class="dropdown-item" href="/new_students/1/الثانوية/1">
<i class='far fa-user'></i> انتظار  </a>
<a class="dropdown-item" href="/new_students/1/الثانوية/2">
<i class='far fa-thumbs-up'></i> المقبولين  </a>
<a class="dropdown-item" href="/new_students/1/الثانوية/3">
<i class='far fa-thumbs-down'></i> المرفوضين  </a>
<a class="dropdown-item" href="/new_students/1/الثانوية/5">
    <i class='far fa-handshake'></i> رشح للدراسة  </a>
<a class="dropdown-item" href="/print_all/الثانوية">
    <i class='fas fa-print' ></i> طباعة الاستمارات </a>
    <a class="dropdown-item" href="/word/الثانوية">
    <i class='far fa-file-word' ></i> تصدير الاسماء </a>
    <a class="dropdown-item" href="/student_Export_pdf/الثانوية" target="_blank">
        <i class='far fa-file-pdf' ></i> تصدير الاسماء </a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='far fa-user' style='font-size:24px'></i>  العالية</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="/new_students/1/العالية/1">
<i class='far fa-user'></i> انتظار  </a>
<a class="dropdown-item" href="/new_students/1/العالية/2">
<i class='far fa-thumbs-up'></i> المقبولين  </a>
<a class="dropdown-item" href="/new_students/1/العالية/3">
<i class='far fa-thumbs-down'></i> المرفوضين  </a>
<a class="dropdown-item" href="/new_students/1/العالية/5">
    <i class='far fa-handshake'></i> رشح للدراسة  </a>
<a class="dropdown-item" href="/print_all/العالية">
    <i class='fas fa-print' ></i> طباعة الاستمارات </a>
    <a class="dropdown-item" href="/word/العالية">
    <i class='far fa-file-word' ></i> تصدير الاسماء </a>
    <a class="dropdown-item" href="/student_Export_pdf/العالية" target="_blank">
        <i class='far fa-file-pdf' ></i> تصدير الاسماء </a>
</li>

@endif

@if (Auth::user()and Auth::user()->id==1)

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class='far fa-clock'	 style='font-size:24px'></i> وضع الأسئلة</a>
    <div class="dropdown-menu">

    <a class="dropdown-item" href="/question/add/المتوسطة">
    <i class='far fa-edit'></i> المتوسطة   </a>

    <a class="dropdown-item" href="/question/add/الثانوية">
    <i class='far fa-edit'></i>  الثانوية </a>

    <a class="dropdown-item" href="/question/add/العالية">
        <i class='far fa-edit'></i> العالية  </a>

    </div>
    </li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class='fas fa-network-wired' style='font-size:24px'></i> تحكم</a>
<div class="dropdown-menu">

<a class="dropdown-item" href="/Powersـofـusers">
<i class='fas fa-chalkboard-teacher'></i> الصلاحيات   </a>

<a class="dropdown-item" href="/home">
<i class='fas fa-calculator'></i> احصائيات عامة </a>

<a class="dropdown-item" href="/Nationalitiesـstats">
    <i class='fas fa-calculator'></i> احصاء الجنسيات </a>


    <a class="dropdown-item" href="/statement_admin">
        <i class='fas fa-calculator'></i> التعاريف  </a>
</div>
</li>

@endif



{{ csrf_field() }}


@endif
@if (Auth::user()and Auth::user()->cp==4)
<a class="nav-item nav-link" href="/home">
    <i class='fa fa-calculator' ></i> احصائيات </a>

<a class="nav-item nav-link" href="/Distributionـofـcommittees/{{Auth::user()->Requestـstatus}}">
    <i class='far fa-address-card' ></i> عرض المتقدمين </a>

    <a class="nav-item nav-link" href="/print_all/{{Auth::user()->Requestـstatus}}">
        <i class='fas fa-print' ></i> طباعة الاستمارات </a>

        <a class="nav-item nav-link" href="/word/{{Auth::user()->Requestـstatus}}">
            <i class='far fa-file-word' ></i> تصدير الاسماء </a>

            <a class="nav-item nav-link" href="/student_Export_pdf/{{Auth::user()->Requestـstatus}}" target="_blank">
                <i class='far fa-file-pdf' ></i> تصدير الاسماء </a>
@endif


@if (Auth::user()and Auth::user()->cp==5)
<a class="nav-item nav-link" href="/home">
    <i class='fa fa-calculator' ></i> صفحة المعلومات</a>

<a class="nav-item nav-link" href="/exam/Results">
    <i class='far fa-address-card' ></i> نتائج الإختبارات</a>

    {{-- <a class="nav-item nav-link" href="/live/1">
        <i class='fas fa-print' ></i>  متابة الدروس عن بعد</a> --}}

        <a class="nav-item nav-link" href="/exam/statement">
            <i class='fas fa-print' ></i> طباعة الإفادة</a>

@endif
</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
@guest
<li class="nav-item">
{{-- <a class="nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a> --}}
</li>
@if (Route::has('register'))
<li class="nav-item">
{{-- <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a> --}}
</li>
@endif
@else
<li class="nav-item dropdown">

<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
</a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
{{ __('خروج') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>
</div>
</div>
</nav>

<main class="py-4">


@yield('content')

<div class="container">


<footer class="pt-4 my-md-5 pt-md-5 border-top ">
  <div class="row d-print-none text-center">

    <div class="col-md-4">
      <h5>الموقع</h5>
      <ul class="list-unstyled text-small">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3715.749568684225!2d39.884219085061744!3d21.36037108581968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2ssa!4v1573447700401!5m2!1sar!2ssa" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </ul>
    </div>
    <div class="col-md-4  text-left">
      <h5>اتصل بنا</h5>
      <ul class="list-unstyled text-small">
        <li><i class='fas fa-phone-square'></i> رقم الهاتف 0125284818</li>
        <li> <i class='fa fa-fax'></i> رقم الفاكس 0125284814</li>
        <a href="https://twitter.com/dar_h_makkah?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="ar" data-dnt="true" data-show-count="false">Follow @dar_h_makkah</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>      </ul>
    </div>
    <div class="col-md-4 text-left">
      <h5>برمجة وتصميم</h5>
      <ul class="list-unstyled text-small">
        <li><i class='far fa-id-card'></i> بندر العصيمي </li>
        <li> <i class='far fa-id-card'></i> خالد قورا</li>


      </ul>
    </div>
  </div>

</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



</main>
<footer id="sticky-footer" class="py-4 bg-white text-white-50">
        <div class="container text-center ">

 <p class="text-dark d-print-none">

جميع الحقوق محفوظة لدار الحديث الخيرية بمكة المكرمة            -
{!!$file = "يتصفح الموقع الآن";
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();
$content = @file_get_contents($file);
$new_content = $ip." = ".$time;
$content .= $new_content."\r\n";
@file_put_contents($file,$content);

$users = @parse_ini_file($file);
$count = 0;
foreach($users as $ip=>$time){
	if($time >= time() - 300){ // online users in past 5 minutes
		$count++;
	}
    if ($time < time() - 1800) { //delete file after 30 mins
        unlink($file);
    }
}
echo "<button type=\"button\" class=\"btn btn-success\">
    <span class=\"badge badge-light\">  $count </span>
  </button>";!!}         </p>
            </div>
      </footer>
</body>
</html>

