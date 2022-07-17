<x-guest-layout>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
</head>
<body background="img/gp.jpg">

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <x-jet-validation-errors class="mb-4" />
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field">
                        <input placeholder="Enter your email"id="email"type="email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" class="password" placeholder="Enter your password"  required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="remember_me" name="remember">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
<br>
                    <div>
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="{{ route('register') }}" class="text signup-link">Register now</a>
                    </span>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
</x-guest-layout>















































































