<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('btc.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(#282568, #4F49CE);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            color: black;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
        }

        .form-control {
            border-radius: 50px;
            padding: 10px;
        }

        .btn-signup {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            width: 100%;
            transition: 0.3s;
        }

        .btn-signup:hover {
            background-color: #45a049;
        }

        .login-link {
            color: #18FBFB;
            text-decoration: none;
        }

        .login-link:hover {
            color: #16d8d8;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2 class="text-center">Sign Up</h2>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('signup.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label">I agree to the terms</label>
            </div>

            <button type="submit" class="btn btn-signup">Sign Up</button>

            <div class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}" class="login-link">Log In</a>
            </div>
        </form>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            let password = document.querySelector('input[name="password"]').value;
            let confirmPassword = document.querySelector('input[name="password_confirmation"]').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                e.preventDefault();
            } else if (password.length < 6) {
                alert('Password harus memiliki minimal 6 karakter!');
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
