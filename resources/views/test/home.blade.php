@extends('layouts.app')

@section('content')
@section('title')
 - الاختبارات 
@endsection
<div class="card">

<div class="container">

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

{{ csrf_field() }}
@if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif
</div>

@endsection
