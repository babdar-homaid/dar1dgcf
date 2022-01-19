
@extends('layouts.app')

@section('content')
@section('title')
 - الطلاب الجدد
@endsection

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div   id ='font_news' class="card-header">الطلاب الجدد  </div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<div class="table-responsive">
    @if(Auth::user()->Requestـstatus ==$id)

<table class="table table-striped">
  <thead>
    <tr>
      <th>مسلسل</th>
      <th>الاسم</th>
      <th>الجنسية</th>
      <th>القيد</th>
      <th>الحالة</th>
      <th>عرض</th>
    </tr>
  </thead>
  @if($sum=0)
  @endif
@foreach ($value as $item)
@if($sum++)
  @endif

  <tr>
  <td>{{$sum}}</td>
    <td>{{$item->name}}</td>
    <td>
    {{$item->national->Nationalty_Name}}

     </td>
     <td>
    {{$item->Stage}}

     </td>
    <td>
        @if($item->hndl1==1)<button type="button" class="btn btn-warning"> الطلب انتظار </button> @endif
        @if($item->hndl1==2)<button type="button" class="btn btn-success">الطلب مقبول  </button> @endif
        @if($item->hndl1==3)<button type="button" class="btn btn-danger">الطلب مرفوض  </button> @endif

     </td>

    <td><a href="/New_student_information/{{$item->id}}"><i class='far fa-eye' style='font-size:20px'></i></a></a></td>
  </tr>

@endforeach

</table>
</div>

{{ $value->links() }}
@endif
@if(Auth::user()->Requestـstatus !=$id)

<div class="card border-danger mb-3" >
    <div ><h4>صاحب المستخدم</h4></div>
    <div class="card-body text-danger">
      <h5 class="card-title"><h4> {{Auth::user()->name}}</h4></h5>
      <p class="card-text"><h4> لا تفتش في شغل غيرك انجز عملك وبس</h4></p>
    </div>
  </div>
@endif
</div>
</div>
</div>
</div>
</div>
@endsection
