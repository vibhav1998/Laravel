@extends('layouts.app')

@section('content')

<div class="container pt-7">
    <form method="POST" action="{{ route('register') }} class=" form-signin">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">{{ __('Register') }}</h1>

        <label for="name" class="sr-only">{{ __('Name') }}</label>
        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror mb-2"
            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" placeholder="Email Address"
            class="mb-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="inputPassword" class="sr-only">{{ __('Password') }}</label></label>
        <input id="password" placeholder="password" type="password"
            class=" mb-2 form-control @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <div class="checkbox mb-3">
            <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" placeholder="confirm password" type="password" class="mb-2 form-control"
                name="password_confirmation" required autocomplete="new-password">

            <button class="btn btn-lg btn-primary btn-block mb-1 mt-4" type="submit"> {{ __('Register') }}
            </button>

    </form>
</div>

@endsection