
@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">تعديل كتاب</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif



<form method="POST" action="/update_name_book" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Subject"> المادة</label>
<input value="{{$value->Subject}}" name="Subject" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">اسم الكتاب</label>
    <input value="{{$value->name}}" name="name" type="text" class="form-control" id="text" aria-describedby="text">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">المؤلف </label>
        <input value="{{$value->note}}" name="note" type="text" class="form-control" id="text" aria-describedby="text">
        <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> الرابط</label>
            <input value="{{$value->url}}" name="url" type="text" class="form-control" id="text" aria-describedby="text">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> صورة الكتاب</label>
                  <input type="file" class="form-control-file border" name="upload">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <input type="hidden" value="{{$value->id}}" name="id">
<button type="submit" class="btn btn-primary">عدل الكتاب</button>
</form>







<br/>
@endsection
