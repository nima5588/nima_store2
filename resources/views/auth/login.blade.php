@extends('layout.home')

@section('content')
<div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1 class="font-vazir">ورود</h1></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="font-samim card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('آدرس ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('رمز') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="remember-check customCheckbox">
                                    <input class="remember" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="remember" for="remember">
                                        {{ __(' مرا بخاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="font-parastoo btn btn-primary">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="font-samim btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('? رمز عبور خود را فراموش کردید') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="login-divide"><span class="login-divide-text">یا</span></div>

                        <div class="login-signup-text mt-4 mb-2 fs-6 text-center text-muted">حساب کاربری ندارید؟<a href="{{ route('register') }}" class="btn-link">همین الان ثبت نام کنید</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
