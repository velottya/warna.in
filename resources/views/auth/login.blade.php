@extends('auth.layout')
@section('title', 'Log In')
@section('content')

<div class="wrapper">
    <!-- Bagian gambar -->
        <div class="image-box">
        <img src="/images/_x32_.png" alt="Login Icon">
        </div>
    <!-- Bagian form -->
    <div class="form-box">
        <div class="login-box">
        <h2>Login</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <input required type="text"
                       name="username"
                       value="{{ old('username') }}"
                       placeholder="Username"
                       class="@error('username') is-invalid @enderror">
            </div>
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <input type="password"
                       name="password"
                       placeholder="Password"
                       required
                       class="@error('password') is-invalid @enderror">
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <input type="submit" value="Login" class="btn">
            </div>

            <div class="text-center mt-3">
                <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
</div>

@endsection
