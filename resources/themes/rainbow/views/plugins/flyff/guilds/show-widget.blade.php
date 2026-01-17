<div class="table-responsive">
    <ul class="table--custom mt-5">
        <li class="table-header">
            <div class="col px-3 col-2">#</div>
            <div class="col px-3 col-2">Name</div>
            <div class="col px-3 col-2">Rank</div>
            <div class="col px-3 col-2">Level</div>
            <div class="col px-3 col-2">Job</div>
            <div class="col px-3 col-1">Play time</div>
            <div class="col px-3 col-1">{{ trans('messages.fields.action') }}</div>
        </li>
        @foreach ($guild->members as $member)
            <li class="table-row">
                <div class="col px-3 col-2">
                    <img style="width: 50px;height:50px"
                         src="{{$member->character->AvatarUrl}}" alt="">
                </div>
                <div class="col px-3 col-2">
                    <img src="{{$member->character->SexIcon}}" alt=""> {{$member->character->m_szName}}
                </div>
                <div class="col px-3 col-2">
                    <img src="{{$member->RankIcon}}" alt=""> {{$member->RankTitle}}
                </div>
                <div class="col px-3 col-2">{{$member->character->m_nLevel}}</div>
                <div class="col px-3 col-2">
                    <img src="{{$member->character->JobIcon}}"
                         alt="{{$member->character->JobName}}"> {{$member->character->JobName}}
                </div>
                <div class="col px-3 col-1">{{$member->character->TotalTimePlayed}}</div>
                <div class="col px-3 col-1">
                    <a href="{{route('flyff.characters.show', $member->character->m_szName)}}" class="mx-1"
                       title="{{ trans('messages.actions.show') }}" data-bs-toggle="tooltip"><i
                            class="bi bi-eye-fill"></i></a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
