@extends('layouts.app')

@section('content')

<div class="container pt-7">
    <form method="POST" action="{{ route('login') }}" class="form-signin">
        @csrf
        <h1 class="h3 mb-3 text-center font-weight-normal">{{ __('Login') }}</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" type="email" placeholder="Email Address"
            class="mb-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="password" placeholder="password" type="password"
            class=" mb-1 form-control @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="checkbox mb-3">
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button class="btn btn-lg btn-primary mb-1" type="submit"> {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
    </form>
</div>

@endsection