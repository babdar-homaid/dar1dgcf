@extends('layouts.app')

@section('content')



@livewire('add-question',['id' =>$id])
    @livewireScripts

    @livewire('up-question',['id' =>$id])
    @livewireScripts

    @livewire('show-question',['id' =>$id])
    @livewireScripts



    @endsection
