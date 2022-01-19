<div>
    <div class="card-header"> الاسئلة</div>
    <div class="card-body">
        @if (session('success'))
            @include('sweetalert::alert')
        @endif
        @foreach ($value as $item)
        <table class="table">
            <tr>
                @if ($item->cp  ==1 )          <td> السؤال : {{$item->question }}  </td>@endif

            </tr>
            <tr>
                <td>
@if ($item->cp  ==3 )   {{$item->question }} <button class="btn btn-success btn-lg btn-block" style='font-size:20px'> شكرا لك تم إستلام اللإجابة على السؤال   <i class='far fa-check-circle'></i></button>@endif
@if ($item->cp  ==1)
                    <button type="button" class="btn btn-primary" wire:click.prevent="up('{{ $item->id }}')" data-toggle="modal" data-target="#add{{$item->id}}">
                    {{$item->question }}
                    @endif
                </td>

            </tr>
            <tr>

                <td>


        </table>





        <div wire:ignore.self class="modal fade" id="add{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="add{{$item->id}}" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> {{$item->question }}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">






                <button type="button" wire:click.prevent="answer1('{{ $item->id }}')" data-dismiss="modal" class="btn btn-success btn-lg btn-block">{{$item->answer1}} </button>
                   <button type="button" wire:click.prevent="answer2('{{ $item->id }}')" data-dismiss="modal" class="btn btn-primary btn-lg btn-block">{{$item->answer2}} </button>
                   <button type="button" wire:click.prevent="answer3('{{ $item->id }}')" data-dismiss="modal" class="btn btn-warning btn-lg btn-block">{{$item->answer3}}</button>
                 <button type="button" wire:click.prevent="answer4('{{ $item->id }}')" data-dismiss="modal" class="btn btn-info btn-lg btn-block">{{$item->answer4}}</button>



                    </div>
                    </div>

                </div>

              </div>

        @endforeach


</div>
