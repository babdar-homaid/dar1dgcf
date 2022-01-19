
@extends('layouts.app')

@section('content')
@section('title')
 - الاختبارات 
@endsection
<div class="card">

<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>
<form method="POST" action="/a1" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="col-sm-12 col-md-4 offset-sm-12"><div class="form-group">
        <label for="text"> رقم البطاقة:</label>
        <input type="text"   name="card"  class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name" required autocomplete="name" >
      </div></div>

<div class="col-sm-12 col-md-3 offset-sm-12">

<label for="exampleInputEmail1"> اختر الملف  </label>
<input type="file" class="form-control-file border" name="upload" required autocomplete="new-password">
<input type='hidden' class="form-control"  name="user_id" placeholder="الحقل مطلوب" id="text" required autocomplete="name" required autocomplete="name" >

<button type="submit" class="btn btn-danger"> رفع الملف </button>
</div></form>
</div>

</div>

</div>
</div>

@endsection
