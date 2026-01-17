<iframe @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'discord']) id="iframe-discord"
        title="{{site_name()}}" aria-labelledby="{{site_name()}}"
        src="https://discordapp.com/widget?id={{theme_config($getItem.'.id')}}&theme=dark"
        width="350"
        height="500" allowtransparency="true" frameborder="0"
        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
