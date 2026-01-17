<div class="row align-items-center">
    <div class="col-md-9">
        @if(isset($getBanner))
            @include('widget.banner.banner-widget',['category' => $title])
        @else
            @include('widget.banner.banner',['banner' => 'wiki', 'value' => $type,'category' => $title])
        @endif
    </div>

    <div class="col-md-3">
        <form class="mb-3" action="{{ route('wiki.search') }}" method="GET" role="search">
            <label class="visually-hidden" for="searchInput">
                {{ trans('messages.actions.search') }}
            </label>

            <div class="input-group">
                <input type="search" class="form-control" id="searchInput" name="q" value="{{ $search ?? '' }}" placeholder="{{ trans('messages.actions.search') }}" required>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>
