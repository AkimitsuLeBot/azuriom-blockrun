<article class="widget--stats mb-3" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')
    <div class="card card-body px-4">
            <ul class="list-unstyled">
                @if(!$servers->isEmpty())
                    @php($countOnliePlayers = 0)
                    @php($countServer = 0)
                    @php($countOffOnline = 0)

                    @foreach($servers as $server)
                        @php($countServer++)
                        @if(strpos('proxy', $server->name) === false)
                            @if($server->getOnlinePlayers())
                                @php($countOnliePlayers += $server->getOnlinePlayers() )
                            @endif
                        @endif
                        @if(!$server->isOnline())
                            @php($countOffOnline++)
                        @endif
                    @endforeach

                    @if($countServer != $countOffOnline)
                        <li class="row fw-bold  fs-5">
                            <span class="col">{{ trans('theme::theme.widget.stats.player_online') }}</span>
                            <span class="col text-end text-primary fs-5">{{$countOnliePlayers}}</span>
                        </li>
                    @else
                        <li class="row fw-bold  fs-5">
                            <span class="col">{{ trans('theme::theme.widget.stats.player_online') }}</span>
                            <span class="col text-end text-danger fs-5">{{ trans('theme::theme.widget.stats.offline') }}</span>
                        </li>
                    @endif
                @endif
        @foreach(theme_config($getItem.'.index') ?? [] as $key => $value)
                <li class="row fw-bold  fs-5">
                    <span class="col">{{ $value['name'] }}</span>
                    <span class="col text-end text-primary fs-5">{{$value['number']}}</span>
                </li>
        @endforeach
            </ul>
    </div>
</article>
