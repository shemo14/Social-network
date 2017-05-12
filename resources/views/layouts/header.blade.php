<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 17:56:25 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="csrf-token" content="{{ csrf_token() }} ">
    <meta name="robots" content="index, follow" />
    <title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/style.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/font-awesome.min.css" />
    <link href="{{ Request::root() }}/website/css/emoji.css" rel="stylesheet">
    <script src="{{ Request::root() }}/jquery-1.11.1.min.js"></script>
    <script src="{{ Request::root() }}/jquery.multifield.js"></script>
    <script src="{{ Request::root() }}/website/js/jquery.sticky-kit.min.js"></script>
    <script src="{{ Request::root() }}/website/js/jquery.scrollbar.min.js"></script>
    <script src="{{ Request::root() }}/js/streamLab.js"></script>

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="i{{ Request::root() }}/website/mages/fav.png"/>
</head>
<body>

<!-- Header
================================================= -->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('home') }}"><img src="{{ Request::root() }}/website/images/logo.png" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown">
                        <a href="{{ url('home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-comments" style="font-size: 23px;"></i><span style="background-color: #27aae1;border-radius: 50%;padding: 3px 5px;position: relative;right: 10px;bottom: 10px;">1</span></a>
                        <ul style="top: 90%;width: 350px" class="dropdown-menu newsfeed-home">
                            <li>
                                <a href="{{ url('chat') }}">
                                    <div class="row" style="overflow: hidden">
                                        <div class="col-md-3 text-center" style="margin-right: -22px">
                                            <img src="{{ Request::root() }}/website/images/users/user-2.jpg" style="border-radius: 50%;height: 55px;background-color: #fff;border: 1px solid #27aae1;padding: 2px;" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 style="font-size: 20px;margin-bottom: 0;margin-top: 10px">Mohamed shams</h3>
                                            <span class="pull-right" style="position: absolute;left: 95%;top: 14px;">12 : 00 PM</span>
                                            <p style="display: inline;margin-right: 13px;">Lorem ipsum dolor sit amet, consectetur  .....</p>
                                            <i class="fa fa-eye" style="color: #27aae1"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                Read more ...
                            </li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <li class="dropdown"><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ url('/logout') }}">Log out </a></li>
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->