@extends('layouts.app')

@section('content')
@section('title')
- الطلاب الجدد
@endsection

@if($value->hndl1==1)<div class="container alert alert-warning">@endif
    @if($value->hndl1==2)<div class="container alert alert-success">@endif
        @if($value->hndl1==3)<div class="container alert alert-danger">@endif

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

                    @if(Auth::user()->Requestـstatus ==$value->Requestـstatus or Auth::user()->cp==2 )
                    <div class="d-flex justify-content-center">

                    <p > استمارة تسجيل طالب {{$value->Stage}} بالمرحلة {{$value->Requestـstatus}} للعام الدراسي ١٤٤٢هـ</p>
                </div>
                    <div class="d-flex justify-content-center ">

                    <p> رقم الاستمارة {{\Arabic\Arabic::num($value->id)}}
                    </p>
                        </div>

                    <div class="table-responsive ">

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
                                    <td><a href="{{ route('print_one', ['id'=>$value->id]) }}">{{$value->name}}</a></td>
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
                                    <td><a
                                    href="/whatsapp/966{{$value->Mobile_number}}/{{$value->name}}/{{$value->id}}/{{$value->Requestـstatus}}">{{\Arabic\Arabic::num($value->Mobile_number)}}</a>
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

                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="{{ asset('upload_registration')}}/{{$value->user_id}}.pdf" width="100"
                        height="375"></iframe>
                </div>
            </div>
        </div>
    </div>
    <hr>

    @else

    <div class="card border-danger mb-3">
        <div>
            <h4>صاحب المستخدم</h4>
        </div>
        <div class="card-body text-danger">
            <h5 class="card-title">
                <h4> {{Auth::user()->name}}</h4>
            </h5>
            <p class="card-text">
                <h4> لا تفتش في شغل غيرك انجز عملك وبس</h4>
            </p>
        </div>
    </div>
    @endif


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
    @foreach ($attachment as $index => $item)
    <tbody>
        <tr>
          <td> <a href="/attachment/{{$item->user_id}}/{{$item->url}}"> الملف ({{$item->url}})</a></td>
          <td> @if (Auth::user()and Auth::user()->id==1 )<a href="/dropzonedl/{{$item->id}}/{{$item->url}}/{{$item->user_id}}/{{$value->id}}" onclick="return confirm('هل أنت متأكد من الحذف؟');">@endif <button type="button" class="btn btn-danger">حذف</button> </a>
          </td>
        </tr>
    </tbody>
    @endforeach
</table>
    </div>
    @endif
    @if (Auth::user()and Auth::user()->cp==2 and $value->hndl1 ==2 )
    <div class="card border-success mb-3" style="max-width: 25rem;    width: 60%;
    margin: 0 auto;
    ">
            <div class="card-header">العمل على الطلب</div>
            <div class="card-body text-success">



                <div class="form-group">
                    <form method="POST" action="/New_student_information_post">
                        {{ csrf_field() }}

                        <label for="sel1">الاجراء :</label>
                        <select class="form-control" name="hndl1" id="sel1">
                            <option value="5">فتح تحميل النواقص</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-primary">تنفيذ</button>
                <input type="hidden" value="{{$value->id}}" name="id">
                <input type="hidden" value="{{$value->Mobile_number}}" name="Mobile_number">
                <input type="hidden" value="{{$value->name}}" name="name">
                <input type="hidden" value="{{$value->user_id}}" name="user_id">

                </form>
            </div>
            @endif
    @if (Auth::user()and Auth::user()->cp==2 and $value->hndl1 !=2 )

    <div class="card border-success mb-3" style="max-width: 25rem;    width: 60%;
margin: 0 auto;
">
        <div class="card-header">العمل على الطلب</div>
        <div class="card-body text-success">



            <div class="form-group">
                <form method="POST" action="/New_student_information_post">
                    {{ csrf_field() }}

                    <label for="sel1">الاجراء :</label>
                    <select class="form-control" name="hndl1" id="sel1">
                        <option value="2">قبول الملف</option>
                        <option value="5">فتح تحميل النواقص</option>
                        <option value="3">رفض الملف</option>
                        <option value="4">اعادة التسجيل</option>
                        <option value="6">رد ملف دار الفائزين</option>


                    </select>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err1" class="form-check-input" value="الهوية غير مجددة"> الهوية غير
                    مجددة
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err9" class="form-check-input" value="لم يتم إرفاق الهوية"> لم يتم إرفاق الهوية

                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err10" class="form-check-input" value="لم يتم إرفاق الشهادة"> لم يتم إرفاق الشهادة

                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err8" class="form-check-input"
                        value="الشهادة غير مترجمة من جهة معتمدة">الشهادة غير مترجمة من جهة معتمدة
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err2" class="form-check-input" value="الشهادات غير مصدقة">الشهادات غير
                    مصدقة
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err3" class="form-check-input" value="التزكيات غير مكتملة">التزكيات غير
                    مكتملة
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err4" class="form-check-input" value="لا توجد موافقة جهة العمل">لا توجد
                    موافقة جهة العمل
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err5" class="form-check-input" value="لا توجد صورة لجواز السفر">لا توجد
                    صورة لجواز السفر
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err6" class="form-check-input"
                        value="الوثائق المرفقة غير واضحة">الوثائق المرفقة غير واضحة
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="err7" class="form-check-input" value="الملف غير مكتمل حسب الشروط">الملف
                    غير مكتمل حسب الشروط
                </label>
            </div>
            <button type="submit" class="btn btn-primary">تنفيذ</button>
            <input type="hidden" value="{{$value->id}}" name="id">
            <input type="hidden" value="{{$value->Mobile_number}}" name="Mobile_number">
            <input type="hidden" value="{{$value->name}}" name="name">
            <input type="hidden" value="{{$value->user_id}}" name="user_id">


            </form>
        </div>

        @endif




        @include('sweetalert::alert')



    </div>
</div>

@endsection
