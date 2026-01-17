@extends('layouts.base')

@section('app')
    @php
        $hasPlugin = false;
        $home = url()->route('home') === url()->current();
        $profil = isset(explode('/', url()->current())[3]) ?  explode('/', url()->current())[3] === 'profile' : '';
        $user = isset(explode('/', url()->current())[3]) ?  explode('/', url()->current())[3] === 'user' : '';
        $users = isset(explode('/', url()->current())[3]) ?  explode('/', url()->current())[3] === 'users' : '';
        $arrayPages = \Azuriom\Models\Page::all();
        $page = isset(explode('/', url()->current())[3]) && in_array(explode('/', url()->current())[3], $arrayPages->pluck('slug')->toArray());
        $post = url()->route('posts.show', explode('/', url()->current())[4] ?? '') === url()->current();
        $posts = url()->route('posts.show', route('posts.index')) === url()->current();
        $errorsArray= ['401', '403','404','419','429','500','503'];
        $plugins = [
                    'advancedban',
                    'changelog',
                    'coin-flip',
                    'cps',
                    'faq',
                    'flyff',
                    'forum',
                    'gallery',
                    'invoicepro',
                    'jirai',
                    'launcher',
                    'litebans',
                    'paysafecardmanual',
                    'shop',
                    'skin-api',
                    'spin-wheel',
                    'staff',
                    'support',
                    'tebex',
                    'vote',
                    'wiki',
                    ];
        if ($home || $page || $post || $posts || $profil || $user || $users || (isset($exception) && in_array($exception->getStatusCode(), $errorsArray)) || (isset(explode('/', url()->current())[3]) && in_array(explode('/', url()->current())[3], $plugins))){
            $hasPlugin= true;
        }

        $version_theme = json_decode(file_get_contents(theme_path().'/theme.json'), true)
    @endphp
    <main>
        <div class="container--rainbow js-particles-trigger position-relative">
            @if($hasPlugin)
                @yield('content')
            @else
                @php($page_current = isset(explode('/', url()->current())[3]) ?explode('/', url()->current())[3]:'')
                @include('components.backgrounds-builder',['page_current'=> $page_current])
                <div class="container content main-page" id="{{$page_current}}">
                    @include('elements.session-alerts')
                    @yield('content')
                </div>
            @endif
            @includeIf('widget.particles.particles-js')
        </div>
    </main>
    <footer class="footer">
        @if(theme_config('footer.logo.hidden') !== 'on' || theme_config('footer.liens.hidden') !== 'on' || theme_config('footer.download.hidden') !== 'on' || isset(theme_config('footer.social.links')[0]))
            <div class="footer--top">
                <div class="container-fluid">
                    <div
                        class="row {{!theme_config('footer.global.reverse') ? '' :'flex-column-reverse  flex-lg-row-reverse'}}  justify-content-{{theme_config('footer.global.alignment') ?? 'around'}}">
                        @if(!theme_config('footer.logo.hidden'))
                            <div class="col-lg-3 mt-3 d-flex align-items-start justify-content-center">
                                <img class="footer--logo" src="{{ theme_config('footer.logo.media') ? image_url(theme_config('footer.logo.media')) : site_logo() }}"
                                     {{theme_config('footer.logo.opacity') ? 'style=opacity:'.theme_config('footer.logo.opacity'): ''}}>
                            </div>
                        @endif

                        @if(theme_config('footer.title') || theme_config('footer.description'))
                            <div class="col-lg-4 col-md-5  mt-5 mt-lg-3">
                                <div
                                    class="footer--propos text-{{theme_config('footer.description_c.alignment') ?? 'start'}}">
                                    <h3>{{theme_config('footer.title')}}</h3>
                                    <p>{!! nl2br(e(theme_config('footer.description'))) !!}</p>
                                </div>
                            </div>
                        @endif
                        @if(!theme_config('footer.liens.hidden'))
                            <div class="col-lg-3 col-md-5 mt-5 mt-lg-3">
                                <div class="footer--liens text-{{theme_config('footer.liens.alignment') ?? 'start'}}">
                                    <h3>{{ theme_config('footer.liens.title') }}</h3>
                                    <ul class="navbar-nav">
                                        @if(!theme_config('footer.liens.serveurliste.active'))
                                            <li class="nav-item mx-auto w-100">
                                                <a class="nav-link" href="@if(!theme_config('footer.liens.serveurliste.link')) https://www.serveurliste.com @else {{theme_config('footer.liens.serveurliste.link')}} @endif"
                                                   target="_blank">Votez pour {{site_name()}} sur <span
                                                        class="fw-bold">serveurliste.com</span></a>
                                            </li>
                                        @endif
                                        @foreach(theme_config('footer.liens.links') ?? [] as $link )
                                            <li class="nav-item mx-auto w-100">
                                                <a class="{{!theme_config('footer.liens.button')? 'nav-link': 'btn btn-primary btn-sm mb-2 text-' . (theme_config('footer.liens.textAlignement') ?? 'start') . ' w-' . (theme_config('footer.liens.buttonWidth') ?? '0') }}"
                                                   href="{{isset($link['url']) ? $link['url'] : '#' }}"
                                                   title="{{isset($link['name']) ? $link['name'] : ''}}" {{isset($link['target']) && $link['target'] == 'true' ? 'target="_blank"':''}}>
                                                    {{ isset($link['name']) ? $link['name'] : '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                    @if(!empty(theme_config('footer.download.link.url')) && !theme_config('footer.download.hidden'))
                        <div class="row justify-content-{{theme_config('footer.download.alignment') ?? 'end'}}">
                            <div class="col-lg-3 col-md-5 text-center">
                                <div
                                    class="btn-wrapper-footer py-0 mt-0 d-flex align-items-center justify-content-center">
                                    <a class="btn btn-primary btn-download"
                                       href="{{theme_config('footer.download.link.url')}}"
                                       title="{{theme_config('footer.download.link.name')}}">
                                        {{theme_config('footer.download.link.name')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(social_links() && !theme_config('footer.socialLinks.hidden'))
                        <div class="row justify-content-{{theme_config('footer.socialLinks.alignment') ?? 'center'}}">
                            <div class="col-lg-3 col-md-5 text-center">
                                <div
                                    class="d-flex flex-wrap justify-content-center align-items-center footer--links mt-5 mt-lg-3">
                                    @foreach(social_links() as $link)
                                        <div class="footer--links-item">
                                            <a href="{{ $link->value }}" title="{{ $link->title }}" target="_blank"
                                               rel="noopener noreferrer">
                                                <i class="{{ $link->icon }}"
                                                   style="color: {{ $link->color }}"></i>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        @endif
        <div class="container-fluid footer--bottom py-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                {!! setting('copyright') !!} <br>
                                <span class="small">
                                @lang('messages.copyright') | <a
                                        href="https://market.azuriom.com/resources/71" target="_blank"
                                        title="Version V{{$version_theme['version']}}">Thème</a> réalisé par
                                <a href="https://discord.gg/wmYrG2c" target="_blank"
                                   rel="noopener noreferrer">Linedev</a>
                                </span>
                            </div>
                            @if(theme_config('footer.conditions.links'))
                                <div class="col-md-7 pt-md-0 align-items-center pt-3 text-md-right text-center">
                                    @foreach(theme_config('footer.conditions.links') ?? [] as $link )
                                        <a href="/{{$link['url']}}" target="_blank"
                                           title="{{$link['name']}}">
                                            {{$link['name']}}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @if(!theme_config('header.preloader.hidden'))
        <div id="preloader">
            <img src="{{ site_logo() }}" alt="{{ route('home') }}">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    @endif
    @if(preg_match('~MSIE|Internet Explorer~i', request()->userAgent()) || (strpos(request()->userAgent(), 'Trident/7.0; rv:11.0') !== false))
        <div id="outdated">
            <span><span><i class="bi bi-cone-striped"></i></span></span>
            <h6>Error: Your browser is out-of-date!</h6>
            <p>Update your browser to view this website correctly.</p>
            <a id="btnUpdateBrowser" href="https://www.mozilla.org/fr/firefox/new/"> Outdated Browser </a>
        </div>
    @endif
@endsection
