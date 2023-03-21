@if (Auth()->check())
<script>window.location = "{{ route('dashboard') }}";</script>
@else
{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
            <a class="btn btn-primary" href="register">register</a>
        </div>
        <button class="btn btn-primary"><a href="{{ route('auth.google') }}">google</button>
    </form>
</x-guest-layout> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Get Link</title>
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <style>
        body, html {
            height: 100%;
            background: #f2f2f2;
            overflow-y: hidden;
          }
          
          #header {
            z-index: 1;
            position: relative;
          }
          
          code {
            color: #000000 !important;
          }
          
          *:focus {
            box-shadow: none !important;
            outline: 0 !important;
          }
          
          input {
            border: 2px solid blue !important;
          }
          
          ::-webkit-input-placeholder {
            /* Edge */
            font-size: 14px !important;
            color: blue !important;
          }
          
          :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            font-size: 14px !important;
            color: blue !important;
          }
          
          ::placeholder {
            font-size: 14px !important;
            color: blue !important;
          }
          
          button {
            width: 100%;
            background: blue !important;
            border: none !important;
            padding: 20px !important;
          }
          
          #loginForm {
            width: 100%;
            max-width: 900px;
            margin: auto;
            box-shadow: 0px 0px 20px 20px #66666605;
            border-radius: 45px;
            background-size: cover;
            background-image: url('https://img.freepik.com/free-photo/fuji-mountain-kawaguchiko-lake-morning-autumn-seasons-fuji-mountain-yamanachi-japan_335224-102.jpg?size=626&ext=jpg&ga=GA1.2.447178260.1676261222&semt=ais');
            border: 1px solid blue;
          }
          #loginForm div.col-md-6 {
            border-radius: 45px;
          }
          #loginForm #right {
            background: #f5f5f5;
            padding: 67px;
            border-left: 10px solid blue;
          }
          
          /*# sourceMappingURL=main.css.map */
    </style>
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<div class="d-flex align-items-center flex-column justify-content-center h-100 text-dark" id="header">
    <div class="row" id="loginForm">
        <div class="col-md-6 col-sm-12 text" id="right">
            <h2>Login To GetLink</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-group mt-3">
                    <code for="exampleInputEmail1" style="background: blue; padding:5px;color:white !important;">Email
                        address</code>
                    <input aria-describedby="emailHelp" required class="form-control" id="exampleInputEmail1"
                           placeholder="Enter email"
                           type="email"
                           name="email">
                    <small class="form-text text-muted" id="emailHelp">Please enter your e-mail address above.</small>
                </div>


                <div class="form-group mt-3">
                    <code for="exampleInputPassword1" style="background: blue; padding:5px;color:white !important;">Password</code>
                    <input class="form-control" required id="exampleInputPassword1" placeholder="Password" type="password" name="password">
                    <small class="form-text text-muted" id="passwordHelp">Please enter your password address
                        above.</small>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-check">
                            <input class="form-check-input" id="exampleCheck1" type="checkbox">
                            <small class="form-check-label" for="exampleCheck1">Remember me</small>
                        </div>
                    </div>
                    <div class="col-md-6 text-right"><small class="form-check-label" for="exampleCheck1"><a href="{{ route('password.request') }}">Forgot Password ?</a></small>
                    </div>
                </div>
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('auth.google') }}"><i class="bi bi-google"></i> Login With Google</a>
                <button class="btn btn-primary" type="submit">Sign In</button>
                <p class="text-center">Don't have a Account ? <a href="register">register</a></p>
            </form>
        </div>
    </div>
</div>
<script crossorigin="anonymous"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script crossorigin="anonymous"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
@endif