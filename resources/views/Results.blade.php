@extends('layouts.app')

@section('content')
<div class="container">
        {!! file_get_contents('http://darallhadith.com/s/dar2/s.php') !!}

@endsection
