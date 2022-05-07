@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <x-inputs.label for="name">{{ __('Name') }}</x-inputs.label>
                            <x-inputs.input name="name" value="{{ old('name') }}" autofocus="{{ true }}" />
                        </div>
                        <div class="mb-3">
                            <x-inputs.label for="email">{{ __('Email Address') }}</x-inputs.label>
                            <x-inputs.input name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="mb-3">
                            <x-inputs.label for="password">{{ __('Password') }}</x-inputs.label>
                            <x-inputs.input type="password" name="password" />
                        </div>
                        <div class="mb-3">
                            <x-inputs.label for="password_confirmation">{{ __('Confirm Password') }}</x-inputs.label>
                            <x-inputs.input type="password" name="password_confirmation" />
                        </div>
                        <div class="mb-3">
                            <x-button class="float-end">{{ __('Register') }}</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection