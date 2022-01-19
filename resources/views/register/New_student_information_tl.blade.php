@extends('layouts.app')

@section('content')
@section('title')
- الطلاب الجدد
@endsection

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                @if(session('msg'))
                <div class="alert alert-success">
                    <p>

                        {{session('msg')}}
                </div>
                @endif
                <div id='font_news' class="card-header">الطلاب الجدد </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="d-flex justify-content-center">

                    <p> استمارة تسجيل طالب {{$value->Stage}} بالمرحلة {{$value->Requestـstatus}} للعام الدراسي ١٤٤٢هـ</p>
                </div>
                    <div class="d-flex justify-content-center">

                    <p> رقم الاستمارة {{\Arabic\Arabic::num($value->id)}}
                    </p>
                        </div>
                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th>الاسم بالكامل <i class='fas fa-sort-down'></i></th>
                                    <th>الجنسية <i class='fas fa-sort-down'></i></th>
                                    <th>تاريخ الميلاد <i class='fas fa-sort-down'></i></th>
                                    <th>مكان الميلاد <i class='fas fa-sort-down'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>@if($Nationalty){{$Nationalty}}@endif</td>
                                    <td>
                                        {{\Arabic\Arabic::num($value->BirthDay_Year."/".$value->BirthDay_Month."/".$value->BirthDay_Day)}} هـ
                                    </td>
                                    <td>{{$value->placeـofـbirth}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <hr>

                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-active">

                                    <th>رقم الهوية <i class='fas fa-sort-down'></i></th>
                                    <th>نوعها <i class='fas fa-sort-down'></i></th>
                                    <th> تاريخ الانتهاء <i class='fas fa-sort-down'></i></th>
                                    <th>المهنة في الهوية <i class='fas fa-sort-down'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{\Arabic\Arabic::num($value->IdentificationـNumber)}}</td>
                                    <td>{{$value->Itsـhistory}}</td>
                                    <td>
                                        {{\Arabic\Arabic::num($value->Personality_End_Year."/".$value->Personality_End_Month."/".$value->Personality_End_Day)}}
                                        هـ</td>
                                    <td>{{$value->Occupation}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th>الشهادة الحاصل عليها <i class='fas fa-sort-down'></i></th>
                                    <th>الجهة المانحة <i class='fas fa-sort-down'></i></th>
                                    <th>تاريخها <i class='fas fa-sort-down'></i></th>
                                    <th> التقدير <i class='fas fa-sort-down'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$value->Certificate}}</td>
                                    <td>{{$value->Donor}}</td>
                                    <td>{{\Arabic\Arabic::num($value->Dateـofـtheـcertificate)}}</td>
                                    <td>{{$value->Appreciation}}</td>
                                </tr>

                            </tbody>
                        </table>


                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th>رقم جوال الطالب <i class='fas fa-sort-down'></i></th>
                                    <th> ولي امر الطالب <i class='fas fa-sort-down'></i></th>
                                    <th>جوال ولي أمر الطالب <i class='fas fa-sort-down'></i></th>
                                    <th> عنوان الطالب <i class='fas fa-sort-down'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{\Arabic\Arabic::num($value->Mobile_number)}}
                                    </td>
                                    <td>{{$value->Guardian}}</td>
                                    <td>{{\Arabic\Arabic::num($value->Guardian_Mobile)}}</td>
                                    <td>{{$value->Student_address}}</td>
                                </tr>

                            </tbody>
                        </table>


                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-active">
                                    <th> اسم المزكي الأول <i class='fas fa-sort-down'></i></th>
                                    <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                                    <th>اسم المكزي الثاني <i class='fas fa-sort-down'></i></th>
                                    <th> جهة عمله <i class='fas fa-sort-down'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$value->mzki1}}</td>
                                    <td>{{$value->Currency1}}</td>
                                    <td>{{$value->mzki2}}</td>
                                    <td>{{$value->Currency2}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>





            @if( $attachment->count()>0)
            <div class="card border-success mb-3" style="max-width: 25rem;    width: 60%;
            margin: 0 auto;
            ">
              <h4>النواقص</h4>
    <table class="table">
        <thead>
          <tr>
            <th>الملف</th>
         <th>ادارة</th>
          </tr>
        </thead>

</table>
    </div>
    @endif



    </div>
</div>

@endsection
