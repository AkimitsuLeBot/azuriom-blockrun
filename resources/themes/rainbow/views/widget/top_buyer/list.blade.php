<div class="card bg-transparent">
    @foreach($topBuyer as $key=>$value)
        <div class="card-body {{theme_config($getItem.'.style') == 1 ? 'my-2 rounded': 'py-2 rounded-0'}}">
            <ul class="my-0 ps-0">
                <li class="d-flex align-items-center justify-content-start">
                    <img class="d-flex mr-2 rounded" src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'helm', \Azuriom\Models\User::find($key)->getAvatar(60))}}" width="60"
                         alt="{{ \Azuriom\Models\User::find($key)->name}}">
                    <div class="ms-4">
                        <p class="fs-3 text-primary mb-0">{{\Azuriom\Models\User::find($key)->name}}</p>
                        @if(!theme_config($getItem.'.price_hidden'))
                            <span class="small fw-bold">{{ shop_format_amount($value)}}</span>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>
