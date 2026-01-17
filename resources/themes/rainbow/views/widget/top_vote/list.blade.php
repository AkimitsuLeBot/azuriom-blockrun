<div class="card bg-transparent">
    @foreach($voters as $vote)
        <div class="card-body {{theme_config($getItem.'.style') == 1 ? 'my-2 rounded': 'py-2 rounded-0'}}">
            <ul class="my-0 ps-0">
                <li class="d-flex align-items-center justify-content-start">
                    <img class="d-flex mr-2 rounded" src="{{ str_replace(array('helm', 'avatar','player'), theme_config($getItem.'.selectSkin') ?? 'avatar', $vote->user->getAvatar(60))}}" width="60"
                         alt="{{ $vote->user->name}}">
                    <div class="ms-4">
                        <p class="fs-3 text-primary mb-0">{{$vote->user->name}}</p>
                            <span class="small fw-bold">{{$vote->votes}} {{$vote->votes > 1 ? 'Votes' :'Vote' }}</span>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
    <div class="text-center py-2">
        <a href="{{route('vote.home')}}" class="btn btn-primary w-100 mw-100">{{trans('vote::messages.sections.vote')}}</a>
    </div>
</div>
