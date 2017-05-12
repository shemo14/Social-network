@include('layouts.header')
    <div id="page-contents">
        <div class="container">
            <div class="row">
                @include('layouts.left_side')
                    <div class="col-md-7">
                        @include('layouts.alert')
                        @yield('content')
                    </div>
                @include('layouts.right_side')
            </div>
        </div>
    </div>
@include('layouts.footer')