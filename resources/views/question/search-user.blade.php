<div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    بحث
  </button>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">بحث عن طالب</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="exampleInputEmail1">ضع الأسم أو رقم الهوية</label>
                <input wire:model.debounce.500ms="search" type="text" class="form-control" id="text" aria-describedby="text">
                @error('answer1') <span class="error text-danger">{{ $message }}</span> @enderror

                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

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

  <td> {{$item->EmployeeـName->name ?? null}}</td>
      <td><a href="/New_student_information/{{$item->id}}"><i class='far fa-eye' style='font-size:20px'></i></a>
     <a href="/form/{{$item->id}}"><i class='far fa-edit' style='font-size:20px'></i></a>
  </td>
    </tr>


  @endforeach

  </table>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
        </div>
      </div>
    </div>
  </div>


</div>
