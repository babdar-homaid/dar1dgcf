<div>


    @if (session()->has('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif



<input value="{{$data->Mobile_number}}" type="hidden" wire:model="Mobile_number"  class="form-control">
<input value="{{$data->name}}" type="hidden" wire:model="name"  class="form-control">
<input value="{{$data->id}}" type="hidden" wire:model="user_id"  class="form-control">


<br>
<hr>

    <button wire:click.prevent='add' class="btn btn-primary form-control">ارسال</button>

<br>
</div>
