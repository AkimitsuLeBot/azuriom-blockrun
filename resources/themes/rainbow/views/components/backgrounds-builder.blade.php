@if(theme_config($page_current.'.background') && theme_config($page_current.'.background.'.key(theme_config($page_current.'.background'))))
    @includeIf('components.backgrounds',['key'=> key(theme_config($page_current.'.background')),
                                         'id' => theme_config($page_current.'.background.'.key(theme_config($page_current.'.background')))])
@else

    @include('block.background')
@endif
