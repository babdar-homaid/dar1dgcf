

@extends('layouts.app')

@section('content')

<div class="container">









     <form method="POST" action="/update_book">
      {{ csrf_field() }}


      <div class="form-group">
        <label for="comment">المنهج</label>
        <textarea name="note" class="form-control" rows="5" id="comment">{{$value->note}}</textarea>
      </div>

              <input type="hidden" value="{{$value->id}}" name="id"  class="form-control" >

              <input type="hidden" value="{{$value->book_id}}" name="book_id"  class="form-control" >


      <button type="submit" class="btn btn-primary">تعديل المنهج</button>
      </form>
  <br>


@endsection
