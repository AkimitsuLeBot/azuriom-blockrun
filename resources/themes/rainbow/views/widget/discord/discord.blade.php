<article class="widget--discord mb-5">
    @if(isset($getItem) && theme_config($getItem.'.id') && !theme_config($getItem.'.hidden'))
        @if(theme_config($getItem.'.style') == 0 || !theme_config($getItem.'.style'))

            @include('widget.banner.banner-widget')
            @includeIf('widget.discord.discord-1')

        @endif
        @if(theme_config($getItem.'.style') == 1)

            @include('widget.banner.banner-widget')
            @includeIf('widget.discord.discord-2')

        @endif
    @else
        @include('widget.banner.banner',['banner' => 'home', 'value' => 'discord'])
        <div class="rainbow-widget rainbow--js-discordCoun rainbow-block" data-widget="rainbow_discord_widget">
            <div class="rainbow-content">
                <div class="rainbow-usersDiscord"></div>
                <div class="rainbow-discordInfo">
                    <span class="rainbow-js--discordCount"></span>
                    <a href="{{theme_config('home.items.discord.url') ?? '#'}}" target="_blank"
                       class="btn btn-joinDiscord">{{trans('theme::theme.discord.join')}}</a>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener("DOMContentLoaded", (event) => {
                var discord_key = "{{isset($getItem) ? theme_config($getItem.'.id') : "684097488164225073"}}";
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
                            document.querySelector('.rainbow-js--discordCount').innerHTML = d.presence_count + " {{trans('theme::theme.discord.online')}}";
                            d.members.forEach(function (mem) {
                                document.querySelector('.rainbow-widget[data-widget="rainbow_discord_widget"] .rainbow-content .rainbow-usersDiscord').insertAdjacentHTML('afterbegin', `
                                    <div class="rainbow-discordUser">
                                        <div class="rainbow-userImg" style="background-image:url(${mem.avatar_url})">
                                            <div class="rainbow-userStatus rainbow-status-${mem.status}"></div>
                                        </div>
                                        <div class="rainbow-username">${mem.username}</div>
                                    </div>`);
                            })
                        })
                    }).catch(function (err) {
                        console.log('fetch error: ' + err)
                    })
                }

                discordAPI()
            })
        </script>
    @endif
</article>
