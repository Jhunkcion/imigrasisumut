<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - IMIGRASI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('user/images/logo1.png')}}" rel="icon">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="{{ asset('LoginAssets/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            height: 100vh;
            display: flex;
        }

        .login-container {
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .login-left {
            flex: 1;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
        }

        .login-form h2 {
            text-align: center;
            color: #2C3E58;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            display: block;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-remember {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .form-remember label {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 25px;
            background-color: #38c172;
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #2eaf63;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: #0d6efd;
            text-decoration: none;
        }

        .login-right {
            flex: 1;
            background: #2C3E58;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px;
        }

        .login-right h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .login-right p {
            font-size: 14px;
            color: #e0e0e0;
            text-align: center;
            max-width: 400px;
        }

        .login-right img {
            margin-top: 30px;
            width: 100%;
            max-width: 300px;
        }

        @media screen and (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-right {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left: Form -->
        <div class="login-left">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Direktorat Jendral Imigrasi</h2>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                    @error('password')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-remember">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>

                <button class="btn-login" type="submit">Sign In</button>

                <div class="signup-link">
                    Not a Member yet? <a href="{{ route('register') }}">Sign up</a>
                </div>
            </form>
        </div>

        <!-- Right: Branding -->
        <div class="login-right">
            <h3>Fast, Efficient and Productive</h3>
            <p>
                In this kind of post, the blogger introduces someone and provides context. This is a transcript of the
                interview.
            </p>
            <img src="{{ asset('user/images/logo2a.png') }}"  alt="Visual">
        </div>
    </div>
</body>

</html>