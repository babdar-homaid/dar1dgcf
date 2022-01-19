@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('التحقق من البريد') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}

                        </div>
                    @endif

                    {{ __(' قبل متابعة التسجيل لابد من التحقق من صحة بريدك الإلكتروني لذلك قم بزيارة بريدك وفتح الرسالة المرسلة من قبلنا والضغط على زر التحقق لمواصلة التسجيل') }}
                    {{-- {{ __('إذا لم تستلم البريد الإلكتروني') }}
                    , <a href="{{ route('verification.resend') }}">{{ __('أضغط على الرابط هنا') }}</a>. --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
