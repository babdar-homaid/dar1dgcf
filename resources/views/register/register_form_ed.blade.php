@extends('layouts.app')

@section('content')
@section('title')
- الطلاب الجدد
@endsection



<style>
  #btn {
    display: none;
  }

</style>








<div class="card">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">

        <form method="POST" action="/edit">
            {{ csrf_field() }}
            <input type='hidden' class="form-control" value="{{$form->id}}" name="id" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">


            <div class="row">
                <div class="col-sm-12 col-md-6 offset-sm-12">
                    <div class="form-group">
                        <label for="sel1">المرحلة المتقدم لها :</label>
                        <select class="form-control" name="Requestـstatus" id="sel1">

                            <option value="المتوسطة" @if($form->Requestـstatus=="المتوسطة") selected @endif>المتوسطة
                            </option>
                            <option value="الثانوية" @if($form->Requestـstatus=="الثانوية") selected @endif>الثانوية
                            </option>
                            <option value="العالية" @if($form->Requestـstatus=="العالية") selected @endif>العالية
                            </option>

                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 offset-sm-12">
                    <div class="form-group">
                        <label for="sel1">حالة الدراسة :</label>
                        <select class="form-control" name="Stage" id="sel1">
                            <option value="منتظم" @if($form->Stage=="منتظم") selected @endif>منتظم </option>
                            <option value="منتسب" @if($form->Stage=="منتسب") selected @endif>منتسب </option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">اسم المتقدم:</label>
                        <input type="text" value="{{$form->name}}" name="name" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name" required
                            autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">الجنسية:</label>
                        <select name="Nationality" class="custom-select">
                            @foreach ($value as $values)
                            <option value="{{$values->Nationalty_Id}}" @if($values->Nationalty_Id=="$form->Nationality")
                                selected @endif>{{$values->Nationalty_Name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">مكان الميلاد:</label>
                        <input type="text" value="{{$form->placeـofـbirth}}" name="placeـofـbirth" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> اليوم [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Day" class="custom-select">
                            <option value="1" @if($form->BirthDay_Day=="1") selected @endif>1</option>
                            <option value="2" @if($form->BirthDay_Day=="2") selected @endif>2</option>
                            <option value="3" @if($form->BirthDay_Day=="3") selected @endif>3</option>
                            <option value="4" @if($form->BirthDay_Day=="4") selected @endif>4</option>
                            <option value="5" @if($form->BirthDay_Day=="5") selected @endif>5</option>
                            <option value="6" @if($form->BirthDay_Day=="6") selected @endif>6</option>
                            <option value="7" @if($form->BirthDay_Day=="7") selected @endif>7</option>
                            <option value="8" @if($form->BirthDay_Day=="8") selected @endif>8</option>
                            <option value="9" @if($form->BirthDay_Day=="9") selected @endif>9</option>
                            <option value="10" @if($form->BirthDay_Day=="10") selected @endif>10</option>
                            <option value="11" @if($form->BirthDay_Day=="11") selected @endif>11</option>
                            <option value="12" @if($form->BirthDay_Day=="12") selected @endif>12</option>
                            <option value="13" @if($form->BirthDay_Day=="13") selected @endif>13</option>
                            <option value="14" @if($form->BirthDay_Day=="14") selected @endif>14</option>
                            <option value="15" @if($form->BirthDay_Day=="15") selected @endif>15</option>
                            <option value="16" @if($form->BirthDay_Day=="16") selected @endif>16</option>
                            <option value="17" @if($form->BirthDay_Day=="17") selected @endif>17</option>
                            <option value="18" @if($form->BirthDay_Day=="18") selected @endif>18</option>
                            <option value="19" @if($form->BirthDay_Day=="19") selected @endif>19</option>
                            <option value="20" @if($form->BirthDay_Day=="20") selected @endif>20</option>
                            <option value="21" @if($form->BirthDay_Day=="21") selected @endif>21</option>
                            <option value="22" @if($form->BirthDay_Day=="22") selected @endif>22</option>
                            <option value="21" @if($form->BirthDay_Day=="23") selected @endif>23</option>
                            <option value="24" @if($form->BirthDay_Day=="24") selected @endif>24</option>
                            <option value="25" @if($form->BirthDay_Day=="25") selected @endif>25</option>
                            <option value="26" @if($form->BirthDay_Day=="26") selected @endif>26</option>
                            <option value="27" @if($form->BirthDay_Day=="27") selected @endif>27</option>
                            <option value="28" @if($form->BirthDay_Day=="28") selected @endif>28</option>
                            <option value="30" @if($form->BirthDay_Day=="29") selected @endif>29</option>
                            <option value="30" @if($form->BirthDay_Day=="30") selected @endif>30</option>

                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> الشهر [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Month" class="custom-select">
                            <option value="1" @if($form->BirthDay_Month=="1") selected @endif>1</option>
                            <option value="2" @if($form->BirthDay_Month=="2") selected @endif>2</option>
                            <option value="3" @if($form->BirthDay_Month=="3") selected @endif>3</option>
                            <option value="4" @if($form->BirthDay_Month=="4") selected @endif>4</option>
                            <option value="5" @if($form->BirthDay_Month=="5") selected @endif>5</option>
                            <option value="6" @if($form->BirthDay_Month=="6") selected @endif>6</option>
                            7 <option value="8" @if($form->BirthDay_Month=="8") selected @endif>8</option>
                            <option value="9" @if($form->BirthDay_Month=="9") selected @endif>9</option>
                            <option value="10" @if($form->BirthDay_Month=="10") selected @endif>10</option>
                            <option value="11" @if($form->BirthDay_Month=="11") selected @endif>11</option>
                            <option value="12" @if($form->BirthDay_Month=="12") selected @endif>12</option>
                        </select> </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">السنة [تاريخ الميلاد]:</label>
                        <select name="BirthDay_Year" class="custom-select">
                            <option value="1390" @if($form->BirthDay_Year=="1390") selected @endif>1390</option>
                            <option value="1391" @if($form->BirthDay_Year=="1391") selected @endif>1391</option>
                            <option value="1392" @if($form->BirthDay_Year=="1392") selected @endif>1392</option>
                            <option value="1393" @if($form->BirthDay_Year=="1393") selected @endif>1393</option>
                            <option value="1394" @if($form->BirthDay_Year=="1394") selected @endif>1394</option>
                            <option value="1395" @if($form->BirthDay_Year=="1395") selected @endif>1395</option>
                            <option value="1396" @if($form->BirthDay_Year=="1396") selected @endif>1396</option>
                            <option value="1397" @if($form->BirthDay_Year=="1397") selected @endif>1397</option>
                            <option value="1398" @if($form->BirthDay_Year=="1398") selected @endif>1398</option>
                            <option value="1399" @if($form->BirthDay_Year=="1399") selected @endif>1399</option>
                            <option value="1400" @if($form->BirthDay_Year=="1400") selected @endif>1400</option>
                            <option value="1401" @if($form->BirthDay_Year=="1401") selected @endif>1401</option>
                            <option value="1402" @if($form->BirthDay_Year=="1402") selected @endif>1402</option>
                            <option value="1403" @if($form->BirthDay_Year=="1403") selected @endif>1403</option>
                            <option value="1404" @if($form->BirthDay_Year=="1404") selected @endif>1404</option>
                            <option value="1405" @if($form->BirthDay_Year=="1405") selected @endif>1405</option>
                            <option value="1406" @if($form->BirthDay_Year=="1406") selected @endif>1406</option>
                            <option value="1407" @if($form->BirthDay_Year=="1407") selected @endif>1407</option>
                            <option value="1408" @if($form->BirthDay_Year=="1408") selected @endif>1408</option>
                            <option value="1409" @if($form->BirthDay_Year=="1409") selected @endif>1409</option>
                            <option value="1410" @if($form->BirthDay_Year=="1410") selected @endif>1410</option>
                            <option value="1411" @if($form->BirthDay_Year=="1411") selected @endif>1411</option>
                            <option value="1451" @if($form->BirthDay_Year=="1412") selected @endif>1412</option>
                            <option value="1412" @if($form->BirthDay_Year=="1413") selected @endif>1407</option>
                            <option value="1414" @if($form->BirthDay_Year=="1414") selected @endif>1414</option>
                            <option value="1415" @if($form->BirthDay_Year=="1415") selected @endif>1415</option>
                            <option value="1416" @if($form->BirthDay_Year=="1416") selected @endif>1416</option>
                            <option value="1417" @if($form->BirthDay_Year=="1417") selected @endif>1417</option>
                            <option value="1418" @if($form->BirthDay_Year=="1418") selected @endif>1418</option>
                            <option value="1419" @if($form->BirthDay_Year=="1419") selected @endif>1419</option>
                            <option value="1420" @if($form->BirthDay_Year=="1420") selected @endif>1420</option>
                            <option value="1421" @if($form->BirthDay_Year=="1421") selected @endif>1421</option>
                            <option value="1422" @if($form->BirthDay_Year=="1422") selected @endif>1422</option>
                            <option value="1423" @if($form->BirthDay_Year=="1423") selected @endif>1423</option>
                            <option value="1424" @if($form->BirthDay_Year=="1424") selected @endif>1424</option>
                            <option value="1425" @if($form->BirthDay_Year=="1425") selected @endif>1425</option>
                            <option value="1426" @if($form->BirthDay_Year=="1426") selected @endif>1426</option>
                            <option value="1427" @if($form->BirthDay_Year=="1427") selected @endif>1427</option>
                            <option value="1428" @if($form->BirthDay_Year=="1428") selected @endif>1428</option>
                            <option value="1429" @if($form->BirthDay_Year=="1429") selected @endif>1429</option>




                        </select> </div>
                </div>
            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">رقم الهوية:</label>
                        <input type="text" value="{{$form->IdentificationـNumber}}" name="IdentificationـNumber"
                            class="form-control" placeholder="الحقل مطلوب  (السجل المدني)" id="text" required
                            autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">نوعها :</label>
                        <select class="form-control" name="Itsـhistory" id="sel1">
                            <option value="هوية وطنية" @if($form->Itsـhistory=="هوية وطنية") selected @endif>هوية وطنية
                            </option>
                            <option value="إقامة" @if($form->Itsـhistory=="إقامة") selected @endif>إقامة</option>
                        </select>
                    </div>
                </div>



                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label for="text">المهنة في الهوية :</label>
                        <input type="text" value="{{$form->Occupation}}" name="Occupation" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> اليوم [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Day" class="custom-select">
                            <option value="1" @if($form->Personality_End_Day=="1") selected @endif>1</option>
                            <option value="2" @if($form->Personality_End_Day=="2") selected @endif>2</option>
                            <option value="3" @if($form->Personality_End_Day=="3") selected @endif>3</option>
                            <option value="4" @if($form->Personality_End_Day=="4") selected @endif>4</option>
                            <option value="5" @if($form->Personality_End_Day=="5") selected @endif>5</option>
                            <option value="6" @if($form->Personality_End_Day=="6") selected @endif>6</option>
                            <option value="7" @if($form->Personality_End_Day=="7") selected @endif>7</option>
                            <option value="8" @if($form->Personality_End_Day=="8") selected @endif>8</option>
                            <option value="9" @if($form->Personality_End_Day=="9") selected @endif>9</option>
                            <option value="10" @if($form->Personality_End_Day=="10") selected @endif>10</option>
                            <option value="11" @if($form->Personality_End_Day=="11") selected @endif>11</option>
                            <option value="12" @if($form->Personality_End_Day=="12") selected @endif>12</option>
                            <option value="13" @if($form->Personality_End_Day=="13") selected @endif>13</option>
                            <option value="14" @if($form->Personality_End_Day=="14") selected @endif>14</option>
                            <option value="15" @if($form->Personality_End_Day=="15") selected @endif>15</option>
                            <option value="16" @if($form->Personality_End_Day=="16") selected @endif>16</option>
                            <option value="17" @if($form->Personality_End_Day=="17") selected @endif>17</option>
                            <option value="18" @if($form->Personality_End_Day=="18") selected @endif>18</option>
                            <option value="19" @if($form->Personality_End_Day=="19") selected @endif>19</option>
                            <option value="20" @if($form->Personality_End_Day=="20") selected @endif>20</option>
                            <option value="21" @if($form->Personality_End_Day=="21") selected @endif>21</option>
                            <option value="22" @if($form->Personality_End_Day=="22") selected @endif>22</option>
                            <option value="21" @if($form->Personality_End_Day=="23") selected @endif>23</option>
                            <option value="24" @if($form->Personality_End_Day=="24") selected @endif>24</option>
                            <option value="25" @if($form->Personality_End_Day=="25") selected @endif>25</option>
                            <option value="26" @if($form->Personality_End_Day=="26") selected @endif>26</option>
                            <option value="27" @if($form->Personality_End_Day=="27") selected @endif>27</option>
                            <option value="28" @if($form->Personality_End_Day=="28") selected @endif>28</option>
                            <option value="30" @if($form->Personality_End_Day=="29") selected @endif>29</option>
                            <option value="30" @if($form->Personality_End_Day=="30") selected @endif>30</option>

                        </select>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text"> الشهر [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Month" class="custom-select">
                            <option value="1" @if($form->Personality_End_Month=="1") selected @endif>1</option>
                            <option value="2" @if($form->Personality_End_Month=="2") selected @endif>2</option>
                            <option value="3" @if($form->Personality_End_Month=="3") selected @endif>3</option>
                            <option value="4" @if($form->Personality_End_Month=="4") selected @endif>4</option>
                            <option value="5" @if($form->Personality_End_Month=="5") selected @endif>5</option>
                            <option value="6" @if($form->Personality_End_Month=="6") selected @endif>6</option>
                            7 <option value="8" @if($form->Personality_End_Month=="8") selected @endif>8</option>
                            <option value="9" @if($form->Personality_End_Month=="9") selected @endif>9</option>
                            <option value="10" @if($form->Personality_End_Month=="10") selected @endif>10</option>
                            <option value="11" @if($form->Personality_End_Month=="11") selected @endif>11</option>
                            <option value="12" @if($form->Personality_End_Month=="12") selected @endif>12</option>
                        </select> </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-sm-12">
                    <div class="form-group">
                        <label for="text">السنة [تاريخ الانتهاء]:</label>
                        <select name="Personality_End_Year" class="custom-select">
                            <option value="1441" @if($form->Personality_End_Year=="1441") selected @endif>1441</option>
                            <option value="1442" @if($form->Personality_End_Year=="1442") selected @endif>1442</option>
                            <option value="1443" @if($form->Personality_End_Year=="1442") selected @endif>1443</option>
                            <option value="1444" @if($form->Personality_End_Year=="1443") selected @endif>1444</option>
                            <option value="1445" @if($form->Personality_End_Year=="1445") selected @endif>1445</option>
                            <option value="1446" @if($form->Personality_End_Year=="1446") selected @endif>1446</option>
                            <option value="1447" @if($form->Personality_End_Year=="1447") selected @endif>1447</option>
                            <option value="1448" @if($form->Personality_End_Year=="1448") selected @endif>1448</option>
                            <option value="1449" @if($form->Personality_End_Year=="1449") selected @endif>1449</option>
                            <option value="1450" @if($form->Personality_End_Year=="1450") selected @endif>1450</option>
                            <option value="1451" @if($form->Personality_End_Year=="1451") selected @endif>1451</option>

                        </select> </div>
                </div>
            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">الشهادة الحاصل عليها :</label>
                        <input type="text" value="{{$form->Certificate}}" name="Certificate" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">الجهة المانحة :</label>
                        <input type="text" value="{{$form->Donor}}" name="Donor" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">تاريخها :</label>
                        <input type="text" value="{{$form->Dateـofـtheـcertificate}}" name="Dateـofـtheـcertificate"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">التقدير :</label>
                        <input type="text" value="{{$form->Appreciation}}" name="Appreciation" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">رقم جوال الطالب :</label>
                        <input type="text" value="{{$form->Mobile_number}}" name="Mobile_number" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم ولي أمر الطالب :</label>
                        <input type="text" value="{{$form->Guardian}}" name="Guardian" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">جوالي ولي الأمر :</label>
                        <input type="text" value="{{$form->Guardian_Mobile}}" name="Guardian_Mobile"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">العنوان :</label>
                        <input type="text" value="{{$form->Guardian_Mobile}}" name="Student_address"
                            class="form-control" placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <hr>
            <div class="row">


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم المزكي(1) :</label>
                        <input type="text" value="{{$form->mzki1}}" name="mzki1" class="form-control"
                            placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> جهة عمله :</label>
                        <input type="text" value="{{$form->Currency1}}" name="Currency1" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text"> اسم المزكي(2) :</label>
                        <input type="text" value="{{$form->mzki2}}" name="mzki2" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


                <div class="col-sm-12 col-md-3">
                    <div class="form-group">
                        <label for="text">جهة عمله :</label>
                        <input type="text" value="{{$form->Currency2}}" name="Currency2" class="form-control"
                            placeholder="الحقل مطلوب" id="text" required autocomplete="name">
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 offset-sm-12">
                    <button type="submit" class="btn btn-success">تعديل</button>
                </div>

        </form>


        <form method="POST" action="/dlFile">
            {{ csrf_field() }}
            <input type='hidden' class="form-control" value="{{$form->user_id}}" name="id" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">
            <div class="col-sm-12 col-md-3 offset-sm-12">
                <button type="submit" class="btn btn-danger">حذف ملف الوثائق</button>
            </div>
            <input type="hidden" value="{{$form->Mobile_number}}" name="Mobile_number" class="form-control"
                placeholder="الحقل مطلوب  " id="text" required autocomplete="name">
            <input type="hidden" value="{{$form->name}}" name="name" class="form-control" placeholder="الحقل مطلوب"
                id="text" required autocomplete="name" required autocomplete="name">
                <br>

        </form>
    </div>
    <form method="POST" action="/studentـregistrationadmin" enctype="multipart/form-data">
        {{ csrf_field() }}

</div>
<hr>
<div class="d-flex justify-content-center">

    <h3>لرفع ملف</h3>

<div class="col-sm-12 col-md-3 offset-sm-12">

    <input type='hidden' class="form-control" value="{{$form->user_id}}" name="user_id" placeholder="الحقل مطلوب"
        id="text" required autocomplete="name" required autocomplete="name">
    <input type='hidden' class="form-control" value="{{$form->id}}" name="id" placeholder="الحقل مطلوب" id="text"
        required autocomplete="name" required autocomplete="name">
        <input type="file" id="btn"  name="upload"/>
        <label for="btn" id="lable" class="btn btn-danger">

            اختر الملف

          <img
            src="https://cdn4.iconfinder.com/data/icons/default-social-line/24/upload-512.png"
            alt=""
            srcset=""
            width="20"
            style="padding: 2px;"
          />
        </label>
        <br>
        <span id="file-name"></span>
        <br>
    <button type="submit" class="btn btn-danger"> رفع الملف </button>
</div>
</form>
</div>
</div>
</div>
</div>
<script>
    let btn = document.getElementById("btn");
    let lable = document.getElementById("file-name");
    btn.addEventListener("change", function (event) {
      let up = event.target.files[0].name;
      console.log(up)
      lable.textContent = up;
    });
  </script>


@endsection
