@if(url()->route('litebans.index')  == url()->current())
    <div class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
        <ul class="table--custom mt-5">
            <li class="table-header">
                <div class="col px-3 col-2">{{ trans('litebans::messages.username') }}</div>
                <div class="col px-3 col-2">{{ trans('litebans::messages.staff_ban') }}</div>
                <div class="col px-3 col-4">{{ trans('litebans::messages.reason') }}</div>
                <div class="col px-3 col-2">{{ trans('messages.fields.date') }}</div>
                <div class="col px-3 col-2">{{ trans('litebans::messages.expires_at') }}</div>
            </li>
            @forelse ($bans as $item)
                <li class="table-row">
                    <div class="col col-2">
                        <a href="{{ route('litebans.history', $item->name) }}">
                            <img src="https://mc-heads.net/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="col col-2">

                        <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                            {{ $item->banned_by_name }}
                        </a>
                    </div>
                    <div class="col px-3 col-4">{{ $item->reason }}</div>
                    <div class="col px-3 col-2">{{ format_date($item->time) }}</div>
                    @if(isset($item->removed_by_name))
                        <div class="col px-3 col-2">{{ trans('litebans::messages.unbanned') }}</div>
                    @elseif($item->until === null)
                        <div class="col px-3 col-2">{{ trans('litebans::messages.permanent') }}</div>
                    @elseif($item->until->isPast())
                        <div class="col px-3 col-2">{{ trans('litebans::messages.expired') }}</div>
                    @else
                        <div class="col px-3 col-2">{{ format_date($item->until) }}</div>
                    @endif
                </li>
            @empty
                <li class="table-row">
                    <div class="col px-3 col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                </li>
            @endforelse
        </ul>
    </div>

    {{ $bans->withQueryString()->links() }}
@endif
@if(url()->route('litebans.kick') == url()->current())
    <div
        class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
        <ul class="table--custom mt-5">
            <li class="table-header">
                <div class="col col-3">{{ trans('litebans::messages.username') }}</div>
                <div class="col col-3">{{ trans('litebans::messages.staff_kick') }}</div>
                <div class="col col-4">{{ trans('litebans::messages.reason') }}</div>
                <div class="col col-2">{{ trans('messages.fields.date') }}</div>
            </li>
            @forelse ($kicks as $item)
                <li class="table-row">
                    <div class="col col-3">
                        <a href="{{ route('litebans.history', $item->name) }}">
                            <img src="https://mc-heads.net/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="col col-3">
                        <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                            {{ $item->banned_by_name }}
                        </a>
                    </div>
                    <div class="col col-4">{{ $item->reason }}</div>
                    <div class="col col-2">{{ format_date($item->time) }}</div>
                </li>
            @empty
                <li class="table-row">
                    <div class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                </li>
            @endforelse
        </ul>
    </div>
    {{ $kicks->withQueryString()->links() }}
@endif

@if(url()->route('litebans.mute') == url()->current())
    <div
        class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
        <ul class="table--custom mt-5">
            <li class="table-header">
                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                <div class="col col-2">{{ trans('litebans::messages.staff_mute') }}</div>
                <div class="col col-4">{{ trans('litebans::messages.reason') }}</div>
                <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
            </li>
            @forelse ($mutes as $item)
                <li class="table-row">
                    <div class="col col-2">
                        <a href="{{ route('litebans.history', $item->name) }}">
                            <img src="https://mc-heads.net/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="col col-2">

                        <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                            {{ $item->banned_by_name }}
                        </a>
                    </div>
                    <div class="col col-4">{{ $item->reason }}</div>
                    <div class="col col-2">{{ format_date($item->time) }}</div>
                    @if(isset($item->removed_by_name))
                        <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                    @elseif($item->until === null)
                        <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                    @elseif($item->until->isPast())
                        <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                    @else
                        <div class="col col-2">{{ format_date($item->until) }}</div>
                    @endif
                </li>
            @empty
                <li class="table-row">
                    <div class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                </li>
            @endforelse
        </ul>
    </div>
    {{ $mutes->withQueryString()->links() }}
@endif

@if(url()->route('litebans.warn') == url()->current())
    <div
        class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
        <ul class="table--custom mt-5">
            <li class="table-header">
                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                <div class="col col-2">{{ trans('litebans::messages.staff_warn') }}</div>
                <div class="col col-4">{{ trans('litebans::messages.reason') }}</div>
                <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
            </li>
            @forelse ($warns as $item)
                <li class="table-row">
                    <div class="col col-2">
                        <a href="{{ route('litebans.history', $item->name) }}">
                            <img src="https://mc-heads.net/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="col col-2">

                        <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                            {{ $item->banned_by_name }}
                        </a>
                    </div>
                    <div class="col col-4">{{ $item->reason }}</div>
                    <div class="col col-2">{{ format_date($item->time) }}</div>
                    @if(isset($item->removed_by_name))
                        <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                    @elseif($item->until === null)
                        <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                    @elseif($item->until->isPast())
                        <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                    @else
                        <div class="col col-2">{{ format_date($item->until) }}</div>
                    @endif
                </li>
            @empty
                <li class="table-row">
                    <div class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                </li>
            @endforelse
        </ul>
    </div>

    {{ $warns->withQueryString()->links() }}
