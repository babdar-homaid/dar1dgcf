@extends('layouts.app')

@section('content')
@section('title')
-الكتب والمناهج {{$id}}
@endsection
<div class="container">

<ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
    <div class="nav-link active"    role="tab" aria-controls="home-md"
      aria-selected="true">
       @if($id=="المتوسط")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة المتوسطة</h3> @endif
      @if($id=="الثانوي")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة الثانوية</h3> @endif
      @if($id=="العالي")<h3><a href="/">صفحة البداية</a> <i class='fas fa-angle-double-left'></i> منهج وكتب المرحلة العالية</h3> @endif</div>

</ul>
<div class="tab-content card pt-5" id="myTabContentMD">
  <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">

<br>
     <table class="table">

          <thead>
            <tr>
                <th scope="col">المادة <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col">الكتاب <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col "  class="d-none d-sm-block ">المؤلف <i class='fas fa-chevron-circle-down'></i></th>
              <th scope="col"> </th>
            </tr>
            @foreach ($value as $sum=> $item)


          </thead>
          <tbody>
            <tr>
               <td> {{$item->Subject}}</td>
              <td> {{$item->name}}</td>
              <td  class="d-none d-sm-block ">{{ str_limit($item->note, 40)}}</td>
              <td><a href="/show_book/{{$item->id}}"><i class='far fa-eye' style='font-size:36px'></i></a> </td>
            </tr>


          </tbody>
          @endforeach
        </table>
        {{ $value->links() }}

      </div>
    </div>


@endsection
