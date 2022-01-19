



<table class="table table-striped">
  <thead>
    <tr>
      <th>اي دي</th>
      <th>الاسم</th>
      <th>التقدم</th>
      <th>الحالة</th>
      <th>الموظف المدقق</th>
      <th>عرض</th>
    </tr>
  </thead>
  @if($sum=0)
  @endif
@foreach ($value as $item)
@if($sum++)
  @endif
  <tr>
  <td>{{$item->user->id}}</td>


    <td>{{$item->name}} {{$item->user->email}}</td>
    <td>
        @if($item->hndl==2)<button type="button" class="btn btn-warning">تم تسجيل الاستمارة</button> @endif
        @if($item->hndl==3)<button type="button" class="btn btn-success"> تم تسجيل الاستمارة ورفع الملف  </button> @endif

     </td>
    <td>
        @if($item->hndl1==1)<button type="button" class="btn btn-warning"> الطلب انتظار </button> @endif
        @if($item->hndl1==2)<button type="button" class="btn btn-success">الطلب مقبول  </button> @endif
        @if($item->hndl1==3)<button type="button" class="btn btn-danger">الطلب مرفوض  </button> @endif
        @if($item->hndl1==4)<button type="button" class="btn btn-Info">تصحيح الطلب</button> @endif

     </td>

<td> {{$item->EmployeeـName['name']}}</td>
    <td><a href="/New_student_information/{{$item->id}}"><i class='far fa-eye' style='font-size:20px'></i></a>
   <a href="/form/{{$item->id}}"><i class='far fa-edit' style='font-size:20px'></i></a>
</td>
  </tr>


@endforeach

</table>