@endif
@php
    $url = explode('/',url()->current());

    $name = end($url);
@endphp
@if(url()->route('litebans.history', $name) == url()->current())
    <div class="row" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
        <div class="col-md-3">
            <div class="user-info border rounded mt-4 d-flex flex-column align-items-center p-3">
                <h4 class="text-center mb-3">
                    {{ trans('litebans::messages.history') }}
                </h4>

                <img src="https://mc-heads.net/avatar/{{ $name }}/100" alt="{{ $name }}"
                     style="max-width: 140px;"
                     class="rounded">

                <h5 class="text-center">{{ $name }}</h5>

                <div class="buttons">
                    <div class="btn-bans btn btn-outline-primary btn-block" data-bs-toggle="collapse"
                         data-bs-target="#bans"
                         aria-expanded="true"
                         aria-controls="bans">{{ trans('litebans::messages.navigation.bans') }}
                        ({{ $bans->count() }})
                    </div>
                    <div class="btn-mutes btn btn-outline-primary btn-block" data-bs-toggle="collapse"
                         data-bs-target="#mutes"
                         aria-expanded="true"
                         aria-controls="mutes">{{ trans('litebans::messages.navigation.mutes') }}
                        ({{ $mutes->count() }})
                    </div>
                    <div class="btn-kicks btn btn-outline-primary btn-block" data-bs-toggle="collapse"
                         data-bs-target="#kicks"
                         aria-expanded="true"
                         aria-controls="kicks">{{ trans('litebans::messages.navigation.kicks') }}
                        ({{ $kicks->count() }})
                    </div>
                    <div class="btn-mutes btn btn-outline-primary btn-block" data-bs-toggle="collapse"
                         data-bs-target="#warns"
                         aria-expanded="true"
                         aria-controls="warns">{{ trans('litebans::messages.navigation.warns') }}
                        ({{ $warnings->count() }})
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9 parent">
            @if ($issued)
                <h3 class="mt-3 d-flex align-items-center">
                    {{ trans('litebans::messages.given_punishments') }}
                    <span class="badge bg-success ms-2 text-uppercase">
                    {{ trans('litebans::messages.staff') }}
                </span>
                </h3>
            @else
                <h3 class="mt-3">
                    {{ trans('litebans::messages.title') }}
                </h3>
            @endif
            <div class="bans collapse show" id="bans" data-bs-parent=".parent">
                <div class="table-responsive">
                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col col-1">{{ trans('messages.fields.type') }}</div>
                            @if ($issued)
                                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                            @else
                                <div class="col col-2">{{ trans('litebans::messages.staff_ban') }}</div>
                            @endif
                            <div class="col col-5">{{ trans('litebans::messages.reason') }}</div>
                            <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                            <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
                        </li>
                        @forelse ($bans as $item)
                            <li class="table-row">
                                <div class="col col-1 badge bg-danger text-uppercase" scope="row">Ban</div>
                                @if ($issued)
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->name }}/25"
                                             alt="{{ $item->name }}">
                                        {{ $item->name }}
                                    </div>
                                @else
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->banned_by_name }}/25"
                                             alt="{{ $item->banned_by_name }}">
                                        {{ $item->banned_by_name }}
                                    </div>
                                @endif
                                <div class="col col-5">{{ $item->reason }}</div>
                                <div class="col col-2">{{ format_date($item->time) }}</div>
                                @if(isset($item->removed_by_name))
                                    <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                                @elseif($item->until === null)
                                    <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                                @elseif($item->until->isPast())
                                    <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                                @else
                                    <div class="col col-2">{{ format_date($item->until) }}</div>
                                @endif
                            </li>
                        @empty
                            <li class="table-row">
                                <div
                                    class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                            </li>
                        @endforelse
                    </ul>
                </div>

                {{ $bans->withQueryString()->links() }}
            </div>

            <div class="mutes collapse" id="mutes" data-bs-parent=".parent">
                <div class="table-responsive">

                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col col-1">{{ trans('messages.fields.type') }}</div>
                            @if ($issued)
                                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                            @else
                                <div class="col col-2">{{ trans('litebans::messages.staff_mute') }}</div>
                            @endif
                            <div class="col col-5">{{ trans('litebans::messages.reason') }}</div>
                            <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                            <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
                        </li>
                        @forelse ($mutes as $item)
                            <li class="table-row">
                                <div class="col col-1 badge bg-warning text-uppercase" scope="row">Mute</div>
                                @if ($issued)
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->name }}/25"
                                             alt="{{ $item->name }}">
                                        {{ $item->name }}
                                    </div>
                                @else
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->banned_by_name }}/25"
                                             alt="{{ $item->banned_by_name }}">
                                        {{ $item->banned_by_name }}
                                    </div>
                                @endif
                                <div class="col col-5">{{ $item->reason }}</div>
                                <div class="col col-2">{{ format_date($item->time) }}</div>
                                @if(isset($item->removed_by_name))
                                    <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                                @elseif($item->until === null)
                                    <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                                @elseif($item->until->isPast())
                                    <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                                @else
                                    <div class="col col-2">{{ format_date($item->until) }}</div>
                                @endif
                            </li>
                        @empty
                            <li class="table-row">
                                <div
                                    class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                            </li>
                        @endforelse
                    </ul>
                </div>
                {{ $mutes->withQueryString()->links() }}
            </div>

            <div class="kicks collapse" id="kicks" data-bs-parent=".parent">
                <div class="table-responsive">
                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col col-1">{{ trans('messages.fields.type') }}</div>
                            @if ($issued)
                                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                            @else
                                <div class="col col-2">{{ trans('litebans::messages.staff_kick') }}</div>
                            @endif
                            <div class="col col-5">{{ trans('litebans::messages.reason') }}</div>
                            <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                            <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
                        </li>
                        @forelse ($kicks as $item)
                            <li class="table-row">
                                <div class="col col-1 badge bg-info text-uppercase" scope="row">Kick</div>
                                @if ($issued)
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->name }}/25"
                                             alt="{{ $item->name }}">
                                        {{ $item->name }}
                                    </div>
                                @else
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->banned_by_name }}/25"
                                             alt="{{ $item->banned_by_name }}">
                                        {{ $item->banned_by_name }}
                                    </div>
                                @endif
                                <div class="col col-5">{{ $item->reason }}</div>
                                <div class="col col-2">{{ format_date($item->time) }}</div>
                                @if(isset($item->removed_by_name))
                                    <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                                @elseif($item->until === null)
                                    <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                                @elseif($item->until->isPast())
                                    <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                                @else
                                    <div class="col col-2">{{ format_date($item->until) }}</div>
                                @endif
                            </li>
                        @empty
                            <li class="table-row">
                                <div
                                    class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                            </li>
                        @endforelse
                    </ul>
                </div>

                {{ $kicks->withQueryString()->links() }}
            </div>

            <div class="warns collapse" id="warns" data-bs-parent=".parent">
                <div class="table-responsive">

                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col col-1">{{ trans('messages.fields.type') }}</div>
                            @if ($issued)
                                <div class="col col-2">{{ trans('litebans::messages.username') }}</div>
                            @else
                                <div class="col col-2">{{ trans('litebans::messages.staff_warn') }}</div>
                            @endif
                            <div class="col col-5">{{ trans('litebans::messages.reason') }}</div>
                            <div class="col col-2">{{ trans('messages.fields.date') }}</div>
                            <div class="col col-2">{{ trans('litebans::messages.expires_at') }}</div>
                        </li>
                        @forelse ($warnings as $item)
                            <li class="table-row">
                                <div class="col col-1 badge bg-info text-uppercase" scope="row">Warn</div>
                                @if ($issued)
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->name }}/25"
                                             alt="{{ $item->name }}">
                                        {{ $item->name }}
                                    </div>
                                @else
                                    <div class="col col-2">
                                        <img src="https://mc-heads.net/avatar/{{ $item->banned_by_name }}/25"
                                             alt="{{ $item->banned_by_name }}">
                                        {{ $item->banned_by_name }}
                                    </div>
                                @endif
                                <div class="col col-5">{{ $item->reason }}</div>
                                <div class="col col-2">{{ format_date($item->time) }}</div>
                                @if(isset($item->removed_by_name))
                                    <div class="col col-2">{{ trans('litebans::messages.unbanned') }}</div>
                                @elseif($item->until === null)
                                    <div class="col col-2">{{ trans('litebans::messages.permanent') }}</div>
                                @elseif($item->until->isPast())
                                    <div class="col col-2">{{ trans('litebans::messages.expired') }}</div>
                                @else
                                    <div class="col col-2">{{ format_date($item->until) }}</div>
                                @endif
                            </li>
                        @empty
                            <li class="table-row">
                                <div
                                    class="col col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                            </li>
                        @endforelse
                    </ul>
                </div>

                {{ $warnings->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endif
