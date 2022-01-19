@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div id="online">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   التحضير
                    <table class="table">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الجنسية</th>
                                <th>الصف</th>

                                <th>الحالة</th>
                            </tr>
                        </thead>
                        <tbody >

                            @foreach ($users as $user)
                                <tr >
                                     <td>{{ $user->name }}</td>
                                     <td>{{$user->cardـrelationship->Nationality}}</td>
                                     <td>{{$user->cardـrelationship->Class}}</td>

                                     <td>

                                         @if ($user->isOnline())
                                             <li class="text-success">
                                                حاضر
                                             </li>
                                         @else
                                             <li class="text-muted">
                                                غير متواجد
                                            </li>
                                         @endif

                                     </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
