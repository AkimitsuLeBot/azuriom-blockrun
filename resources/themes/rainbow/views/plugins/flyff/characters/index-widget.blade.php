<div class="table-responsive">
    <ul class="table--custom mt-5">
        <li class="table-header">
            <div class="col px-3 col-2">#</div>
            <div class="col px-3 col-3">{{ trans('messages.fields.name') }}</div>
            <div class="col px-3 col-2">{{trans('flyff::messages.guild')}}</div>
            <div class="col px-3 col-1">Level</div>
            <div class="col px-3 col-2">Job</div>
            <div class="col px-3 col-1">Play time</div>
            <div class="col px-3 col-1">{{ trans('messages.fields.action') }}</div>
        </li>
        @foreach ($characters as $character)
            @php
                $character_rank = $loop->iteration + ($characters->currentPage()-1) * $characters->perPage()
            @endphp
            <li class="table-row">

                @if ($character_rank < 4)
                    <div class="col px-3 col-2"><img style="width: 50px;height:50px" src="{{$character->AvatarUrl}}" alt="">
                    </div>
                @else
                    <div class="col px-3 col-2">{{$character_rank}}</div>
                @endif
                <div class="col px-3 col-3"><img src="{{$character->SexIcon}}" alt=""> {{$character->m_szName}}</div>
                <div class="col px-3 col-2">{{$character->guild->m_szGuild ?? '-'}}</div>
                <div class="col px-3 col-1">{{$character->m_nLevel}}</div>
                <div class="col px-3 col-2"><img src="{{$character->JobIcon}}"
                                            alt="{{$character->JobName}}"> {{$character->JobName}}</div>
                <div class="col px-3 col-1">{{$character->TotalTimePlayed}}</div>
                <div class="col px-3 col-1">
                    <a href="{{route('flyff.characters.show', $character->m_szName)}}" class="mx-1"
                       title="{{ trans('messages.actions.show') }}" data-bs-toggle="tooltip"><i
                            class="bi bi-eye-fill"></i></a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
{{$characters->links()}}
