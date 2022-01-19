@extends('layouts.app')

@section('content')
@section('title')
 -  إستخراج التعاريف
@endsection


<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div   id ='font_news' class="card-header"> إستخراج التعاريف  </div>

<div class="card-body">
    @livewire('statement-add')
    @livewireScripts
@livewire('statement-show')
    @livewireScripts

</div>
</div>
</div>
</div>

@endsection



