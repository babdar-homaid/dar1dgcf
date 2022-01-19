@extends('layouts.app')

@section('content')
<div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
      طلب مراجعة
       </div>
       <div class="card-body">
         <form method="POST">
             @csrf
             <div class="form-group row">
                     <div class="col-md-6">
                     <label for="">الاسم</label>

                     <input type="text" name="name"  class="form-control"  aria-describedby="helpId">
                     </div>
                     <div class="col-md-6">
                     <label for="">رقم البطاقه</label>

                     <input type="text" name="num_id" id="" class="form-control" aria-describedby="helpId">
                    </div>
                    <div class="col-md-12">

                     <label for="">الغرض من المراجعة</label>
                     <textarea name="text" id="" cols="5" rows="5" class="form-control"></textarea>
                     </div>
                    <br>
                    <hr>
                    <div class="col-md-12">

                     <button type="submit" class="btn btn-primary form-control">ارسال</button>
                     </div>
                     <br>

             </div>
         </form>

       </div>
       @include('sweetalert::alert')

     </div>
     </div>
     </div>
     @endsection

    </div>

