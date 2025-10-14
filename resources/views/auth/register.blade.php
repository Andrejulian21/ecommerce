@extends('layouts.app')

@section('css')
<style>
    /* Reuse global form styles with small tweaks for register */
    .auth-page { display:flex; align-items:center; justify-content:center; min-height:70vh; padding:2rem 1rem; }
    .auth-card { max-width:640px; width:100%; }
    .auth-card .form-header { margin-bottom:1.25rem; text-align:center; }
    .auth-card .form-header h2 { margin:0; font-size:1.6rem; color:#0f1724; }
    .auth-card .form-header p { margin:0; color:#6b7280; }
    .form-input.is-invalid { border-color:#dc3545 !important; box-shadow:none; }
    .invalid-feedback { display:block; }
    .form-buttons { display:flex; gap:12px; margin-top:1rem; }
</style>
@endsection

@section('content')
<div class="auth-page">
    <div class="form-container auth-card">
        <div class="form-header">
            <h2>{{ __('Register') }}</h2>
            <p>{{ __('Crea una cuenta para comenzar a vender o comprar') }}</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text"
                    class="form-input form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                    class="form-input form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-input form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                @error('password') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-input form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn-primary btn w-100">{{ __('Register') }}</button>
                <a href="{{ url('/') }}" class="btn-secondary btn w-100">{{ __('Cancelar') }}</a>
            </div>

            @if (Route::has('login'))
            <div class="text-center mt-3 small">
                {{ __("¿Ya tienes cuenta?") }} <a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection
