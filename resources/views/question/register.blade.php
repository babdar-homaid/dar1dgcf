@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تسجيل جديد') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('المدرسة') }}</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" name="school" value="{{ old('school') }}" required autocomplete="school" autofocus>

                                @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="Stage" class="col-md-4 col-form-label text-md-right">{{ __('المرحلة') }}</label>

                                  <div class="col-md-6">

                                          <select  id="Stage" class="form-control @error('Stage') is-invalid @enderror" name="Stage" value="{{ old('Stage') }}"required autocomplete="Stage" >
                                            <option value="1">إبتدائي</option>
                                            <option value="2">متوسط</option>
                                            <option value="3">ثانوي</option>
                                         </select>

                                      @error('Stage')
                                          <span class="invalid-feedback" role="Stage">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                        <div class="form-group row">
                          <label for="articles_name" class="col-md-4 col-form-label text-md-right">{{ __('المادة') }}</label>

                            <div class="col-md-6">

                                    <select  id="article_name" class="form-control @error('article_name') is-invalid @enderror" name="article_name" value="{{ old('article_name') }}"required autocomplete="article_name" >
                                      <option value="كيمياء">كيمياء</option>
                                      <option value="فيزياء">فيزياء</option>
                                      <option value="أحياء">أحياء</option>
                                      <option value="علوم">علوم</option>
                                   </select>

                                @error('article_name')
                                    <span class="invalid-feedback" role="article_name">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="articles_name" class="col-md-4 col-form-label text-md-right">{{ __('معلمة المادة') }}</label>

                              <div class="col-md-6">

                                      <select  id="user_m" class="form-control @error('user_m') is-invalid @enderror" name="user_m" value="{{ old('user_m') }}"required autocomplete="user_m" >
                                          @foreach ($value as $item)

                                      <option value="{{$item->id}}">{{$item->name}}</option>
                                          @endforeach
                                     </select>
                                  @error('user_m')
                                      <span class="invalid-feedback" role="user_m">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد كلمة المرور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 </div>
@endsection

