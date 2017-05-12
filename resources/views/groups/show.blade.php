<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 18:32:18 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/style.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ Request::root() }}/website/css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ Request::root() }}/website/images/fav.png"/>
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
                        <a href="{{ url('home') }}" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-comments" style="font-size: 23px;"></i><span style="background-color: #27aae1;border-radius: 50%;padding: 3px 5px;position: relative;right: 10px;bottom: 10px;">1</span></a>
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

<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div class="timeline-cover">
            <img src="{{ Request::root() }}/{{ $group->path }}{{ $group->filename }}" alt="group cover" style="width: 100%;height: 356px;" class="img-responsive">

            <!--Timeline Menu for Large Screens-->
            <div class="timeline-nav-bar hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-info" style="position: static">
                            {{--<img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />--}}
                            <h3>{{ $group->g_name }}</h3>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul class="list-inline profile-menu">
                            <li><a href="timeline.html" class="active">Timeline</a></li>
                            <li><a href="timeline-about.html">About</a></li>
                            <li><a href="timeline-album.html">Album</a></li>
                            <li><a href="timeline-friends.html">Friends</a></li>
                        </ul>
                        <ul class="follow-me list-inline">
                            <li>1,299 people following her</li>
                            <li><button class="btn-primary">Join</button></li>
                        </ul>
                    </div>
                </div>
            </div><!--Timeline Menu for Large Screens End-->

            <!--Timeline Menu for Small Screens-->
            <div class="navbar-mobile hidden-lg hidden-md">
                <div class="profile-info">
                    <img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
                    <h4>Sarah Cruiz</h4>
                    <p class="text-muted">Creative Director</p>
                </div>
                <div class="mobile-menu">
                    <ul class="list-inline">
                        <li><a href="timline.html" class="active">Timeline</a></li>
                        <li><a href="timeline-about.html">About</a></li>
                        <li><a href="timeline-album.html">Album</a></li>
                        <li><a href="timeline-friends.html">Friends</a></li>
                    </ul>
                    <button class="btn-primary">Add Friend</button>
                </div>
            </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">

                    <!-- Post Create Box
                    ================================================= -->
                    <div class="create-post">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="" class="profile-photo-md" />
                                    <form id="create-post" method="POST" action="{{ url('posts') }}">
                                       {{ csrf_field() }}
                                        <input type="hidden" name="group_name" value="{{ $group->g_name }}">
                                        <textarea name="post" id="exampleTextarea" cols="30" rows="1" class="form-control" style="width: 506px;height: 122px;padding-top: 37px;" placeholder="Write what you wish"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="tools">
                                    <ul class="publishing-tools list-inline">
                                        <li><a href="#"><i class="ion-compose"></i></a></li>
                                        <li><a href="#"><i class="ion-images"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                                        <li><a href="#"><i class="ion-map"></i></a></li>
                                    </ul>
                                    <button type="submit" class="btn btn-primary pull-right create add-post">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- Post Create Box End-->
                    </form>

                    <!-- Post Content
                    ================================================= -->
                    <div id="posts">


                    </div>

                        <!--Post Date-->


                </div>
                <div class="col-md-2 static">
                    <div id="sticky-sidebar">
                        <h4 class="grey">Sarah's activity</h4>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                                <p class="text-muted">5 mins ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                                <p class="text-muted">an hour ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                                <p class="text-muted">4 hours ago</p>
                            </div>
                        </div>
                        <div class="feed-item">
                            <div class="live-activity">
                                <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                                <p class="text-muted">a day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer
================================================= -->


<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>

<!-- Scripts
================================================= -->
<script src="{{ Request::root() }}/website/js/jquery-3.1.1.min.js"></script>
<script src="{{ Request::root() }}/website/js/bootstrap.min.js"></script>
<script src="{{ Request::root() }}/website/js/jquery.sticky-kit.min.js"></script>
<script src="{{ Request::root() }}/website/js/jquery.scrollbar.min.js"></script>
<script src="{{ Request::root() }}/website/js/script.js"></script>


<script>
    var url = "{{ route('posts.index') }}";
    /* Get Page Data*/
    var page = 1;
    getPageData();


    function getPageData() {
        $.ajax({
            dataType: 'json',
            url: url,
            data: {page:page}
        }).done(function(data){
            manageRow(data);
        });
    }

    /* Add new Item table row */
    function manageRow(data) {
        var	item = '';
        $.each( data, function( key, value ) {

            // alert(value.last_page);
            item = item + '<div class="post-content">';
            item = item + '<div class="post-date hidden-xs hidden-sm">';
            item = item + '<h5></h5>';
            item = item + '<p class="text-grey">'+ value.date +'</p>';
            item = item + '</div>';
            item = item + '<div class="post-container">';
            item = item + '<img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />';
            item = item + '<div class="post-detail">';
            item = item + '<div class="user-info">';
            item = item + '<h5><a href="timeline.html" class="profile-link">'+ value.user_name +'</a> <span class="following">following</span></h5>';
            item = item + '<p class="text-muted">Published a photo about 15 mins ago</p>';
            item = item + '</div>';
            item = item + '<div class="reaction">';
            item = item + '<a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>';
            item = item + '<a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>';
            item = item + '</div>';
            item = item + '<div class="line-divider"></div>';
            item = item + '<div class="post-text">';
            item = item + '<p style="font-size: 25px">'+ value.post +'<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>';
            item = item + '</div>';
            item = item + '<div class="line-divider"></div>';
             item = item + '<div class="post-comment">';
             item = item + '<img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="" class="profile-photo-sm" />';
             item = item + '<input type="text" class="form-control" placeholder="Post a comment">';
             item = item + ' </div></div></div></div>';
        });


        $("#posts").html(item);
    }

    /* Create new Category */
    $(".add-post").click(function(e){
        e.preventDefault();
        var form_action = $("#create-post").attr("action");
        var data  = new FormData($("#create-post")[0]);

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: form_action,
            data:data,
            contentType: false,
            processData: false,
            beforesend:function () {

            },
            success:function (response) {
                getPageData();
                console.log(response);
                $("#create-post").trigger("reset");
            },
            error:function (error) {
                console.log(error);
            }
        });
    });
</script>
</body>

<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 18:34:11 GMT -->
</html>
