<article class="js-background-particles block--background-logo  position-relative background--height-custom">
    @includeIf('block.background')
    <div class="container d-inline-flex h-100">
        <div class="row justify-content-center align-items-center w-100 mx-auto">
            <div class="col-lg-12 d-flex align-items-center">
                @if (!theme_config($getItemBackground . '.logo.hidden') && theme_config($getItemBackground . '.logo.item.media'))
                    <a class="navbar-brand">
                        <img class="img-fluid w-100"
                            src="{{ image_url(theme_config($getItemBackground . '.logo.item.media')) }}"
                            alt="{{ site_name() }}" title="{{ site_name() }}"
                            {{ !theme_config($getItemBackground . '.logo.item.animation') ? 'data-tilt' : '' }}>
                    </a>
                @endif
            </div>
            <div class="col-lg-12 d-flex align-items-center">
                <h1 class="mx-auto text-center pt-3">Serveur Minecraft Cobblemon français
                </h1>
            </div>
            <div class="col-lg-12 d-flex align-items-center">
                <h2 class="mx-auto text-center pb-3">Surprenant serveur Minecraft où vous trouverez des Pokémon
                </h2>
            </div>
            <div class="col-lg-12 d-flex align-items-center">
                <a href="join" class="btn btn-primary btn-block navbar-brand">
                    @if (!$servers->isEmpty())
                        @php($countOnliePlayers = 0)
                        @php($countServer = 0)
                        @php($countOffOnline = 0)

                        @foreach ($servers as $server)
                            @php($countServer++)
                            @if (strpos('proxy', $server->name) === false)
                                @if ($server->getOnlinePlayers())
                                    @php($countOnliePlayers += $server->getOnlinePlayers())
                                @endif
                            @endif
                            @if (!$server->isOnline())
                                @php($countOffOnline++)
                            @endif
                        @endforeach

                        @if ($countServer != $countOffOnline)
                            Rejoindre {{ $countOnliePlayers }} connectés
                        @endif
                    @endif
                </a>
            </div>
        </div>
    </div>
</article>
@push('footer-scripts')
    <script src="{{ theme_asset('js/vanilla-tilt.min.js') }}"></script>
@endpush
