@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> ترتيب الكتب</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <br />
                    <form method="post" action="/orby">
                        {{ csrf_field() }}
                        @if(session('msg'))
                        <div class="alert alert-success">
                            <p>
                                {{session('msg')}}
                        </div>
                        @endif
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th scope="col">الكتاب</th>
                                    <th scope="col">المؤلف</th>
                                    <th scope="col">المرحلة</th>
                                    <th scope="col">ترتيب</th>
                                </tr>
                                @if($sum=0)
                                @endif
                                @foreach ($value as $sum=> $item)

                                @if($sum++)
                                @endif
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{$item->name}}</td>
                                    <td>{{$item->note}}</td>
                                    <td>{{$item->Stage}}</td>
                                    <td><input name="orby[]" value="{{$item->orby}}"> </td>
                                    <input name="id[]" value="{{$item->id}}" type="hidden">


                                    </td>
                                </tr>


                            </tbody>
                            @endforeach
                        </table>
                        <td><input name="sum" value="{{$sum}}" type="hidden"> </td>

                        <button type="submit" class="btn btn-primary"> رتب </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
