

<!doctype html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8">
<title>تعريف طالب منتسب</title>

<style>
body{
font-size: 27px;

font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
}

.center {
text-align: center;
border: 0px solid green;
}

.left {
text-align:left;
border: 0px solid green;
}

.right {
text-align:right;
border: 0px solid green;
}


table, th, td {
border: px solid black;
}
</style>
</head>

<body>


<table style="width:100%">
<tr>
<td style="text-align:right">
<img src="image/dar.jpeg" style="width:50%; max-width:170px;">
<br>



</td>
<td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td><td >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td style="text-align:left">

الرقم : الخدمات الالكترونية<br>
التاريخ :  {{\Arabic\Arabic::adate('w j  F Y ')}}

</td>

</tr>
</table>
<hr>


@foreach ($values as $value)







<div class="center">
بسم الله الرحمن الرحيم
</div>

<div class="center">
إفادة
</div>

تفيد
إدارة دار الحديث الخيرية بمكة المكرمة بأن

الطالب
/  
<br>  {{$value->Name}}               الجنسية
/ {{$value->Nationality}} 

<br> 
ضمن
الطلاب المنتسبين بها للعام الدراسي  {{\Arabic\Arabic::num('1440/1439')}} هـ بالصف :
{{$value->Class}} 

<br> 

علماً بأن اختبار الفصل الدراسي الثاني

{{\Arabic\Arabic::num('يبدأ يوم الاربعاء  1440/8/12هـ')}}
وينتهي يوم الاثنين
{{\Arabic\Arabic::num('الموافق 1440/8/24 هـ')}}
. {{$value->name}}  
@switch($value->Class)
@case("الأول الثانوي  ")


{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}      @break
@case('االثاني الثانوي  ')


{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}       @break

@case('الثالث الثانوي  ')


{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}  @break
@default

@endswitch

@switch($value->Class)
@case("الأول المتوسط  ")



{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}     @break
@case('الثاني المتوسط  ')


{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}   @break

@case('الثالث المتوسط  ')


{{\Arabic\Arabic::num('و لديه اختبار شفهي يوم الأحد 1440/8/9 هـ صباحا')}}        @break
@default

@endswitch




وأعطيت
له هذه الإفادة بناءً على طلبه لتقديمها إلى من يهمه الأمـر

<div class="center">
والله ولي التوفيق
</div>




<div class="left">مدير عام دار الحديث الخيرية
<br>

<div class="left">
<img src="Signature/m.jpg" style="width:50%; max-width:170px;">
</div>
د . سليمان بن وائل التويجرى

</div>

{{-- {!! QrCode::size(100)->generate(Request::url()); !!} --}}

@endforeach

<div class="center">
<img src="Signature/ktm.jpg" style="width:50%; max-width:170px;">
</div>

</body>
</html>
