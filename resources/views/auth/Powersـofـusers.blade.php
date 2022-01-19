@extends('layouts.app')
@section('content')
@section('title')
التحكم -
@endsection

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div   id ='font_news' class="card-header">التحكم بالمستخدمين</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<form method="POST" action="Powersـofـusers">
{{ csrf_field() }}
<div class="row">
<div class="col-sm-12 col-md-6 offset-sm-12"><div class="form-group">
<label for="sel1"> العضو :</label>

<select class="form-control" name="id" id="sel1">
@foreach ($users as $item)
<option value="{{$item->id}}">
     {{$item->name}}
     @if($item->cp==2) (مشرف عام) @endif
     @if($item->cp==4) (مشرف للمرحلة {{$item->Requestـstatus}}) @endif
</option>
@endforeach
</select>

</div></div>


<div class="col-sm-12 col-md-6 offset-sm-12">
    <div class="form-group">
    <label for="sel1">الصلاحية :</label>
    <select class="form-control" name="admin" id="sel1">
        <option value="عام">مشرف عام </option>
        <option value="العالية">مشرف عالي </option>
        <option value="الثانوية">مشرف ثانوي </option>
        <option value="المتوسطة">مشرف متوسط </option>


    </select>
</div>
</div>





<div class="col-sm-12 col-md-6 offset-sm-12">
    <div class="form-group">

<button type="submit" class="btn btn-primary">تعديل</button>
</div>
</div>

</form>

</div>
</div>
</div>
</div>
</div>

@endsection
