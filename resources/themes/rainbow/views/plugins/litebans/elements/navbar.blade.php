@include('widget.banner.banner',['banner' => 'liteBans', 'value' => 'litebans'])

<nav class="navbar navbar-expand-lg border rounded mb-4 px-3" role="navigation">
    <button class="navbar-toggler btn btn-primary px-2 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list fs-2"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->routeIs('litebans.index') ? 'active' : ''}}"><a class="nav-link"
                                                                                              href="{{ route('litebans.index') }}">{{ trans('litebans::messages.navigation.bans') }}
                    ({{ $bansCount }})</a></li>
            <li class="nav-item {{ request()->routeIs('litebans.mute') ? 'active' : ''}}"><a class="nav-link"
                                                                                             href="{{ route('litebans.mute') }}">{{ trans('litebans::messages.navigation.mutes') }}
                    ({{ $mutesCount }})</a></li>
            <li class="nav-item {{ request()->routeIs('litebans.kick') ? 'active' : ''}}"><a class="nav-link"
                                                                                             href="{{ route('litebans.kick') }}">{{ trans('litebans::messages.navigation.kicks') }}
                    ({{ $kicksCount }})</a></li>
            <li class="nav-item {{ request()->routeIs('litebans.warn') ? 'active' : ''}}"><a class="nav-link"
                                                                                             href="{{ route('litebans.warn') }}">{{ trans('litebans::messages.navigation.warns') }}
                    ({{ $warnsCount }})</a></li>
        </ul>
    </div>
</nav>

@if(session()->has('error-search'))
    <div class="alert alert-danger alert-search alert-dismissible fade show mt-3" role="alert">
        <i class="bi bi-exclamation-circle-fill"></i>
        {{ session()->get('error-search') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
