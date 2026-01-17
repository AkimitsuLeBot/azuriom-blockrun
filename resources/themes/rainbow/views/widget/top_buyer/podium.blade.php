<div class="podium">

    @php
    #Récupération de la valeur du col
        $colMain = explode( '-', $value['col-lg'] );
        $colBlock = explode( '-', $value['widget'][$id][$key]['col-lg'] );

        $colValue = $colBlock[2] <= 6 ? $colBlock[2]:$colMain[2];
    @endphp


    @foreach($topBuyer as $key=>$value)

        <!-- ouverture de la div parent -->
        @if($loop->index == 0 || $loop->index == 3 || $loop->index == 6)
            <div class="d-flex align-items-center align-items-sm-end justify-content-center flex-column flex-sm-row flex-wrap">
        @endif

            @if($loop->iteration == 1)
                <div class="d-flex flex-column align-items-center justify-content-end my-2 mx-3 order-1 {{ $colValue <= 5 ? 'order-sm-1':'order-sm-2' }}" style="{{ $colValue <= 6 ? 'max-width: 180px; width: 180px;':'max-width: 250px; width: 250px;'}}max-height: 350px; height: 350px;">
                    <h2 class="fw-bold">{{\Azuriom\Models\User::find($key)->name}}</h2>
                                @if(!theme_config($getItem.'.price_hidden'))
                        <h5 class="d-flex flex-wrap align-items-center justify-content-center">Dépensé:
                            <span class="ms-1 fw-bold"
                                  style="color: {{isset($getItem) && theme_config($getItem.'.color_top_1')  ?  theme_config($getItem.'.color_top_1'): ''}}">{{shop_format_amount($value)}}</span>
                        </h5>
                            @endif
                    @if(!plugins()->isEnabled('flyff'))
                        <img
                            src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'body', \Azuriom\Models\User::find($key)->getAvatar(100))}}"
                            alt="{{\Azuriom\Models\User::find($key)->name}} Skin"
                            style="max-height: 200px; max-width: 100px;"
                        >
                    @endif
                    <div class="d-flex align-items-center" style="width: 180px;height: 75px;background-color: var(--color-contrast-low); border-radius: var(--rb-border-global); color: var(--color-contrast-higher);">
                        <span class="bi bi-trophy-fill m-auto fs-1" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_1')  ?  theme_config($getItem.'.color_top_1'): ''}}"> <strong style="color: var(--color-contrast-higher);">#1</strong></span>
                    </div>
                </div>
            @endif
            @if($loop->iteration == 2)
                <div class="d-flex flex-column align-items-center justify-content-end my-2 mx-3 order-2 {{ $colValue <= 5 ? 'order-sm-2':'order-sm-1' }}" style="{{ $colValue <= 6 ? 'max-width: 180px; width: 180px;':'max-width: 250px; width: 250px;'}}max-height: 350px; height: 350px;">
                    <h2 class="fw-bold">{{\Azuriom\Models\User::find($key)->name}}</h2>
                    @if(!theme_config($getItem.'.price_hidden'))
                        <h5 class="d-flex flex-wrap align-items-center justify-content-center">Dépensé:
                            <span class="ms-1 fw-bold"
                                  style="color: {{isset($getItem) && theme_config($getItem.'.color_top_2')  ?  theme_config($getItem.'.color_top_2'): ''}}">{{shop_format_amount($value)}}</span>
                        </h5>
                    @endif
                    @if(!plugins()->isEnabled('flyff'))
                    <img
                        src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'body', \Azuriom\Models\User::find($key)->getAvatar(100))}}"
                        alt="{{\Azuriom\Models\User::find($key)->name}} Skin"
                        style="max-height: 200px; max-width: 100px;"
                    >
                    @endif
                    <div class="d-flex align-items-center" style="width: 180px;height: 55px;background-color: var(--color-contrast-low); border-radius: var(--rb-border-global); color: var(--color-contrast-higher);">
                        <span class="bi bi-trophy-fill m-auto fs-2" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_2')  ?  theme_config($getItem.'.color_top_2'): ''}}"> <strong style="color: var(--color-contrast-higher);">#2</strong></span>
                    </div>
                </div>
            @endif
            @if($loop->iteration == 3)
                <div class="d-flex flex-column align-items-center justify-content-end my-2 mx-3 order-3" style="{{ $colValue <= 6 ? 'max-width: 180px; width: 180px;':'max-width: 250px; width: 250px;'}}max-height: 350px; height: 350px;">
                    <h2 class="fw-bold">{{\Azuriom\Models\User::find($key)->name}}</h2>
                    <h5 class="d-flex flex-wrap align-items-center justify-content-center">Dépensé: <span class="ms-1 fw-bold" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_3')  ?  theme_config($getItem.'.color_top_3'): ''}}">
                                @if(!theme_config($getItem.'.price_hidden'))
                                    {{shop_format_amount($value)}}
                                @endif
                                </span></h5>
                    @if(!plugins()->isEnabled('flyff'))
                    <img
                        src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'body', \Azuriom\Models\User::find($key)->getAvatar(100))}}"
                        alt="{{\Azuriom\Models\User::find($key)->name}} Skin"
                        style="max-height: 200px; max-width: 100px;"
                    >
                    @endif
                    <div class="d-flex align-items-center" style="width: 180px;height: 40px;background-color: var(--color-contrast-low); border-radius: var(--rb-border-global); color: var(--color-contrast-higher);">
                        <span class="bi bi-trophy-fill m-auto fs-3" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_3')  ?  theme_config($getItem.'.color_top_3'): ''}}"> <strong style="color: var(--color-contrast-higher);">#3</strong></span>
                    </div>
                </div>
            @endif

            @if($loop->iteration > 3)
                <div class="d-flex flex-column align-items-center justify-content-end {{ $colValue <= 6 ? 'my-4':'my-2'}} mx-3 order-3" style="{{ $colValue <= 6 ? 'max-width: 180px; width: 180px;':'max-width: 250px; width: 250px;' }} max-height: 250px; height: 250px;">
                    <h2 class="fw-bold fs-5">{{\Azuriom\Models\User::find($key)->name}}</h2>
                    @if(!theme_config($getItem.'.price_hidden'))
                        <h5 class="d-flex {{ $colValue <= 6 ? 'flex-column':'me-2'}} align-items-center fs-6">Dépensé:
                            <span class="ms-1 fw-bold"
                                  style="color: {{isset($getItem) && theme_config($getItem.'.color_top_7')  ?  theme_config($getItem.'.color_top_7'): ''}}">{{shop_format_amount($value)}}</span>
                        </h5>
                    @endif
                    @if(!plugins()->isEnabled('flyff'))
                    <img
                        src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'body', \Azuriom\Models\User::find($key)->getAvatar(100))}}"
                        alt="{{\Azuriom\Models\User::find($key)->name}} Skin"
                        style="max-height: 160px; max-width: 80px;"
                    >
                    @endif
                    <div class="d-flex align-items-center" style="width: 180px;height: 35px;background-color: var(--color-contrast-low); border-radius: var(--rb-border-global); color: var(--color-contrast-higher);">
                        <span class="bi bi-trophy-fill m-auto fs-5" style="color: {{isset($getItem) && theme_config($getItem.'.color_top_7')  ?  theme_config($getItem.'.color_top_7'): ''}}"> <strong style="color: var(--color-contrast-higher);">#{{$loop->iteration}}</strong></span>
                    </div>
                </div>
            @endif


        <!-- fermeture de la div parent -->
        @if($loop->index == 2 || $loop->index == 5 || $loop->index == 10)
            </div>
        @endif

    @endforeach
</div>
