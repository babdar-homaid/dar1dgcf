@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">




        <div class=" col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    طلب مراجعة
                </div>
                <div class="card-body">
                    <form method="POST" action="exsl" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="">الاسم</label>

                                <input type="file" name="file"  class="form-control"  aria-describedby="helpId">
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

