@extends('layouts.app')

@section('content')
@section('title')
- كشف درجات الفصل الثاني
@endsection
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="card">
                <div id='font_news' class="card-header"> كشف درجات الفصل الثاني </div>
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

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>المادة</th>
                                <th>الفصل الاول</th>
                                <th>الفصل الثاني</th>
                                <th>الفصل الثاني</th>
                            </tr>
                        </thead>
                        @if($bb =App\Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number',
                        $Student_Number)
                        ->where('Item_Name', '!=' , 'السلوك')
                        ->where('Item_Name', '!=' , 'المواظبة')
                        ->get())@endif
                        @foreach ($bb as $value)
                        @if( $value->Chapter_Degree_2 + $value->Chapter_Degree_1 < $value->Item_Low_Degree_2 or
                            $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 or $value->Absence_Kind_Id_1==8 or
                            $value->Absence_Kind_Id_1==9)
                            <tbody>
                                <tr>
                                    <td>
                                        {{$value->Item_Name}}</td>
                                    <td>
                                        @if( $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 ) غ
                                        @else
                                        {{$value->Chapter_Degree_1}}
                                        @endif
                                    </td>
                                    <td>
                                        @if( $value->Absence_Kind_Id_1==8 or $value->Absence_Kind_Id_1==9) غ
                                        @else
                                        {{$value->Chapter_Degree_2}}
                                        @endif
                                    </td>
                                    <td>
                                        @if( $value->Chapter_Degree_2 < $value->Item_Low_Degree_1 and
                                            $value->Chapter_Degree_1 < $value->Item_Low_Degree_1 )
                                             الفصلان
                                                @elseif( $value->Absence_Kind_Id==8 and $value->Absence_Kind_Id==9 )
                                                الفصلان
                                                @elseif( $value->Absence_Kind_Id==9 and $value->Absence_Kind_Id==9 )
                                                الفصلان
                                                @elseif( $value->Absence_Kind_Id==8 and $value->Absence_Kind_Id==8 )
                                                الفصلان
                                                @elseif( $value->Chapter_Degree_1 < $value->Item_Low_Degree_1 or
                                                    $value->Absence_Kind_Id==8 or $value->Absence_Kind_Id==9 )
                                                    الفصل الأول
                                                    @elseif( $value->Chapter_Degree_2 < $value->Item_Low_Degree_1 or
                                                        $value->Absence_Kind_Id_1==8 or $value->Absence_Kind_Id_1==9 )
                                                        الفصل الثاني
                                                        @endif
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
