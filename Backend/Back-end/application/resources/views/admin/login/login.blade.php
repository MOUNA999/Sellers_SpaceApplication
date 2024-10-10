<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrateur | Login</title>
    <link href="{{ asset('Administrateur/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Administrateur/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Administrateur/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('Administrateur/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Administrateur/build/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('loginn') }}">
                        @csrf
                        <h1>Login Form</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" name="login" id="login" required="required"/>
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default submit">Log in</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            @include('admin.login.register')
        </div>
    </div>
</body>
</html>
