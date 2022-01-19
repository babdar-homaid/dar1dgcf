<div>
<hr>

    <div class="row justify-content-center">

        <div class="col-md-2">
        <button wire:click.prevent='sms({{$value->id}})' class="btn btn-success col-sm-12" type="button" data-toggle="modal" data-target="#exampleModal{{$value->id}}">
          رسالة جوال
        </button>
    </div>
</div>


           <!-- Modal -->
<div  wire:ignore.self class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal{{$value->id}}"> رسالة جوال للمتقدم {{$value->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

  <input type="hidden" wire:model.defer="Mobile_number" value="{{$value->Mobile_number}}">
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> نص الرسالة</label>
    <textarea  wire:model.defer="text"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

<button wire:click.prevent='send({{$value->id}})'type="button" data-dismiss="modal" class="btn btn-primary" > ارسل</button>


        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
   <br>
  <div class="row justify-content-center">
    <div class="col-md-12">

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  </div>

  <script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
  </script>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">م</th>
            <th scope="col">الاسم</th>
            <th scope="col">وقت الارسال</th>
            <th scope="col"> المرسل</th>

          </tr>
        </thead>


    @foreach ($val as $item)


  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><a  title="نص الرسالة" data-toggle="popover" data-placement="top" data-content="{{$item->text_u}}">{{$item->name}}</a></td>
      <td>{{\Arabic\Arabic::since($item->created_at)}}</td>
      <td>{{$item->admin}}</td>

    </tr>
    <tr>
    @endforeach
</tbody>
</table>
</div>


</div>
</div>
