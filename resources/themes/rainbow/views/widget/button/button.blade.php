<div class="mb-3 text-{{theme_config($getItem.'.alignement')}}">
    <a href="{{theme_config($getItem.'.url')}}" class="btn btn-{{theme_config($getItem.'.type')}}"
       target="{{theme_config($getItem.'.onglet') ?? '_blank'}}">
        @if(theme_config($getItem.'.media'))
            <img src="{{image_url(theme_config($getItem.'.media'))}}" class="me-2 img-fluid" style="max-width: 75px"
                 alt="{{theme_config($getItem.'.name')}}">
        @endif
        {{theme_config($getItem.'.name')}}
    </a>
</div>
