@if(isset($id, $key,$getItem) && theme_config($getItem))
    @if(theme_config($getItem.'.aos.animation') !== 'none')
        @if(theme_config($getItem.'.aos.animation'))
            data-aos='{{theme_config($getItem.'.aos.animation')}}'
        @endif
        @if(theme_config($getItem.'.aos.easing'))
            data-aos-easing='{{theme_config($getItem.'.aos.easing')}}'
        @endif
        @if(theme_config($getItem.'.aos.duration') || isset($noDuration))
            data-aos-duration='{{theme_config($getItem.'.aos.duration')}}'
        @endif
        @if(theme_config($getItem.'.aos.placement'))
            data-aos-anchor-placement='{{theme_config($getItem.'.aos.placement')}}'
        @endif
        @if(theme_config($getItem.'.aos.offset'))
            data-aos-offset='{{theme_config($getItem.'.aos.offset')}}'
        @endif
    @endif
@elseif(isset($id, $key, $getItemBackground)  && theme_config($getItemBackground))
    @php($back = $getItemBackground.'.'.$isbackground.'.item')
    @if(theme_config($back.'.aos.animation') !== 'none')
        @if(theme_config($back.'.aos.animation'))
            data-aos='{{theme_config($back.'.aos.animation')}}'
        @endif
        @if(theme_config($back.'.aos.easing'))
            data-aos-easing='{{theme_config($back.'.aos.easing')}}'
        @endif
        @if(theme_config($back.'.aos.duration') || isset($noDuration))
            data-aos-duration='{{theme_config($back.'.aos.duration')}}'
        @endif
        @if(theme_config($back.'.aos.placement'))
            data-aos-anchor-placement='{{theme_config($back.'.aos.placement')}}'
        @endif
        @if(theme_config($back.'.aos.offset'))
            data-aos-offset='{{theme_config($back.'.aos.offset')}}'
        @endif
    @endif

@else
    @if(isset($pageAos))
        @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.animation') !== 'none')
            @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.animation'))
                data-aos='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.animation')}}'
            @endif
            @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.easing'))
                data-aos-easing='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.easing')}}'
            @endif
            @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.duration') || isset($noDuration))
                data-aos-duration='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.duration')}}'
            @endif
            @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.placement'))
                data-aos-anchor-placement='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.placement')}}'
            @endif
            @if(theme_config($pageAos.'.items.'.$itemAos.'.aos.offset'))
                data-aos-offset='{{theme_config($pageAos.'.items.'.$itemAos.'.aos.offset')}}'
            @endif
        @endif
    @endif
@endif
