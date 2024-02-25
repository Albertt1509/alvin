@extends('layouts.app')
@section('content')

    <head>
        <link href="{{ asset('style/style.css') }}" rel="stylesheet">
        <link href="{{ asset('style/login.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="box">
            <div class="container">
                <h1 class="text-black text-center">Login Admin</h1>
                <form action="{{ route('admin.dashboard') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-field mt-4">
                        <input type="text" class="input" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field mt-3 d-flex">
                        <input type="password" class="input" name="password" id="password" placeholder="Password"
                            required>
                        <span id="togglePassword" class="material-symbols-outlined lock">lock</span>
                    </div>
                    <div class="input-field mt-3">
                        <input type="submit" class="submit text-dark" value="Login">
                    </div>
                    @error('login_failed')
                        <div>{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            var togglePassword = document.getElementById('togglePassword');
            var passwordInput = document.getElementById('password');
            togglePassword.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    togglePassword.textContent = 'lock_open';
                } else {
                    passwordInput.type = 'password';
                    togglePassword.textContent = 'lock';
                }
            });
        </script>
    </body>
@endsection
