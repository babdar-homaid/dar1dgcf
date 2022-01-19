<div>
    <div class="container">
        <div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>

            @endif
        </div>
        <div class="table-responsive">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th scope="col">م</th>
                        <th scope="col">السوال</th>
                        <th scope="col">الجواب الأول</th>
                        <th scope="col">الجواب الثاني</th>
                        <th scope="col">الجواب الثالث</th>
                        <th scope="col">الجواب الرابع</th>
                        <th scope="col">الجواب الصواب</th>
                        <th scope="col">إدارة </th>

                    </tr>
                    @if($sum=0)
                    @endif
                    @foreach ($value as $sum=> $item)

                    @if($sum++)
                    @endif
                </thead>

                <tr>
                    <td> {{$sum}}</td>

                    <td> {{$item->question}}</td>
                    <td>{{$item->answer1}}</td>
                    <td>{{$item->answer2}}</td>
                    <td>{{$item->answer3}}</td>
                    <td>{{$item->answer4}}</td>
                    <td>{{$item->trues}}</td>


                    <td>


                        <div wire:click.prevent="up('{{ $item->id }}')" class="btn" data-toggle="modal" data-target="#up">
                            <i class='far fa-edit' style='font-size:25px;color:rgb(0, 99, 9)'> </i> </div>


                            <button onclick="confirm('هل أنت متأكد من الحذف؟') || event.stopImmediatePropagation()"
                            wire:click="dl({{ $item->id }}) " class="btn"><i class='far fa-trash-alt'
                                style='font-size:25px;color:red'> </i></button>




                    </td>
                </tr>


                @endforeach
            </table>
        </div>




    </div>

    <div wire:loading>


    <div wire:ignore.self class="modal fade" id="up" tabindex="-1" role="dialog" aria-labelledby="up"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل السؤال </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <input wire:model.defer="id_question" value="{{$item->id}}" type="hidden"
                    class="form-control" id="text" aria-describedby="hidden">
                <div class="row">
                    <div class="col-sm-12 col-md-12 offset-sm-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> السؤال</label>
                            <input wire:model.defer="question" value="{{$item->question}}"
                                type="text" class="form-control" id="text"
                                aria-describedby="text">
                            @error('question') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 offset-sm-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1"> الجواب الأول</label>
                            <input wire:model.defer="answer1" value="{{$item->answer1}}"
                                type="text" class="form-control" id="text"
                                aria-describedby="text">
                            @error('question') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> الجواب الثاني</label>
                            <input wire:model.defer="answer2" value="{{$item->answer2}}"
                                type="text" class="form-control" id="text"
                                aria-describedby="text">
                            @error('question') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 offset-sm-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1"> الجواب الثالث</label>
                            <input wire:model.defer="answer3" value="{{$item->answer3}}"
                                type="text" class="form-control" id="text"
                                aria-describedby="text">
                            @error('question') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> الجواب الرابع</label>
                            <input wire:model.defer="answer4" value="{{$item->answer4}}"
                                type="text" class="form-control" id="text"
                                aria-describedby="text">
                            @error('question') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 offset-sm-12">

                        <div class="form-group">
                            <label for="sel1">الجواب الصحيح</label>
                            <select wire:model.defer="trues" value="{{$item->trues}}"
                                class="form-control" id="sel1">
                                <option value="1">الأول</option>
                                <option value="2">الثاني</option>
                                <option value="3">الثالث</option>
                                <option value="4">الرابع</option>
                            </select>
                            @error('trues') <span
                                class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button wire:click.prevent='up2' class="btn btn-primary"
                        data-dismiss="modal"> حفظ</button>
                </div>
            </div>

        </div>
    </div>

</div>
</div>




</div>
