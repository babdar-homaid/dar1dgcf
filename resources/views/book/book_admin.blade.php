@extends('layouts.app')

@section('content')
<script type="text/javascript" src="boox/plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="boox/plugin/tinymce/init-tinymce.js"></script>
<div class="container">

<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md"
      aria-selected="true">الكتب والمناهج</a>

</ul>
<div class="tab-content card pt-5" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
      <table class="table table-bordered">

          <thead>
            <tr>
              <th scope="col">الكتاب </th>
              <th scope="col">المؤلف</th>
              <th scope="col">القسم</th>
              <th scope="col">وصول</th>
            </tr>



          </thead>
          <tbody>
            <tr>
              <td> {{$name->name}}</td>
              <td>{{$name->note}}</td>
              <td>{{$name->Stage}}</td>
              <td><a href="/show_book/{{$name->id}}">عرض</a> </td>
            </tr>


          </tbody>

        </table>


      </div>
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
        @endif



        <form method="POST" action="/add_curriculum">
        {{ csrf_field() }}


        <div class="form-group">
          <label for="comment">المنهج</label>
          <textarea name="note" class="form-control" rows="5" placeholder="الحقل مطلوب" required id="comment"></textarea>
        </div>

            <input type="hidden" value="{{$name->name}}" name="name" type="text" class="form-control" id="text">

               <input type="hidden" value="{{$name->Stage}}" name="Stage"  class="form-control" >

                <input type="hidden" value="{{$name->id}}" name="book_id"  class="form-control" >



        <button type="submit" class="btn btn-primary">أدخل المنهج</button>
        </form>
    <br>
    @if(session('msg'))
<div class="alert alert-success">
<p>
{{session('msg')}}
</div>
@endif

@foreach ($value as $values)


<div class="alert alert-success">
    <a href="/update_book/{{$values->id}}"><i class='far fa-edit' style='font-size:25px;color:red'> </i></a>
<li> <strong>{!! nl2br($values->note) !!}</strong> </li>
</div>
@endforeach
@include('sweetalert::alert')

@endsection
