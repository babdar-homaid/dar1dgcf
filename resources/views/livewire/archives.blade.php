<div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">

  بحث عن ملف في الأرشيف
</button>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> بحث في ملفات الأرشيف</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            <div class="form-group">
                <label for="exampleInputEmail1">ضع الأسم</label>
                <input wire:model.debounce.500ms="search" type="text" class="form-control" id="text" aria-describedby="text">
                @error('search') <span class="error text-danger"></span> @enderror

                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>الاسم</th>
                    <th>رقم الملف</th>

                  </tr>
                </thead>
            @foreach ($data as $item)



            <tr>
            <td>{{$item->name}}</td>


              <td>{{$item->id}} </td>


                  @endforeach

                </table>

                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        </div>
      </div>
    </div>
  </div>






    </div>
