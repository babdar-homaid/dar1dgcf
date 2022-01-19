@extends('layouts.app')

@section('content')



 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @livewire('show-answer')
                @livewireScripts
            </div>
        </div>
    </div>
</div>


@endsection
