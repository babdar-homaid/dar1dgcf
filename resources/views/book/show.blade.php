

@extends('layouts.app')
@section('title')
-كتاب {{$name->name}}
@endsection

@section('content')

<div class="container">
    <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
        <div class="nav-link active"    role="tab" aria-controls="home-md"
          aria-selected="true">
    @if($name->Stage=="المتوسط")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i><a href="/index_book/المتوسط"> منهج وكتب المرحلة المتوسطة</a></h3> @endif
    @if($name->Stage=="الثانوي")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i><a href="/index_book/الثانوي"> منهج وكتب المرحلة الثانوية</a></h3> @endif
    @if($name->Stage=="العالي")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i><a href="/index_book/العالي"> منهج وكتب المرحلة العالية</a></h3> @endif</div>
</ul>
<div class="tab-content card pt-5" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">

    <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 offset-md-1 mx-3 my-3">

            <!-- Featured image -->
            <div class="view overlay">
              <img src="/upload/{{$name->url_image}}" class="img-fluid" alt="Sample image for first version of blog listing">
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
                {{$name->name}}  </h3>
     <footer class="pt-4 my-md-5 pt-md-5 border-top">
@switch($name->name)
    @case("القرآن")
       @break
    @case("القرآن الكريم")
       @break
    @default
    <h4 class="h4 mb-4"> المولف : {{$name->note}}</h4>
 @endswitch


 @switch($name->name)
 @case("القرآن")
    @break
    <h4 class="h4 mb-4">يتم تدريس  القرآن الكريم في القسم {{$name->Stage}}</h4>

 @case("القرآن الكريم")
 <h4 class="h4 mb-4">يتم تدريس  القرآن الكريم في القسم {{$name->Stage}}</h4>

    @break
 @default
 <h4 class="h4 mb-4">يتم تدريس هذا الكتاب في القسم {{$name->Stage}}</h4>
 @endswitch


     @foreach ($value as $item1)
   <div  class="alert alert-success arb">
     <li> <strong>{!! nl2br($item1->note) !!}</strong> </li></p>
    </div>
     @endforeach






     @switch($name->Stage)
     @case("المتوسط")
     <a href="/book1/{{$name->url}}"> <button type="button" class="btn btn-success"> حمل الكتاب <i class='fas fa-cloud-download-alt'></i></button></a>
     <a href="/Export_pdf/{{$name->id}}" target="_blank"> <button type="button" class="btn btn-success"> تصدير المنهج  <i class='far fa-file-pdf'></i></button></a>

        @break

     @case("الثانوي")
     <a href="/book2/{{$name->url}}"> <button type="button" class="btn btn-success"> حمل الكتاب <i class='fas fa-cloud-download-alt'></i></button></a>
     <a href="/Export_pdf/{{$name->id}}" target="_blank"> <button type="button" class="btn btn-success"> تصدير المنهج  <i class='far fa-file-pdf'></i></button></a>

        @break
        @case("العالي")
        <a href="/book3/{{$name->url}}"> <button type="button" class="btn btn-success"> حمل الكتاب <i class='fas fa-cloud-download-alt'></i></button></a>
        <a href="/Export_pdf/{{$name->id}}" target="_blank"> <button type="button" class="btn btn-success"> تصدير المنهج  <i class='far fa-file-pdf'></i></button></a>

        @break
     @default
     <h4 class="h4 mb-4"> المولف : {{$name->note}}</h4>
  @endswitch

  @if (Auth::user()and Auth::user()->cp==2)
  <a href="/update_name_book/{{$name->id}}"><button type="button" class="btn btn-success"><i class='far fa-edit' style='font-size:25px;color:red'> </i></button></a>
  <a href="/delete_book/{{$name->id}}" onclick="return confirm('حذف الكتاب معناه حذف جميع متعلقاته من المنهج');" target="_top" ><button type="button" class="btn btn-success">  <i class='far fa-trash-alt' style='font-size:25px;color:red'></i></button></a>

  @endif



          </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- News jumbotron -->

      @include('sweetalert::alert')




@endsection
