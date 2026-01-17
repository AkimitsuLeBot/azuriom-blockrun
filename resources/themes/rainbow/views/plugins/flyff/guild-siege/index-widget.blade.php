<div class="table-responsive">
    <ul class="table--custom mt-5">
        <li class="table-header">
            <div class="col px-3 col-3">Date</div>
            <div class="col px-3 col-4">{{trans('flyff::messages.guild')}}</div>
            <div class="col px-3 col-4">MVP</div>
            <div class="col px-3 col-1">{{ trans('messages.fields.action') }}</div>
        </li>
        @foreach($guildSieges as $guildSiege)
            @php
                $guild = array_key_first($guildSiege->data['guild_ranking']);
                $mvp = array_key_first($guildSiege->data['player_ranking']);
            @endphp
            <li class="table-row">
                <div class="col px-3 col-3">{{ format_date($guildSiege->happened_at, true) }}</div>
                <div class="col px-3 col-4">{{"$guild : {$guildSiege->data['guild_ranking'][$guild]['totalScore']}"}}</div>
                <div
                    class="col px-3 col-4">{{"$mvp - {$guildSiege->data['player_ranking'][$mvp]['guild']} : {$guildSiege->data['player_ranking'][$mvp]['score']}"}}</div>
                <div class="col px-3 col-1">
                    <a class="mx-1" target="_blank"
                       href="{{ route('flyff.guild-siege.show', $guildSiege->id)}}"
                       role="button"><i class="bi bi-eye-fill"></i></a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

{{ $guildSieges->links() }}
