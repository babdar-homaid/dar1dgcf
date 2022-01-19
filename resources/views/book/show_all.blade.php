

@extends('layouts.app')
@section('title')

@endsection
<style>

    .fo{
      font-family: 'Roboto', sans-serif;font-size: 30px;

    }
    
    </style>

@section('content')

@foreach ($detail as $value)

<style>
      @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

@media print {
.bb {
page-break-before: always;
}
}

</style>


<div class="container bb fo">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->

        <div class="row">

          <!-- Grid column -->

          <div class="col-md-4 offset-md-1 mx-3 my-3">

            <!-- Featured image -->

            <div class="view overlay">
              <img src="/upload/{{$value->book->url_image}}" class="img-fluid" alt="Sample image for first version of blog listing">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-7 text-md-left ml-3 mt-3">

            <!-- Excerpt -->

              <h3 class="h3 pb-1"> <i class='fas fa-book' style='font-size:48px;color:red'></i>
                {{$value->name}}  </h3>
                <footer class="pt-4 my-md-5 pt-md-5 border-top">
                        @switch($value->book->name)
                        @case("القرآن")
                           @break
                        @case("القرآن الكريم")
                           @break
                        @default
                        <h4 class="h4 mb-4"> المولف : {{$value->book->note}}</h4>
                     @endswitch



   <div  class="alert alert-success arb">
     <li> <strong>{!! nl2br($value->note) !!}</strong> </li></p>
    </div>











          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
    </div>

      <!-- News jumbotron -->
      @endforeach

@endsection
