
@extends('layouts.app')

@section('content')
@section('title')
 - نبذة عن الدار 
@endsection
<link href="https://fonts.googleapis.com/css?family=Harmattan&display=swap" rel="stylesheet">
<style>
        #font_news {
            font-family: 'Harmattan', sans-serif
;font-size: 25px;
        }
        </style>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div   id ='font_news' class="card-header">نبذة عن الدار</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div  id ='font_news'>

                {{-- <img src="dar.jpeg"> --}}

    @foreach ($value as $item)

    {!! $item->the_news !!}


    @endforeach
    <hr>

    {{ $value->links() }}

</div>

</div>
</div>
</div>
</div>

@endsection
