@if(isset($getBanner))
    @include('widget.banner.banner-widget', ['changelogTitle' => $title])
@else
    @include('widget.banner.banner', ['banner' => 'changelog', 'value' => 'changelog', 'changelogTitle' => $title])
@endif

<div class="row" @include('elements.string-aos', ['pageAos' => 'changelog', 'itemAos'=>'changelog'])>
    <div class="col-md-3">
        @include('changelog::sidebar')
    </div>
    <div class="col-md-9">
        @forelse($updates as $update)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title mb-2">{{ $update->name }}</h2>

                    <p>
                            <span class="badge bg-primary me-1 small">
                                <i class="bi bi-folder-fill"></i> {{ $update->category->name }}
                            </span>
                        <span class="badge bg-primary me-1 small">
                                <i class="bi bi-calendar-week-fill"></i> {{ format_date($update->created_at) }}
                            </span>
                    </p>

                    {!! $update->description !!}
                </div>
            </div>
        @empty
            <div class="alert alert-warning" role="alert">
                {{ trans('changelog::messages.empty') }}
            </div>
        @endforelse
    </div>
</div>
