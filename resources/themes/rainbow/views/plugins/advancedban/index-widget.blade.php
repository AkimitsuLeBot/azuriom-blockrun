@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'advancedBan', 'value' => 'advancedBan'])
@endif
<div @include('elements.string-aos', ['pageAos' => 'advancedBan', 'itemAos'=>'advancedBan'])>
    <div class="row">
        <div class="col">
            <form class="mb-3 float-end" action="{{ route('advancedban.index') }}" method="GET">
                <div class="mb-2">
                    <label for="searchInput" class="form-label sr-only">{{ trans('messages.actions.search') }}</label>

                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" name="q"
                               value="{{ request()->input('q') }}"
                               placeholder="{{ trans('messages.actions.search') }}">

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <ul class="table--custom">
            <li class="table-header">
                <div class="col px-3 col-1">{{ trans('messages.fields.type') }}</div>
                <div class="col px-3 col-2">{{ trans('advancedban::messages.username') }}</div>
                <div class="col px-3 col-2">{{ trans('advancedban::messages.reason') }}</div>
                <div class="col px-3 col-2">{{ trans('advancedban::messages.staff') }}</div>
                <div class="col px-3 col-2">{{ trans('messages.fields.date') }}</div>
                <div class="col px-3 col-2">{{ trans('advancedban::messages.expires_at') }}</div>
                <div class="col px-3 col-1">{{ trans('messages.fields.status') }}</div>
            </li>
            @forelse($allPunishments as $punishment)
                <li class="table-row">
                    <div class="col px-3 col-1" scope="row">{{ $punishment->punishmentType }}</div>
                    <div class="col px-3 col-2">
                        <img
                            src="https://crafthead.net/avatar/{{ $punishment->uuid ?? $punishment->name }}/30"> {{ $punishment->name }}
                    </div>
                    <div class="col px-3 col-2"
                         title="{{ $punishment->reason }}">{{ Str::limit($punishment->reason, 20) }}</div>
                    <div class="col px-3 col-2">
                        <img data-name="{{ $punishment->operator }}"
                             src="https://crafthead.net/avatar/8667ba71-b85a-4004-af54-457a9734eed7/30"> {{ $punishment->operator }}
                    </div>
                    <div
                        class="col px-3 col-2">{{ format_date(Carbon\Carbon::createFromTimestampMs($punishment->start)) }} <span
                            class="badge bg-info">{{ strftime('%H:%M', $punishment->start / 1000) }}</span>
                    </div>
                    <div class="col px-3 col-2">
                        @if($punishment->end != -1)
                            {{ format_date(Carbon\Carbon::createFromTimestampMs($punishment->end)) }}
                            <span class="badge bg-info">{{ strftime('%H:%M', $punishment->end / 1000) }}</span>
                        @else
                            N/A
                        @endif
                    </div>
                    <div class="col px-3 col-1">
                        @if ($punishments->contains($punishment) && time() > $punishment->end / 1000)
                            {{ trans('advancedban::messages.active') }}
                        @else
                            {{ trans('advancedban::messages.finished') }}
                        @endif
                    </div>
                </li>
            @empty
                <li class="table-row">
                    <div class="col px-3 col-0"
                         scope="row">{{ trans('advancedban::messages.no_punishments_found') }}</div>
                </li>
            @endforelse
        </ul>
    </div>
</div>

{{ $allPunishments->links() }}
