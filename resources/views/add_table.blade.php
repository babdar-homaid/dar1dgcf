

@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">إضافة جداول</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<br/>

@if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif
<div class="alert alert-success" role="alert">


<form method="POST" action="add_table" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Subject"> معلوات الجداول</label>
<input name="note" type="text" class="form-control" id="text" aria-describedby="text" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>

</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول متوسط </label>
<input type="file" class="form-control-file border" name="upload1" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني متوسط </label>
<input type="file" class="form-control-file border" name="upload2" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث متوسط </label>
<input type="file" class="form-control-file border" name="upload3" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول ثانوي </label>
<input type="file" class="form-control-file border" name="upload4" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني ثانوي </label>
<input type="file" class="form-control-file border" name="upload5" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث ثانوي </label>
<input type="file" class="form-control-file border" name="upload6" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الأول عالي </label>
<input type="file" class="form-control-file border" name="upload7" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثاني عالي </label>
<input type="file" class="form-control-file border" name="upload8" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الثالث عالي </label>
<input type="file" class="form-control-file border" name="upload9" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> الرابع عالي </label>
<input type="file" class="form-control-file border" name="upload10" required autocomplete="new-password">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<button type="submit" class="btn btn-primary">أدخل الجداول</button>
</form>
</div>


@include('sweetalert::alert')




</div>
</div>
@endsection
