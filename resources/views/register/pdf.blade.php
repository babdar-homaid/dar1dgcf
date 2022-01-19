
<!doctype html>
<html dir="rtl">
<head>


    <meta charset="utf-8">
<title>بيان باسماء طلاب المرحلة {{$id}}</title>

<style>
 body{
    font-size: 30px;

    font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
 }

table {
    font-family: 'KFGQPC Uthman Taha Naskh',  sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 18px;
}

th, td {
    text-align: right;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<table>

<tr>

                <thead ><th> م </th>
                <th>رقم الاستمارة</th>
                <th>الاسم بالكامل</th>
                <th>الجنسية</th>
                <th> القيد</th>
            </tr>
        </thead >
            <tbody>
            @foreach ($collection as $index => $value)
           @if($index++)@endif
            <tr class="details">
                <td>{{\Arabic\Arabic::num($index)}}</td>
                    <td>{{\Arabic\Arabic::num($value->id)}}</td>
                    <td>{{$value->name}}</td>
                  <td>{{$value->national->Nationalty_Name}}</td>
                  <td>{{$value->Stage}}</td>


            </tr>
        </tbody>

            @endforeach
        </table>
    </div>
</body>
</html>

