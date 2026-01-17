<article
    class="widget--slogan row align-items-stretch align-content-center justify-content-center py-5 text-center" @include('elements.string-aos')>
    @if(theme_config($getItem.'.title'))
        <div class="col-12">
            <h2 class="mb-5">{{theme_config($getItem.'.title')}}</h2>
        </div>
    @endif
    @for($i =1 ; $i <= 3; $i++)
        @if(theme_config($getItem.'.block_'.$i.'_title') || theme_config($getItem.'.block_'.$i.'_link') || theme_config($getItem.'.block_'.$i.'_media') || theme_config($getItem.'.block_'.$i.'_description'))
            <div class="col-md-4 mb-4 h-auto">
                @if(theme_config($getItem.'.block_'.$i.'_link'))
                    <a href="{{theme_config($getItem.'.block_'.$i.'_link')}}"
                       title="{{theme_config($getItem.'.block_'.$i.'_title')}}" target="{{theme_config($getItem.'.block_'.$i.'_onglet') ?? '_blank'}}">
                        @endif
                        <div class="card h-100 shadow-sm rounded">
                            <div class="card-body d-flex flex-column justify-content-end align-items-center">
                                @if(theme_config($getItem.'.block_'.$i.'_media'))
                                    <img class="mb-3"
                                         style="width: 100%; max-width: {{theme_config($getItem.'.block_'.$i.'_media_size')}}px"
                                         src="{{ image_url(theme_config($getItem.'.block_'.$i.'_media')?? 'not_image.png' )}}"
                                         alt="{{theme_config($getItem.'.block_'.$i.'_title')}}">
                                @endif
                                @if(theme_config($getItem.'.block_'.$i.'_title'))
                                    <h3 class="mb-3">{{theme_config($getItem.'.block_'.$i.'_title')}}</h3>
                                @endif
                                @if(theme_config($getItem.'.block_'.$i.'_description'))
                                    <p class="mb-3">{{theme_config($getItem.'.block_'.$i.'_description')}}</p>
                                @endif
                            </div>
                        </div>
                        @if(theme_config($getItem.'.block_'.$i.'_link'))
                    </a>
                @endif
            </div>
        @endif
    @endfor
</article>
