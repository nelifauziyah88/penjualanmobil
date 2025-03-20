<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/btc.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Log In</h2>

            @if ($errors->any())
                <p class="error">{{ $errors->first() }}</p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required value="{{ old('username', Cookie::get('username')) }}">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label>
                    <input type="checkbox" name="remember" {{ Cookie::get('username') ? 'checked' : '' }}> Remember me
                </label>

                <button type="submit">Log In</button>
            </form>

            <div class="link">
                <p><a href="#">Forgot Password?</a></p>
                <p>Don’t have an account? <a href="{{ route('signup.form') }}">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
