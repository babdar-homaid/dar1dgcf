@extends('layouts.app')

@section('content')
<div class="row justify-content-center">


  
      
        <div class=" col-md-8">
            <div class="card text-center">
       <div class="card-header">
     شهادات طلاب دار الحديث (مراحل التخرج)
       </div>
       <div class="card-body">
         <form method="post"  action='/certificates1'>
         {{ csrf_field() }}

             <div class="form-group row">
                  
                     <div class="col-md-12">
                     <label for="">رقم البطاقه</label>

                     <input type="text" name="id"  class="form-control" aria-describedby="helpId">
                    </div>
                   

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

