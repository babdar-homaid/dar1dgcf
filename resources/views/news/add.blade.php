

@extends('layouts.app')

@section('content')
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">اضافة خبر</div>
<div class="row">

        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>
            @endforeach
        </ul>

</div>
<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif



<form method="POST" action="">
{{ csrf_field() }}
<div class="form-group">
<label for="exampleInputEmail1">عنوان الخبر </label>
<input name="title" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">نص الخبر</label>
<textarea class="tinymce" name="the_news"></textarea>                      </div>

<button type="submit" class="btn btn-primary">أدخل الخبر</button>
</form>




<br/>

@if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif
         <table class="table table-bordered">
            .
        <thead>
          <tr>
            <th scope="col">الخبر</th>
            <th scope="col">الكاتب</th>
            <th scope="col">عرض</th>
          </tr>
          @foreach ($value as $sum=> $item)


        </thead>
        <tbody>
          <tr>
            <td> {{$item->title}}</td>
            <td>{{$item->user->name}}</td>
            <td><a href="delete_news/{{$item->id}}"  onclick="return confirm('هل انت متاكد من حذف الخبر؟');" target="_top" >حذف</a> </td>
          </tr>


        </tbody>
        @endforeach
      </table>
      {{ $value->links() }}

      @include('sweetalert::alert')


</div>
</div>
</div>
</div>

@endsection
