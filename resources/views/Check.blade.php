@extends('layouts.app')

@section('content')
<div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
  التحقق من التعريف
       </div>
       <div class="card-body">

        <div class="table-responsive">



            <table class="table table-bordered">
                <thead>
                    <tr class="table-active">
                        <th>الاسم  <i class='fas fa-sort-down'></i></th>
                        <th>الجنسية <i class='fas fa-sort-down'></i></th>
                        <th>تاريخ التعريف <i class='fas fa-sort-down'></i></th>
                        <th>الجهة  <i class='fas fa-sort-down'></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$values->name}}</td>
                    <td>{{$values->Nationality}} </td>
                        <td>
                            {{\Arabic\Arabic::num($values->date)}}
                        </td>
                        <td>{{$values->Guidance}}</td>
                    </tr>

                </tbody>
            </table>

       </div>


     </div>
     </div>
     </div>
     @endsection

    </div>

