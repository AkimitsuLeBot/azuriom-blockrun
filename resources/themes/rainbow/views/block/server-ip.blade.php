@php( isset($id, $key, $getItemBackground) ? $background = $getItemBackground : $background = 'home.items.ip-server')
<div class="js-background-particles block--serveur--ip position-relative d-flex">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center mb-3">
            <div class="col-lg-4 col-md-6 mb-3 align-self-xl-{{theme_config($background.'.ipServer.item.position')}}">
                @if(!theme_config($background.'.ipServer.item.hidden'))
                    @if(theme_config($background.'.ipServer.item.ip'))
                        <a href="javascript:" class="w-100" title="{{theme_config($background.'.ipServer.item.ip')}}">
                    @endif
                        <div class="countConnectServer justify-content-center justify-content-md-end" id="server-ip-copy"
                            @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'ip-server', 'isbackground' => 'ipServer'])
                            {{theme_config($background.'.ipServer.item.ip') ? 'data-clipboard-text='.theme_config($background.'.ipServer.item.ip').' data-bs-toggle=tooltip data-bs-placement=bottom data-bs-delay=100 data-bs-trigger=click  title='.trans('messages.copied'): ''}}
                        >
                            @if(theme_config($background.'.ipServer.item.mediaIp'))
                                <img src="{{ image_url(theme_config($background.'.ipServer.item.mediaIp')) }}"
                                     alt="{{theme_config($background.'.ipServer.item.ip')}}">
                            @endif
                            <div class="text mx-auto">
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
                                        {{ trans_choice('messages.server.online', $countOnliePlayers) }}
                                    @else
                                        {{ trans('messages.server.offline') }}
                                    @endif
                                @endif
                                <h2 class="copy">{{theme_config($background.'.ipServer.item.ip')}}</h2>
                            </div>
                            @if($server && $server->isOnline())
                                @if(theme_config($background.'.ipServer.item.mediaServeOn'))
                                    <img class="ms-2"
                                         src="{{ image_url(theme_config($background.'.ipServer.item.mediaServeOn')) }}"
                                         alt="{{theme_config($background.'.ipServer.item.ip')}}">
                                @else
                                    <div class="icon">
                                        <i class="bi bi-reception-4" aria-hidden="true"></i>
                                    </div>
                                @endif
                            @else
                                @if(theme_config($background.'.ipServer.item.mediaServeOff'))
                                    <img class="ms-2"
                                         src="{{ image_url(theme_config($background.'.ipServer.item.mediaServeOff')) }}"
                                         alt="{{theme_config($background.'.ipServer.item.ip')}}">
                                @else
                                    <div class="icon">
                                        <i class="bi bi-x-lg"></i>
                                    </div>
                                @endif
                            @endif
                        </div>

                    @if(theme_config($background.'.ipServer.item.ip'))
                        </a>
                    @endif
                @endif
            </div>
            <div
                class="col-lg-4 col-md-7 d-lg-block d-none mb-3 align-self-xl-{{theme_config($background.'.download.item.position')}}">
                @if(!theme_config($background.'.download.item.hidden') && !is_null(theme_config($background.'.download.item.url')))
                    <div @include('elements.string-aos', ['pageAos' => $background.'', 'itemAos'=>'download','isbackground' => 'download'])>
                        <div class="btn-wrapper-home d-sm-block d-none">
                            <a class="btn btn-download" href="{{theme_config($background.'.download.item.url')}}"
                               title="{{theme_config($background.'.download.item.name')}}">
                                {{theme_config($background.'.download.item.name')}}
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            <div
                class="col-lg-4 col-md-6 mb-3 align-self-xl-{{theme_config($background.'.register.item.position')}}">
                @if(!theme_config($background.'.register.item.hidden'))
                    @if(theme_config($background.'.register.item.linkDiscord'))
                        <a href="{{theme_config($background.'.register.item.linkDiscord')}}"
                           title="{{theme_config($background.'.register.item.textDiscord')}}" class="w-100"
                           target="_blank">
                            @endif
                            <div class="countRegister w-100 justify-content-center justify-content-md-start"
                                @include('elements.string-aos', ['pageAos' => $background.'', 'itemAos'=>'count-register','isbackground' => 'register'])>
                                @if(theme_config($background.'.register.item.mediaRegister'))
                                    <img src="{{ image_url(theme_config($background.'.register.item.mediaRegister')) }}"
                                         alt="{{trans('theme::lang.site.register')}}">
                                @else
                                    <div class="icon">
                                        <i class="bi bi-people-fill" aria-hidden="true"></i>
                                    </div>
                                @endif
                                <div class="text mx-auto">
                                    @if(theme_config($background.'.register.item.style') === 'discord')
                                        <span class="discordCount">
                                            <script>
                                            window.addEventListener("DOMContentLoaded", (event) => {
                                                var discord_key = "{{theme_config($getItemBackground.'.register.item.discord_key') ?? "684097488164225073"}}";
                                                let url = 'https://discordapp.com/api/guilds/' + discord_key + '/embed.json';


                                                function discordAPI() {
                                                    var init = {
                                                        method: 'GET',
                                                        mode: 'cors',
                                                        cache: 'reload'
                                                    }
                                                    fetch(url, init).then(function (response) {
                                                        if (response.status != 200) {
                                                            console.log("it didn't work" + response.status);
                                                            return
                                                        }
                                                        response.json().then(function (d) {
                                                            console.log(d);
                                                            document.querySelector('.discordCount').innerHTML = d.presence_count + " {{trans('theme::theme.discord.online')}}";
                                                        })
                                                    }).catch(function (err) {
                                                        console.log('fetch error: ' + err)
                                                    })
                                                }

                                                discordAPI()
                                            })
                                        </script>
                                        </span>

                                        <h2>{{theme_config($getItemBackground.'.register.item.textDiscord') ?? 'Mon discord'}}</h2>
                                    @else
                                        <p>
                                            <em class="">{{\Azuriom\Models\User::whereNull('deleted_at')->count()}}</em> {{trans('theme::lang.site.register')}}
                                        </p>
                                        <h2>{{trans('theme::lang.site.memberRegister')}}</h2>
                                    @endif
                                </div>
                            </div>
                            @if(theme_config($background.'.register.item.linkDiscord'))
                        </a>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
