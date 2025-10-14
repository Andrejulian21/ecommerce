@extends('layouts.app')

@section('css')
<style>
    /* Small adjustments to reuse global form styles */
    .auth-page { display:flex; align-items:center; justify-content:center; min-height:70vh; padding:2rem 1rem; }
    .auth-card { max-width:520px; width:100%; }
    .auth-card .form-header { margin-bottom:1.25rem; text-align:center; }
    .auth-card .form-header h2 { margin:0; font-size:1.6rem; color:#0f1724; }
    .auth-card .form-header p { margin:0; color:#6b7280; }
    .form-input.is-invalid { border-color:#dc3545 !important; box-shadow:none; }
    .invalid-feedback { display:block; }
</style>
@endsection

@section('content')
<div class="auth-page">
    <div class="form-container auth-card">
        <div class="form-header">
            <h2>{{ __('Login') }}</h2>
            <p>{{ __('Inicia sesión para acceder a tu cuenta') }}</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                    class="form-input form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-input form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group mb-3 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                </div>

                @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>

            <div class="form-buttons d-flex gap-2">
                <button type="submit" class="btn-primary btn w-100">{{ __('Login') }}</button>
                <a href="{{ url('/') }}" class="btn-secondary btn w-100">{{ __('Cancelar') }}</a>
            </div>

            @if (Route::has('register'))
            <div class="text-center mt-3 small">
                {{ __("¿No tienes cuenta?") }} <a href="{{ route('register') }}">{{ __('Regístrate') }}</a>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection
