@extends('layouts.app')
@section('content')
@section('title')
 - الاخبار - {{$value->title}}  
@endsection
<link href="https://fonts.googleapis.com/css?family=Scheherazade&display=swap" rel="stylesheet">

<style>
        #font_news {
            font-family: 'Scheherazade', serif;font-size: 25px;
        }
        </style>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header">{{$value->title}} </div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
@include('sweetalert::alert')

{{ session('status') }}
</div>
@endif

<div  id ='font_news'>
{!! $value->the_news !!}
</div>

</div>
</div>
</div>
</div>

@endsection
