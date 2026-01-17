<article class="mb-3 text-{{theme_config($getItem.'.alignement')}}">
    <div class="card">
        <div class="card-body px-3">
            <h2 class="card-title">{{theme_config($getItem.'.title')}}</h2>
            <p class="card-text">{!! nl2br(e(theme_config($getItem.'.description'))) !!}</p>

            @if(theme_config($getItem.'.btn_url') && theme_config($getItem.'.btn_name'))
                <a href="{{theme_config($getItem.'.btn_url')}}" class="btn btn-{{theme_config($getItem.'.btn_type')}}"
                   target="{{theme_config($getItem.'.onglet') ?? '_blank'}}">
                    {{theme_config($getItem.'.btn_name')}}
                </a>
            @endif
        </div>
    </div>
</article>
