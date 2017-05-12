<div class="row">
    <div class="col-md-12">
        @if(session('error'))
            <div class="alert alert-danger" style="height: 45px">
                <button class="close" data-close="alert"></button> {{ session('error') }}
                {{ Session::forget('error') }}
            </div>
        @elseif(session('success'))
            <div class="alert alert-success" style="height: 45px">
                <button class="close" data-close="alert"></button> {{ session('success') }}
                {{ Session::forget('success') }}
            </div>
        @endif
    </div>
</div>