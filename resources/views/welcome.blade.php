<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <style>
            #myVideo {
                position: fixed;
                min-width: 100%; 
                min-height: 100%;
            }
            .wrapper {
                position: relative;
            }
            .content {
                position: fixed;
                bottom: 100px;
                color: #f1f1f1;
                padding: 20px;  
                width: 100%;              
            }
            .button-section {
                display: flex;
                flex-direction: column;
                width: 300px;
                align-items: center;
                margin: auto;
                background: black;
                opacity: 0.6;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 1px 1px 1px 1px #171616;
            }
            .hp-button {
                background: transparent;
                height: 50px;
                width: 200px;
                border-radius: 30px;
                margin-bottom: 10px;
                color: white;
                font-size: 16px;
                font-weight: 700;
                border: 2px solid;
            }
            .hp-button:hover {
                background-color: #fff;
                color: black;
            }

            .modal-content {
                background: black;
                opacity: 0.6;
            }
            .modal-dialog {
                margin-top: 250px;
            }
            .form-button {
                color: #000;
                background: #b5adad;
                border: black;
            }
            .form-button:hover {
                color: #000;
                background: #b5adad;
            }
            .btn-link {
                font-weight: 500;
                color: #fff;
            }
            .btn-link:hover {
                color: #fff;
            }
        </style>
        
    </head>
    <body>
        <div class="wrapper">
            <video autoplay muted loop id="myVideo">
                <source src="/video/home_back_ground.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
            </video>

            <div class="content">
                <div class="button-section">
                    <span class="login-button">
                        <button class="btn hp-button" id="login_button" data-toggle="modal" data-target="#exampleModal">Login</button>
                    </span>
                    <span class="register-button">
                        <button class="btn hp-button">Register</button>
                    </span>
                </div>
                <!-- login modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-weight:700;">Go, Showcase yourself...</h5>
                                <button type="button" id="close_login" class="close form-button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary form-button">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- login modal ends -->
                <!-- signup modal starts -->

                <!-- signup modal ends -->

            </div>
            
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script>
            $('#login_button').on('click', function() {
                console.log('clicked');
                $('.button-section').css('display', 'none');
            })

            $('#close_login').on('click', function() {
                $('.button-section').css('display', 'flex');
            })
        </script>
    </body>
</html>
