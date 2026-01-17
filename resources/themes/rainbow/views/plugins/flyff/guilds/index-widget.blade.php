<div class="table-responsive">
    <ul class="table--custom mt-5">
        <li class="table-header">
            <div class="col px-3 col-1">#</div>
            <div class="col px-3 col-4">Name</div>
            <div class="col px-3 col-3">Wins</div>
            <div class="col px-3 col-3">Leader</div>
            <div class="col px-3 col-1">{{ trans('messages.fields.action') }}</div>
        </li>
        @foreach ($guilds as $guild)
            <li class="table-row">
                <div class="col px-3 col-1">
                    <img src="{{$guild->Icon}}"
                         alt=""> {{$loop->iteration + ($guilds->currentPage()-1) * $guilds->perPage()}}
                </div>
                <div class="col px-3 col-4">{{$guild->m_szGuild}}</div>
                <div class="col px-3 col-3">{{$guild->m_nWin}}</div>
                <div class="col px-3 col-3">{{$guild->leader->m_szName}}</div>
                <div class="col px-3 col-1">
                    <a href="{{route('flyff.guilds.show', $guild->m_szGuild)}}" class="mx-1"
                       title="{{ trans('messages.actions.show') }}" data-bs-toggle="tooltip"><i
                            class="bi bi-eye-fill"></i></a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
{{$guilds->links()}}
