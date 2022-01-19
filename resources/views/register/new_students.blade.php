
@extends('layouts.app')

@section('content')
@section('title')
 - الطلاب الجدد
@endsection
<div  id ='ch' bhs='13'>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header">الطلاب الجدد المرحلة {{$id}}  @include('register.searchuser')</div>


<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<div class="table-responsive">

<table class="table table-striped">
  <thead>
    <tr>
      <th>مسلسل</th>
      <th>الاسم</th>
      <th>التقدم</th>
      <th>الحالة</th>
      <th>الموظف المدقق</th>
      <th>عرض</th>
      <th>الوقت</th>

    </tr>
  </thead>
  @if($sum=0)
  @endif

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover();
    });
</script>
@foreach ($value as $item)
@if($sum++)
  @endif

  <tr>
  <td>{{$sum}} </td>
    <td>{{$item->name}}</td>
    <td>
        @if($item->hndl==2)<button type="button" class="btn btn-warning">تم تسجيل الاستمارة</button> @endif
        @if($item->hndl==3)<button type="button" class="btn btn-success"> تم تسجيل الاستمارة ورفع الملف  </button> @endif

     </td>
    <td>
        @if($item->hndl1==1)<a href="{{ route('sendsms', ['id'=>$item->id]) }}"><button type="button" class="btn btn-warning"> الطلب انتظار </button> @endif
       @if($item->hndl1==2)  <a href="{{ route('addok', ['id'=>$item->id,'name'=>$id]) }}"> <button type="button" class="btn btn-success">الطلب مقبول </button> </a> @endif
    @if($item->hndl1==3)<a   title="السبب" data-toggle="popover" data-placement="top" data-content="{{$item->note}}"> <button type="button" class="btn btn-danger">الطلب مرفوض  </button></a> @endif
        @if($item->hndl1==4)<button type="button" class="btn btn-Info">تصحيح الطلب</button> @endif
        @if($item->hndl1==5) <button type="button" class="btn btn-success">رشح للدراسة </button>  @endif


     </td>
<td> {{$item->EmployeeـName->name ?? ''}}</td>
    <td><a href="/New_student_information/{{$item->id}}"><i class='far fa-eye' style='font-size:20px'></i></a>
   <a href="/form/{{$item->id}}"><i class='far fa-edit' style='font-size:20px'></i></a></td>
    <td> {{\Arabic\Arabic::since($item->created_at)}}</td>

  </tr>

  </div>

@endforeach

</table>


{{ $value->links() }}
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection
