@extends('auth.layout')
@section('title', 'Register')
@section('content')

<div class="main2">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Register</h2>
                    <form action="{{ route('register.process') }}"method="POST" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <input required type="text" class="@error('username') is-invalid @enderror" placeholder="Username"
                            name="username" value="{{ old('username') }}" required>
                        </div>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input required type="text" name="fullname" placeholder="Fullname" required>
                            </div>
                            @error('fullname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Confirm Password" required>
                        </div>
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group form-button">
                            <input type="submit" class="btn" value="Sign up">
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/_x32_.png" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

@endsection
