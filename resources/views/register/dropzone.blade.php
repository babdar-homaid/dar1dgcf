


<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<div id ='rv21'>


@if( $dropzone->count()<5)
<form action="/fileupload"

class="dropzone"
id="my-awesome-dropzone">
@csrf

</form>
@else
<div class="alert alert-success">
    <strong>شكر لك  تم استقبال الملفات المطلوبة</strong>
  </div>


@endif
</div>
<div id ='rv1'>
    @if($index=6)@endif
    @foreach ($dropzone as $index => $item)
    @if($index++)@endif
    <br>
    <div class="d-flex justify-content-center">

    <a href="attachment/{{Auth::user()->id}}/{{$item->url}}"> الملف ({{$item->url}})</a>
    &nbsp;&nbsp;&nbsp;&nbsp;

    </div>
    @endforeach



    <input id="id" type="hidden" value="{{$dropzone->count()}}">



@switch($index)
@case(6)
@break
@case(5)
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  جميع الملفات المطلوبة </h4>
</div>
@break
@case(4)
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الرابع</h4>
</div>
@break
@case(3)
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الثالث</h4>
</div>
@break
@case(2)
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع  الملف الثاني</h4>
</div>
@break
@case(1)
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">تم رفع تم رقع الملف الأول </h4>
</div>
@break
@default
<div class="d-flex justify-content-center">
<h4 class="h4 mb-4">يجب عليك التقيد برفع اربعة ملفات فقط</h4>
</div>
@endswitch
</div>

