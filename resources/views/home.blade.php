@extends('layouts.index')
@section('content')



    @foreach($posts as $post)
    <div class="post-content">
        {{--<img src="images/post-images/2.jpg" alt="post-image" class="img-responsive post-image" />--}}
        <div class="post-container">
            <img src="{{ Request::root() }}/website/images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
            <div class="post-detail">
                <div class="user-info">
                    <h5><a href="timeline.html" class="profile-link">{{ $post->user_name }}</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 3 mins ago</p>
                </div>
                <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                </div>
                <div class="line-divider"></div>
                <div class="post-text">
                    <p>{{ $post->post }}</p>
                </div>
                <div class="line-divider"></div>
                <div class="post-comment">
                    <img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
                </div>
            </div>
        </div>
    </div>
    @endforeach

@stop