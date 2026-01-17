<div class="my-3">
    @if(isset($getItem))
        @include('widget.banner.banner-widget')
    @else
        <div class="banner">
            <div class="banner-title no-image">
                <h2>{{ trans('vote::messages.sections.top') }}</h2>
            </div>
        </div>
    @endif
    <div @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'classement'])>
        <div class="table-responsive">
            <ul class="table--custom">
                <li class="table-header">
                    <div class="col col-1 px-3 col-md-2">#</div>
                    <div
                        class="col px-3 {{isset($getItem) && isset(theme_config($getItem.'.index')[$loop->index]['name']) ?'col-6 col-md-4' :'col-8 col-md-7'}}">
                        {{ trans('messages.fields.name') }}
                    </div>
                    <div class="col px-3 col-3 col-md-3 text-center text-sm-start ">{{ trans('vote::messages.fields.votes') }}</div>
                    @if(isset($getItem) && isset(theme_config($getItem.'.index')[$loop->index]['name']))
                        <div class="col col-3 px-md-3 px-1 col-md-3">{{ trans('theme::lang.vote.reward') }}</div>
                    @endif
                </li>
                @foreach($votes as $id => $vote)
                    <li class="table-row">
                        <div class="col col-1 px-3 px-1 col-md-2" scope="row">{{ $id }}</div>
                        <div
                            class="col px-3  {{isset($getItem) && count(theme_config($getItem.'.index')) > 1 ?'col-6 col-md-4' :'col-8 col-md-7'}}">
                            @if(!isset($getItem))
                                <img src="{{$vote->user->getAvatar(40)}}" width="40" class="me-2"
                                     alt="{{ $vote->user->name }}">
                            @else
                                @if(!theme_config($getItem.'.hidden_skin'))
                                    <img src="{{$vote->user->getAvatar(40)}}" width="40" class="me-2" alt="{{ $vote->user->name }}">
                                @endif
                            @endif
                            {{ $vote->user->name }}
                        </div>
                        <div class="col col-3 col-md-3 px-3 text-center text-sm-start">{{ $vote->votes }}</div>
                        @if(isset($getItem) && count(theme_config($getItem.'.index')) > 1)
                            @if(isset($getItem) && isset(theme_config($getItem.'.index')[$loop->index]['name']))
                                <div class="col col-3 px-3 col-md-3">{{ theme_config($getItem.'.index')[$loop->index]['name'] ?? '' }}</div>

                            @else
                                <div class="col col-3 px-3 col-md-3"></div>
                            @endif
                        @endif
                    </li>
                @endforeach
                @auth
                    @php
                        $votesAllStartOfMonth = \Azuriom\Plugin\Vote\Models\Vote::select(['user_id', DB::raw('count(*) as count')])
                                                                    ->whereBetween('created_at', [now()->startOfMonth(), now()])
                                                                    ->groupBy('user_id')
                                                                    ->orderByDesc('count')
                                                                    ->get();

                        $users = \Azuriom\Models\User::findMany($votesAllStartOfMonth->pluck('user_id'))->keyBy('id');

                        $votesAllStartOfMonth->mapWithKeys(function ($vote, $position) use ($users) {
                                            return [
                                                $position + 1 => (object) [
                                                    'user' => $users->get($vote->user_id),
                                                    'votes' => $vote->count,
                                                ],
                                            ];
                                        });
                        $votePlayer = $votesAllStartOfMonth->where('user_id', auth()->id());
                    @endphp
                    @if(isset(array_keys($votePlayer->toArray())[0]) && array_keys($votePlayer->toArray())[0] > setting('vote.top-players-count', 10))
                        <li class="table-row mt-5">
                            <div class="col col-1 px-3 px-1 col-md-2"
                                 scope="row">
                                {{ array_keys($votePlayer->toArray())[0] }}
                                <i class="bi bi-arrow-up-short fs-3 text-success" style="vertical-align: sub"></i>
                            </div>
                            <div class="col px-3  {{isset($getItem) && count(theme_config($getItem.'.index')) > 1 ?'col-6 col-md-4' :'col-8 col-md-7'}}">
                                @if(!isset($getItem))
                                    <img src="{{$votePlayer->first()->user->getAvatar(40)}}" width="40" class="me-2"
                                         alt="{{ $votePlayer->first()->user->name }}">
                                @else
                                    @if(!theme_config($getItem.'.hidden_skin'))
                                        <img src="{{$votePlayer->first()->user->getAvatar(40)}}" width="40" class="me-2"
                                             alt="{{ $votePlayer->first()->user->name }}">
                                    @endif
                                @endif
                                {{ $votePlayer->first()->user->name }}
                            </div>
                            <div class="col col-3 col-md-3 px-3 text-center text-sm-start">{{ $votePlayer->first()->count }}</div>
                            @if(isset($getItem) && isset(theme_config($getItem.'.index')[$loop->index]['name']))
                                    <div class="col col-3 px-3 col-md-3"></div>
                            @endif
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</div>
