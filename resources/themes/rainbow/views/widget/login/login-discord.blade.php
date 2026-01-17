@if(plugins()->isEnabled('discord-auth'))
    @if(!theme_config($getItem.'.hidden'))
        @guest
            <a class="btn btn-primary d-inline-flex w-100 justify-content-center my-3 widget--discord-button"
               style="font-size: 2rem"
               @include('elements.string-aos', ['pageAos' => 'login', 'itemAos'=>'discord'])
               href="{{ route('discord-auth.login') }}"
               title="{{ trans('discord-auth::messages.login_via_discord') }}"
               aria-labelledby="{{ trans('discord-auth::messages.login_via_discord') }}">
                @if(theme_config($getItem.'.media'))
                    <img style="max-width: 65px"
                         src="{{image_url(theme_config($getItem.'.media'))}}"
                         alt="{{trans('auth.login')}}">
                @else
                    <i class="bi bi-discord text-xl"></i>
                @endif
                <span class="ps-2 d-inline-flex align-items-center" style="font-size: 1rem">
                                {{theme_config($getItem.'.text') ?? ''}}
                                </span>
            </a>
        @endguest
    @endif
@endif
