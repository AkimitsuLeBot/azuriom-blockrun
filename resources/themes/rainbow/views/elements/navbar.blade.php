<nav class="navbar navbar-expand-{{$breakpoint_custom}} navbar-light
         {{theme_config('header.navbar.style') == 2 ? 'flex-row-reverse' : ''}}">
    @if(!theme_config('header.logo.hidden'))
        <a class="navbar-brand {{theme_config('header.navbar.logo.center') ? "d-".$breakpoint_custom."-none": ""}}"
           href="{{ route('home') }}"
           title="{{ site_name() }}" aria-labelledby="{{site_name()}}">
            <img src="{{site_logo() }}"
                 alt="{{ site_name() }}">
        </a>
    @endif
    <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbar-collapse-x"
            aria-controls="navbar"
            aria-expanded="false" aria-label="{{ trans('messages.nav.toggle') }}">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div
        class="navbar-collapse collapsed d-{{$breakpoint_custom}}-block d-flex flex-column-reverse justify-content-end align-items-start
         {{theme_config('header.navbar.style') == 2 ? 'flex-'.$breakpoint_custom.'-row-reverse' : 'flex-'.$breakpoint_custom.'-row'}}"
        id="navbar-collapse-x">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav navbar-menu h-100
        {{theme_config('header.navbar.position') == 'center' || !theme_config('header.navbar.position') ? 'mx-'.$breakpoint_custom.'-auto mx-auto-absolute' : ''}}
        {{theme_config('header.navbar.position') == 'left'? 'ms-'.$breakpoint_custom.'-0 me-'.$breakpoint_custom.'-auto  ' : ''}}
        {{theme_config('header.navbar.position') == 'right'? 'ms-'.$breakpoint_custom.'-auto me-'.$breakpoint_custom.'-0  ' : ''}}
            ms-0"
        style="gap: {{theme_config('header.navbar.items_px_spacement') / 16}}rem">
            @php($textLenght = 5)
            @php($imageSize = 1)
            @foreach($navbar as $element)
                @php(strlen(strip_tags($element->name, '</i>')) >= $textLenght ? $textLenght += $textLenght : '')
            @endforeach

            @foreach($navbar as $element)
                @if($loop->index === (int) ($loop->count/2) && !theme_config('header.logo.hidden') && theme_config('header.navbar.logo.center'))
                    <li class="{{theme_config('header.navbar.logo.center') ? "d-none d-".$breakpoint_custom."-inline flex-grow-1 max-width": ""}}"
                        style="max-width: {{theme_config('header.navbar.logo.size') / 16}}rem">
                        <a class="navbar-brand mx-auto" href="{{ route('home') }}" title="{{ site_name() }}"
                           aria-labelledby="{{site_name()}}"
                           style="width: {{theme_config('header.navbar.logo.size') / 16}}rem">
                            <img src="{{site_logo() }}" class="w-100 px-3" alt="{{ site_name() }}">
                        </a>
                    </li>
                @endif
                @if(!$element->isDropdown())
                    <li class="nav-item @if($element->isCurrent()) active @endif">
                        @if(!theme_config('header.icons'))
                            @php($imageSize = 1)
                            @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['url']))
                                    @php(isset($icon['size']) && $icon['size'] >= $imageSize ? $imageSize = $icon['size']  + $icon['size'] : '')
                                @endif
                            @endforeach
                        @endif
                        <a class="nav-link" href="{{ $element->getLink() }}" @if($element->new_tab) target="_blank"
                           rel="noopener noreferrer" @endif
{{--                           style="--size-text: {{($textLenght * 8 + $imageSize / 2)+32}}px"--}}
                        >
                            @if(!theme_config('header.icons'))
                                @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['url']))
                                        <img src="{{  image_url($icon['url']) }}"
                                             style="width: {{isset($icon['size'])  ?$icon['size'] / 16: 9.375}}rem"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['hiddenColor']))
                                        <div class="menu-bg rounded {{!empty($icon['url']) ?'menu-bg-img' :''}} "
                                             style="background-color: {{$icon['color']}};"></div>
                                    @endif
                                @endforeach
                            @endif
                            @if(!theme_config('header.text.hidden'))
                                <span>{{ $element->name }}</span>
                            @endif
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown @if($element->isCurrent()) active @endif">
                        @if(!theme_config('header.icons'))
                            @php($imageSize = 1)
                            @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['url']))
                                    @php(isset($icon['size']) && $icon['size'] >= $imageSize ? $imageSize = $icon['size'] + $icon['size'] : '')
                                @endif
                            @endforeach
                        @endif
                        <a class="nav-link dropdown-toggle text-center" href="²#" id="navbarDropdown{{ $element->id }}"
{{--                           style="--size-text: {{($textLenght * 8 + $imageSize / 2)+48}}px"--}}
                           role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(!theme_config('header.icons'))
                                @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['url']))
                                        <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                             style="width: {{isset($icon['size']) ? $icon['size'] / 16: 9.375}}rem"
                                             alt="{{ $element->name }}" title="{{ $element->name }}">
                                    @endif
                                    @if($element->value.'-'.$element->type.'-'.$element->id === $icon['name'] && !empty($icon['hiddenColor']))
                                        <div class="menu-bg rounded {{!empty($icon['url']) ?'menu-bg-img' :''}} "
                                             style="background-color: {{$icon['color']}};"></div>
                                    @endif
                                @endforeach
                            @endif
                            @if(!theme_config('header.text.hidden'))
                                <span>{{ $element->name }}</span>
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $element->id }}">
                            @foreach($element->elements as $childElement)
                                <a class="dropdown-item @if($childElement->isCurrent()) active @endif"
                                   href="{{ $childElement->getLink() }}" @if($childElement->new_tab) target="_blank"
                                   rel="noopener noreferrer" @endif>
                                    @if(!theme_config('header.icons'))
                                        @foreach(theme_config('header.iconmenus') ?? [] as $icon )
                                            @if($childElement->value.'-'.$childElement->type.'-'.$childElement->id === $icon['name'])
                                                <img src="{{ !empty($icon['url']) ? image_url($icon['url']) :''}}"
                                                     style="width: {{isset($icon['size']) ? $icon['size'] / 16: 9.375}}rem"
                                                     alt="{{ $childElement->name }}" title="{{ $childElement->name }}">
                                            @endif
                                        @endforeach
                                    @endif
                                    {{ $childElement->name }}
                                </a>
                            @endforeach
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav navbar-user flex-row">

            <!-- Authentication Links -->
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ trans('auth.login') }}</a>
                </li>

                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ trans('auth.register') }}</a>
                    </li>
                @endif
                @if(plugins()->isEnabled('discord-auth'))
                    @if(!theme_config('header.discord.hidden'))
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('discord-auth.login') }}"
                                   title="{{ trans('discord-auth::messages.login_via_discord') }}"
                                   aria-labelledby="{{ trans('discord-auth::messages.login_via_discord') }}"><i
                                        class="bi bi-discord"></i></a>
                            </li>
                        @endguest
                    @endif
                @endif
            @else
                @include('elements.notifications')

                <li class="nav-item dropdown dropdown-user">
                    <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(game()->name() === 'Minecraft')
                            <img src="{{ Auth::user()->getAvatar(32) }}" width="32" class="rounded img-fluid"
                                 alt="{{ Auth::user()->name }}">
                        @endif
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                            {{ trans('messages.nav.profile') }}
                        </a>

                        @foreach(plugins()->getUserNavItems() ?? [] as $navId => $navItem)
                            <a class="dropdown-item" href="{{ route($navItem['route']) }}">
                                {{ trans($navItem['name']) }}
                            </a>
                        @endforeach

                        @if(Auth::user()->hasAdminAccess())
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                {{ trans('messages.nav.admin') }}
                            </a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ trans('auth.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
