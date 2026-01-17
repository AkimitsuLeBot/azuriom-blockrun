@php
    $sizeL = '';
    $sizeLR = '';
	$reverse = '';
	if (theme_config($getItem.'.media_size') === 'small'){
        $sizeL = '4';
        $sizeLR = '8';
	    $reverse = theme_config($getItem.'.reverse') ? 'flex-row-reverse' : '';
	}elseif (theme_config($getItem.'.media_size') === 'medium'){
        $sizeL = '6';
        $sizeLR = '6';
	    $reverse = theme_config($getItem.'.reverse') ? 'flex-row-reverse' : '';
	}elseif (theme_config($getItem.'.media_size') === 'large'){
        $sizeL = '8';
        $sizeLR = '4';
	    $reverse = theme_config($getItem.'.reverse') ? 'flex-row-reverse' : '';
	}else{
        $sizeL = '12';
        $sizeLR = '12';
	    $reverse = theme_config($getItem.'.reverse') ? 'flex-column-reverse' : '';
	}
@endphp
<article class="mb-3">
    <div class="card">
        <div class="row g-0 {{$reverse}}">
            @if(theme_config($getItem.'.url'))
                <div class="col-md-{{$sizeL}}">
                    <div class="ratio ratio-16x9 h-100">
                        <iframe type="text/html" frameborder="0" src="{{theme_config($getItem.'.url')}}"></iframe>
                    </div>
                </div>
            @endif
            @if(theme_config($getItem.'.title') || theme_config($getItem.'.description') || theme_config($getItem.'.btn_name') )
                <div class="col-md-{{$sizeLR}}  align-self-center">
                    <div class="card-body px-3 text-{{theme_config($getItem.'.alignement')}}">
                        <h2 class="card-title">{{theme_config($getItem.'.title')}}</h2>
                        <p class="card-text">{!! nl2br(e(theme_config($getItem.'.description'))) !!}</p>
                        @if(theme_config($getItem.'.btn_url') && theme_config($getItem.'.btn_name'))
                            <a href="{{theme_config($getItem.'.btn_url')}}"
                               class="btn btn-{{theme_config($getItem.'.btn_type')}}" target="{{theme_config($getItem.'.onglet') ?? '_blank'}}">
                                {{theme_config($getItem.'.btn_name')}}
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</article>
