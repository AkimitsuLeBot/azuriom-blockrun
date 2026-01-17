@if(!theme_config($getItem.'.hidden'))
    @if(theme_config($getItem.'.media'))
        <div class="mb-4 text-{{theme_config($getItem.'.alignement')}} w-75 mx-auto">
            <img class="img-fluid" style="width: {{theme_config($getItem.'.size')}}px" src="{{image_url(theme_config($getItem.'.media'))}}"
                 alt="{{theme_config($getItem.'.title')}}">
        </div>
    @else
        <div class="mb-4 text-center w-75 mx-auto">
            <img class="img-fluid" style="width: {{theme_config($getItem.'.size')}}px" src="{{site_logo()}}"
                 alt="{{theme_config($getItem.'.title')}}">
        </div>
    @endif
@endif
