

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
<td style="text-align:right">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  الرقم : {{\Arabic\Arabic::num($id)}}<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التاريخ :  {{\Arabic\Arabic::adate($date)}}
    <br>
    <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Telegram/qrcode/{{$id}}.png" style="width:50%; max-width:100px;">


</td>

</tr>
</table>
<hr>










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
<br>  <b>{{$name}}</b>              الجنسية
/ <b>{{$Nationality}}</b>

<br>
ضمن
الطلاب
@switch($Status)
    @case('منتظم')
       المنتظمين
        @break
    @case('منتسب')
        المنتسبين
        @break
    @default

@endswitch
  بها للعام الدراسي  {{\Arabic\Arabic::num('1441')}} هـ بالصف :
{{$Class}}

<br>


وأعطيت
له هذه الإفادة بناءً على طلبه ودون أدنى مسؤولية على الدار لتقديمها إلى {{$Guidance}}

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
{!! QrCode::size(500)
    ->format('png')
    ->generate("https://darallhadith.com/Check/$id", public_path("Telegram/qrcode/$id.png")); !!}




<div class="center">
<img src="Signature/ktm.jpg" style="width:50%; max-width:170px;">
</div>
</body>
</html>
