@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class=" col-md-8">
        <div class="card text-center">
            <div class="card-header">
                إستخراج إفادة طالب
            </div>
            <div class="card-body">
                <form method="POST" action="/exam/statement">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="sel1"> أختر الفئة</label>
                        <select class="form-control" id="sel1" name="name">
                            <option value="إدارة الجوازات">تعريف للجوازات</option>
                            <option value="من يهمه الأمر">تعريف لمن يهمه الأمر</option>
                            <option value="وقف المغاربة">تعرف لوقف المغارية</option>
                        </select>
                        <br>
                        <hr>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary form-control">ارسال</button>
                        </div>
                        <br>
                </form>
            </div>
            @include('sweetalert::alert')
            <table class="table table-striped ">
                <tr>
                    <th>م</th>
                    <th>تاريخ الإفادة</th>
                    <th> الجهة</th>
                    <th>تحميل</th>
                </tr>
                @if ($sum=0)
                @endif
                @foreach ($data as $item)
                @if ($sum++)
                @endif
                <tr>
                    <td>{{\Arabic\Arabic::adate($sum)}}</td>
                    <td>{{\Arabic\Arabic::adate($item->date)}}</td>
                    <td>{{$item->Guidance}}</td>
                    <th><a href="/exam/General_definition/{{$item -> id}}" style="color:green;">
                            <button type='submit' class="btn btn-dark"><i class="fas fa-file-download"></i></button>
                        </a></th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

</div>
