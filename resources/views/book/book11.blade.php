@extends('layouts.app')

@section('content')
@section('title')
{{$name->name}}
@endsection
<div class="container">
{{$name->name}}
@foreach ($value as $item)
    {{ $item->note }}
@endforeach
@endsection
