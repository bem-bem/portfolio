@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <x-inputs.label for="email">{{ __('Email Address') }}</x-inputs.label>
                            <x-inputs.input name="email" value="{{ old('email') }}" autofocus="{{ true }}" />
                        </div>
                        <div class="mb-3">
                            <x-inputs.label for="password">{{ __('Password') }}</x-inputs.label>
                            <x-inputs.input type="password" name="password" />
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <x-button class="float-end">{{ __('Login') }}</x-button>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="mb-3">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection