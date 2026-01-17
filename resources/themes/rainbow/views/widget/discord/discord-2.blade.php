<div @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'discord'])>
    <div class="rainbow-widget rainbow-block" data-widget="rainbow_discord_widget">
        <div class="rainbow-content">
            <div class="rainbow-usersDiscord"></div>
            <div class="rainbow-discordInfo">
                <span class="rainbow-js--discordCount"></span>
                <a href="{{theme_config($getItem.'.url') ?? '#'}}" target="_blank"
                   class="btn btn-joinDiscord">{{trans('theme::lang.site.discord.join')}}</a>
            </div>
        </div>
    </div>
</div>
<script defer data-cfasync="false">
    window.addEventListener("DOMContentLoaded", async (event) => {
        "use strict";
        // COMPTEUR DISCORD
        let discord_key = "{{theme_config($getItem.'.id')}}";
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
