@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">صفحة البداية</div>

     <div class="card-body">

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


                    <tr >
                         <td>{{ $User->name }}</td>
                         <td>{{$User->cardـrelationship->Nationality}}</td>

                         <td>{{ $User->Class }}</td>
                          <td>{{ $User->Status }}</td>



                    </tr>


            </tbody>
        </table>
        <div class="row d-flex justify-content-center">




                <div class="col-sm-4 col-md-4"> <a href="/exam/1"><button type="button " class="btn btn-outline-success">درجات الفصل الأول</button></a></div>
                    <div class="col-sm-4 col-md-4"><a href="/exam/2"> <button type="button " class="btn btn-outline-success">درجات الفصل الثاني</button></a></div>
                 <div class="col-sm-4 col-md-4"> <a href="/exam/3"><button type="button " class="btn btn-outline-success">درجات الدور الثاني</button></a></div>
        </div>
    </div>


    </div>
</div>
</div>
</div>

@endsection
