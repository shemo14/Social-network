<!-- Newsfeed Common Side Bar Left
           ================================================= -->
<div class="col-md-3 static">
    <div class="profile-card">
        <img src="{{ Request::root() }}/website/images/users/user-1.jpg" alt="user" class="profile-photo" />
        <h5><a href="timeline.html" class="text-white">Sarah Cruiz</a></h5>
        <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
    </div><!--profile card ends-->
    <ul class="nav-news-feed">
        <li><i class="icon ion-ios-paper"></i><div><a href="#">My Newsfeed</a></div></li>
        <li><i class="icon ion-ios-people"></i><div><a href="{{ url('group') }}">Groups</a></div></li>
        <li><i class="icon ion-ios-people-outline"></i><div><a href="#">Friends</a></div></li>
        <li><i class="icon ion-chatboxes"></i><div><a href="#">Messages</a></div></li>
        <li><i class="icon ion-images"></i><div><a href="#">Images</a></div></li>
        <li><i class="icon ion-ios-videocam"></i><div><a href="#">Videos</a></div></li>
    </ul><!--news-feed links ends-->
    <div id="chat-block">
        <div class="title">Chat online</div>
        <ul class="online-users list-inline">
            <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="{{ Request::root() }}/website/images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="{{ Request::root() }}/website/images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="John Doe"><img src="{{ Request::root() }}/website/images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="{{ Request::root() }}/website/images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="James Carter"><img src="{{ Request::root() }}/website/images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="{{ Request::root() }}/website/images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="{{ Request::root() }}/website/images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Anna Young"><img src="{{ Request::root() }}/website/images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="{{ Request::root() }}/website/images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        </ul>
    </div><!--chat block ends-->
</div>