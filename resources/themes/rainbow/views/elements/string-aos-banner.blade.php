@if(isset($id, $key, $getBanner) && theme_config($getBanner))
    @if(theme_config($getBanner.'.aos.animation') !== 'none')
        @if(theme_config($getBanner.'.aos.animation'))
            data-aos='{{theme_config($getBanner.'.aos.animation')}}'
        @endif
        @if(theme_config($getBanner.'.aos.easing'))
            data-aos-easing='{{theme_config($getBanner.'.aos.easing')}}'
        @endif
        @if(theme_config($getBanner.'.aos.duration'))
            data-aos-duration='{{theme_config($getBanner.'.aos.duration')}}'
        @endif
        @if(theme_config($getBanner.'.aos.placement'))
            data-aos-anchor-placement='{{theme_config($getBanner.'.aos.placement')}}'
        @endif
        @if(theme_config($getBanner.'.aos.offset'))
            data-aos-offset='{{theme_config($getBanner.'.aos.offset')}}'
        @endif
    @endif
@else
    @if(isset($bannerAos) && theme_config($bannerAos.'.banner.'.$value.'.aos.animation') !== 'none')
        @if(theme_config($bannerAos.'.banner.'.$value.'.aos.animation'))
            data-aos='{{theme_config($bannerAos.'.banner.'.$value.'.aos.animation')}}'
        @endif
        @if(theme_config($bannerAos.'.banner.'.$value.'.aos.easing'))
            data-aos-easing='{{theme_config($bannerAos.'.banner.'.$value.'.aos.easing')}}'
        @endif
        @if(theme_config($bannerAos.'.banner.'.$value.'.aos.duration'))
            data-aos-duration='{{theme_config($bannerAos.'.banner.'.$value.'.aos.duration')}}'
        @endif
        @if(theme_config($bannerAos.'.banner.'.$value.'.aos.placement'))
            data-aos-anchor-placement='{{theme_config($bannerAos.'.banner.'.$value.'.aos.placement')}}'
        @endif
        @if(theme_config($bannerAos.'.banner.'.$value.'.aos.offset'))
            data-aos-offset='{{theme_config($bannerAos.'.banner.'.$value.'.aos.offset')}}'
        @endif
    @endif
@endif
