<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background: #f7f7f7;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 0.2rem rgba(37, 117, 252, 0.25);
        }

        .btn-login {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        .btn-login:hover {
            background-color: #1d64c2;
            border-color: #1d64c2;
        }

        .forgot-password {
            color: #ffffff;
            text-decoration: none;
        }

        .forgot-password:hover {
            color: #1d64c2;
        }

        .error-message {
            color: #ff5e57;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" id="email" name="email" class="form-control" required autofocus>
                <div class="error-message">
                    <!-- Display error for email if exists -->
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <div class="error-message">
                    <!-- Display error for password if exists -->
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-4">
                <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
                <label for="remember_me" class="form-check-label text-white">Remember me</label>
            </div>

            <!-- Forgot Password & Login Button -->
            <div class="d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot your password?</a>
                @endif
                <x-primary-button type="submit" class="ms-4 btn btn-login btn-lg text-indigo-600 border-indigo-600 bg-white hover:bg-indigo-600 hover:text-white">
    {{ __('Login') }}
</x-primary-button>




            </div>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
