@extends('layouts.app')

@section('content')
@section('title')
 -  إستخراج التعاريف
@endsection


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header">إرسال تنبيهات على الجوال</div>

<div class="card-body">
 @livewire('add-send-sms',['id' =>$id])
@livewireScripts
@livewire('send-sms',['id' =>$id])
@livewireScripts



</div>
</div>
</div>
</div>

@endsection
