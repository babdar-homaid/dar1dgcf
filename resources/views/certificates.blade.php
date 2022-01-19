@extends('layouts.app')

@section('content')
<div class="container">

يمكنك طباعة الشهادة أو سحب نسخة على جهازك
  <br>
  <br>
  <br>
                <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="/certificate/{{$id}}.pdf"  width="100" height="375"></iframe>
                      </div>
                
<br>
<br>
<br>
<br>

            
@endsection
