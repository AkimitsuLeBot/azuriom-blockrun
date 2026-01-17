@auth()
    @if(auth()->user()->isAdmin())
        data-config-trigger="{{$key}}-banner-{{$value}}"
    @endif
@endauth
