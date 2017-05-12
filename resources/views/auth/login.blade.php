<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 17:56:25 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>MUS | Mansoura University Social</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/style.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/font-awesome.min.css" />

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ Request::root() }}/website/images/fav.png"/>
</head>
<body>

<!-- Landing Page Contents
================================================= -->
<canvas style="height: 300px;width: 200px;background-color: #00aae6">zdfddsf</canvas>
<div id="lp-register">
    <div style="padding-top: 40px;" class="container wrapper">
        <div class="row">
            <div class="col-sm-5">
                    <div class="intro-texts">
                        <h1 class="text-white">Make Cool Friends !!!</h1>
                        <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
                        <button class="btn btn-primary">Learn More</button>
                    </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <div class="reg-form-container">

                    <!-- Register/Login Tabs-->

                        <div class="reg-options">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#register" data-toggle="tab">Login</a></li>
                            </ul><!--Tabs End-->
                        </div>

                    <!--Registration Form Contents-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="register">
                            <div class="tab-pane" id="login">
                                <h3>Login</h3>
                                <p class="text-muted">Log into your account</p>

                                <!--Login Form-->
                                <form name="Login_form" id='Login_form' method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="my-email" class="sr-only">Email</label>
                                            <input id="my-email" class="form-control input-group-lg" value="{{ old('email') }}" required autofocus type="email" name="email" title="Enter Email" placeholder="Your Email"/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="my-password" class="sr-only">Password</label>
                                            <input id="my-password" class="form-control input-group-lg" type="password" required name="password" title="Enter password" placeholder="Password"/>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-primary">
                                                    Login
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form><!--Login Form Ends-->
                                <p><a href="#">Forgot Password?</a></p>
                                {{--<button class="btn btn-primary">Login Now</button>--}}
                            </div>

                        </div><!--Registration Form Contents Ends-->

                        <!--Login-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>

<!-- Scripts
================================================= -->
<script src="{{ Request::root() }}/website/js/jquery-3.1.1.min.js"></script>
<script src="{{ Request::root() }}/website/js/bootstrap.min.js"></script>
<script src="{{ Request::root() }}/website/js/jquery.appear.min.js"></script>
<script src="{{ Request::root() }}/website/js/jquery.incremental-counter.js"></script>
<script src="{{ Request::root() }}/website/js/script.js"></script>

</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 17:56:25 GMT -->
</html>
