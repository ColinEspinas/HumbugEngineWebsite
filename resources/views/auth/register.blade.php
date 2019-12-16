@extends('layouts.app')

@section('content')
<div class="lil-row">
    <div class="lil-col lil-col center xs-11-12 sm-10-12 md-8-12 lg-5-12 xl-4-12">
        <form class="register-form content-box" method="POST" action="{{ route('register') }}">
            @csrf

            <h2 class="section-title">Register:</h2>

            <div class="inputs">
                <input id="name" type="text" class="block width-100 name @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="email" type="email" class="block width-100 email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="password" type="password"
                    class="block width-100 password @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="password-confirm" type="password" class="block width-100 password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">

                <button type="submit" class="btn right"><span class="content">Login<i
                            data-feather="user-plus"></i></span></button>
            </div>
        </form>
    </div>
</div>
@endsection
