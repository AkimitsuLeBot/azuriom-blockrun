<!DOCTYPE html>
@include('elements.base')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', setting('description', ''))">
    <meta name="theme-color" content="{{theme_config('header.meta.color', '#3490DC')}}">
    <meta name="author" content="Azuriom">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ favicon() }}">
    <meta property="og:description" content="@yield('description', setting('description', ''))">
    <meta property="og:site_name" content="{{ site_name() }}">
    @stack('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ site_name() }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ favicon() }}">


    @auth
        @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
            @php
                $theme = themes()->currentTheme();
                $theme_lang = trans('theme::lang');
            @endphp
            <script>
                window.THEMES = '{{$theme}}';
                window.THEMES_LANG = @php echo json_encode($theme_lang)  @endphp
            </script>
            <script src="{{ theme_asset('js/sweetalert2.all.min.js') }}" defer></script>
        @endif
    @endauth

    <!-- Scripts -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('vendor/clipboard/clipboard.min.js') }}" defer></script>
    <script src="{{ theme_asset('js/glide.min.js') }}" defer data-cfasync="false"></script>
    <script src="{{ theme_asset('js/aos.js') }}" defer data-cfasync="false"></script>
    <script src="{{ theme_asset('js/app.js') }}" defer data-cfasync="false"></script>
    @if(!theme_config('home.particle.hidden'))
        <script src="{{ theme_asset('js/particles.js') }}" defer data-cfasync="false"></script>
        <script src="{{ theme_asset('js/js-particles.js') }}" defer data-cfasync="false"></script>
    @endif

    <!-- Page level scripts -->
    @stack('scripts')

    <!-- Fonts -->
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ theme_asset('css/glide.core.min.css') }}" rel="stylesheet">
    <link href="{{ theme_asset('css/aos.css') }}" rel="stylesheet">
    @php
        $version_theme = json_decode(file_get_contents(theme_path().'/theme.json'), true);
        $breakpoint_custom = theme_config('header.navbar.breakpoint') ?? "xl";
    @endphp

    @include('layouts.root')
    <link
        href="{{ theme_asset('css/style-'.(theme_config('header.style') ?? '1').'.css?ver='.$version_theme['version']) }}"
        rel="stylesheet">

    @include('layouts.styles')
    @auth()
        @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
            <link href="{{ theme_asset('css/admin.css') }}" rel="stylesheet">
            <link href="{{ theme_asset('css/sweetalert2.min.css') }}" rel="stylesheet">
        @endif
    @endauth
    @stack('styles')
</head>

<body>
<div id="app" class="breakpoint_{{$breakpoint_custom}}">
    <header class="header {{theme_config('header.navbar.fixed') ? 'header-sticky': ''}}" id="header">
        @include('elements.navbar')
    </header>

    @yield('app')
</div>

@auth()
    @if(auth()->user()->isAdmin() || Auth::user()->hasPermission("admin.themes"))
        @include('layouts.change-color')
        <script defer data-cfasync="false">
            window.addEventListener("DOMContentLoaded", (event) => {
                if (document.querySelectorAll('.btn-picto-color').length > 0) {
                    document.querySelector('.js-change-color').classList.remove('d-none')
                    document.querySelector('.btn-picto-color').addEventListener('click', function (event) {
                        this.classList.toggle('active')
                        document.querySelector('#change--color').classList.toggle('active')
                        document.querySelector('.box--alert').classList.remove('active')
                    })
                    document.querySelector('#change--color #close').addEventListener('click', function () {
                        document.querySelector('.btn-picto-color').classList.toggle('active')
                        document.querySelector('#change--color').classList.toggle('active')
                        document.querySelector('.box--alert').classList.remove('active')
                    })
                    document.querySelector('#setting-alert').addEventListener('click', function () {
                        document.querySelector('.box--alert').classList.toggle('active')
                    })
                }
            })
        </script>
        <script src="{{ theme_asset('js/chroma.min.js') }}" defer data-cfasync="false"></script>
        <script src="{{ theme_asset('js/clipboard.min.js') }}" defer data-cfasync="false"></script>
        <script src="{{ theme_asset('js/change-color.js') }}" defer data-cfasync="false"></script>

    @endif
@endauth

<script defer data-cfasync="false">
    window.addEventListener("DOMContentLoaded", (event) => {
        window.particleJs = {}
        let particleJs = window.particleJs;

        particleJs.style = '{{theme_config('home.particle.style') ?? 'default'}}';
        particleJs.config = '{{ json_encode(theme_config('home.particle.config')) }}';
        particleJs.pathImage = '{{image_url()}}/';

    })
</script>
<script>
    @if(theme_config('header.navbar.fixed'))
    window.addEventListener("DOMContentLoaded", (event) => {
        var prevScrollpos = window.pageYOffset;
        // if (window.innerWidth >= 1200) {
        window.addEventListener('scroll', function () {
            var currentScrollPos = window.pageYOffset;
            document.getElementById("header").style.transition = 'top {{theme_config('header.navbar.transition_dures') ?? 0.3}}s'
            if (prevScrollpos >= currentScrollPos) {
                document.getElementById("header").classList.remove('active');
            } else {
                document.getElementById("header").classList.add('active');
            }
            prevScrollpos = currentScrollPos;
        })
    })
    @endif
</script>
@stack('footer-scripts')

</body>
</html>
