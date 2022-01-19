

<!doctype html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8">
<title>تعريف طالب منتسب</title>

<style>
body{
font-size: 20px;

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

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  الرقم : <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التاريخ :
    <br>
    <br>


</td>

</tr>
</table>
<hr>

@foreach ($User as $Users)
    {{$Users->name}}
@endforeach

@foreach ($values as $value)

<br>
{{$value->question}} الجواب : {{$value->answer}} النتيجة : {{$value->final}}

<hr>

@endforeach

<div class="center">
<img src="Signature/ktm.jpg" style="width:50%; max-width:170px;">
</div>
</body>
</html>
