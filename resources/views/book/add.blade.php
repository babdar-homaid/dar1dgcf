

@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">إضافة كتاب</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<div class="alert alert-success" role="alert">


<form method="POST"  action="/add_book" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<label for="Subject"> المادة</label>
<input name="Subject" type="text" class="form-control" id="text" aria-describedby="text">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">اسم الكتاب</label>
    <input name="name" type="text" class="form-control" id="text" aria-describedby="text">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">المؤلف </label>
        <input name="note" type="text" class="form-control" id="text" aria-describedby="text">
        <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> الرابط</label>
            <input name="url" type="text" class="form-control" id="text" aria-describedby="text">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="sel1">المرحلة</label>
                <select name="Stage" class="form-control" id="sel1">
                  <option>المتوسط</option>
                  <option>الثانوي</option>
                  <option>العالي</option>

                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1"> صورة الكتاب</label>
                  <input type="file" class="form-control-file border" name="upload">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
<button type="submit" class="btn btn-primary">أدخل الكتاب</button>
</form>
</div>



<br/>
<form method="POST" action="orby" >
    {{ csrf_field() }}
@if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif
         <table class="table table-bordered">

        <thead>
          <tr>
            <th scope="col">الكتاب</th>
            <th scope="col">المؤلف</th>
            <th scope="col">المرحلة</th>
            <th scope="col">إضافة منهج</th>
            <th scope="col">ادارة</th>
          </tr>
          @if($sum=0)
          @endif
          @foreach ($value as $sum=> $item)

          @if($sum++)
          @endif
        </thead>
        <tbody>
          <tr>
            <td> {{$item->name}}</td>
            <td>{{$item->note}}</td>
            <td>{{$item->Stage}}</td>
            <td><a href="show_book_admin/{{$item->id}}">إضافة</a> </td>


            <td><a href="update_name_book/{{$item->id}}"><i class='far fa-edit' style='font-size:25px;color:red'> </i></a>
              <a href="delete_book/{{$item->id}}" onclick="return confirm('حذف الكتاب معناه حذف جميع متعلقاته من المنهج');" target="_top" >  <i class='far fa-trash-alt' style='font-size:25px;color:red'> </i></a>
            </td>
          </tr>


        </tbody>
        @endforeach
      </table>
      {{ $value->links() }}


</form>

</div>
@include('sweetalert::alert')

</div>
</div>
</div>
@endsection
