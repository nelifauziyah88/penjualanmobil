<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/btc.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet"> <!-- Menyertakan file CSS -->
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Log In</h2>

            <!-- Cek apakah ada error -->
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif

            <!-- Form Login -->
            <form method="POST" action="">
                @csrf

                <label for="username">Username</label>
                <input type="text" name="username" id="username" required value="{{ request()->cookie('username') ?? '' }}">
                <!-- Jika username disimpan dalam cookie, tampilkan sebagai default value -->

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label for="type_user">User Type</label>
                <select name="type_user" id="type_user" required>
                    <option value="penjual" {{ request()->cookie('type_user') == 'penjual' ? 'selected' : '' }}>Penjual</option>
                    <option value="pembeli" {{ request()->cookie('type_user') == 'pembeli' ? 'selected' : '' }}>Pembeli</option>
                </select>

                <label>
                    <input type="checkbox" name="remember" {{ request()->cookie('username') ? 'checked' : '' }}> Remember me
                </label>

                <button type="submit">Log In</button>
            </form>

            <div class="link">
                <p><a href="#">Forgot Password?</a></p> <!-- Link untuk lupa password -->
                <p>Don’t have an account? <a href="{{ route('signup') }}">Sign Up</a></p> <!-- Link ke halaman daftar -->
            </div>
        </div>
    </div>
</body>
</html>
