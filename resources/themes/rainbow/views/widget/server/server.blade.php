<article class="widget--server mb-3" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @if(!theme_config($getItem.'.hidden'))
        @if(! $servers->isEmpty())
            <div class="row justify-content-center mb-4">
                @foreach($servers as $server)
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3>{{ $server->name }}</h3>

                                <p>
                                    @if($server->isOnline())
                                        {{ trans_choice('messages.server.total', $server->getOnlinePlayers(), [
                                            'max' => $server->getMaxPlayers(),
                                        ]) }}
                                    @else
                                        <span class="badge bg-danger text-white">
                                    {{ trans('messages.server.offline') }}
                                </span>
                                    @endif
                                </p>

                                @if($server->joinUrl())
                                    <a href="{{ $server->joinUrl() }}" class="btn btn-primary">
                                        {{ trans('messages.server.join') }}
                                    </a>
                                @else
                                    <p class="card-text">{{ $server->fullAddress() }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</article>
