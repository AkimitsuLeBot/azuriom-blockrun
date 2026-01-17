<div class="container content">
    <div class="row">
        <div class="col">
            @include('flyff::guild-siege.ranking.guilds', ['guild_ranking'=>$guildSiege->data['guild_ranking']])
        </div>
        <div class="col">
            @include('flyff::guild-siege.ranking.players', ['player_ranking'=>$guildSiege->data['player_ranking']])
        </div>
    </div>
</div>
