<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






    {!!


        $detail= App\book::all();
        foreach ($detail as $key => $value) {

            Form::hidden($namesIdsCount = App\book::where('name',$value->name))


         ->groupBy('name')
         ->count();
         echo"<br>";
         echo    $namesIdsCount.$value->name;

        }



    !!}

    <p>example by ItSolutionStuf.com.</p>
</div>

</body>
</html>
