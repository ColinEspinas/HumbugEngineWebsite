@extends('layouts.app')

@section('content')
<div class="lil-row">
    <div class="lil-col lil-col center xs-11-12 sm-10-12 md-8-12 lg-5-12 xl-4-12">
        <form class="login-form content-box" method="POST" action="{{ route('login') }}">

            <h2 class="section-title">Login:</h2>
            @csrf
            <div class="inputs">
                <input id="email" type="email" class="block width-100 email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="password" type="password"
                    class="block width-100 password @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <button type="submit" class="btn right"><span class="content">Login<i
                            data-feather="log-in"></i></span></button>
            </div>
        </form>
    </div>
</div>

@endsection
