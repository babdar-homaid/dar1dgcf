
@extends('layouts.app')

@section('content')
@section('title')
 -  التسجيل والقبول
@endsection


<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div   id ='font_news' class="card-header"> التسجيل والقبول </div>

<div class="card-body">


{{-- <div  id ='font_news'>
    <div class="card  bg-warning mb-3" >
        <div class="card-header"> <i class='fas fa-bullhorn' style='font-size:24px'></i>
          أنتهت المدة المحددة لقبول الملفات </div> --}}


              <br/>  <br/>

 <a href="/register_new"> <button type="button" class="btn btn-success">تسجيل جديد</button></a>
 <a href="/home"><button type="button" class="btn btn-primary">متابعة تسجيل سابق</button></a>

                <br/>  <br/>
                <br/> <br/>

</div>
</div>
</div>
</div>

@endsection
