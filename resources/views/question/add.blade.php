@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-header"> المرحلة {{$id}}</div>
            <td><a href="/question/addQ/{{$id}}"><button type="button" class="btn btn-success btn-lg btn-block">ضع الإسئلة</button></a></td>
            <div class="card-body">
                    @if (session('success'))
                    @include('sweetalert::alert')
                      @endif
                      @if ($value=='[]')
                      <div > لا يوجد طالبات</div>

                      @endif
                      @if ($value!='[]')
                      <div class="table-responsive">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td> مسلسل </td>
                            <td> الاسم </td>
                            <td> الاسئلة الغير مجابة</td>
                            <td> الاسئلة المجابة</td>



                        </tr>
                        @foreach ($value as $index=> $item)
                        <tr>
                            @if (++$index )
                            @endif


                            <td> {{$index}} </td>

                            <td> {{$item->name}} </td>
                            <td>   <button type="button" class="btn btn-primary">
                                <span class="badge badge-light">{{App\special_question::where('cp',1)->where('user_id',$item->id)->count()}} </span>
                             </button></td>

                            <td>   <button type="button" class="btn btn-primary"> <a href="/answer/final/{{$item->id}}">
                                <span class="badge badge-light">{{App\special_question::where('cp',3)->where('user_id',$item->id)->count()}}</span>
                             </button> </a></td>

                        </tr>
                        @endforeach

                    </table>
<br>
                <a href="/question/charge/{{$id}}"><button type="button" class="btn btn-success">
                            انزال الاسئلة
                            {{App\question::where('Requestـstatus','المتوسطة')->count()}}</button></a>

                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</div>



@endsection
