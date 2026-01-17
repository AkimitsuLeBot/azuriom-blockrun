@if(isset($getBanner))
    @include('widget.banner.banner-widget',['category' => $category->name])
@else
    @include('widget.banner.banner',['banner' => 'wiki', 'value' => 'wiki-show','category' => $category->name])
@endif

<div class="row" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki-show'])>
    <div class="col-md-3">
        <div class="list-group mb-3" role="tablist">
            @foreach($category->pages as $count => $page)
                <a href="#page{{ $page->id }}" class="list-group-item @if($count === 0) active @endif"
                   data-bs-toggle="tab" role="tab" aria-controls="page{{ $page->id }}"
                   aria-selected="{{ $count === 0 ? 'true' : 'false' }}">
                    {{ $page->title }}
                </a>
            @endforeach
        </div>

        <a href="{{ route('wiki.index') }}" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left"></i>
        </a>
        <a href="#wiki" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-up"></i> 
        </a>
    </div>

    <div class="col-md-9 tab-content">
        @foreach($category->pages as $count => $page)
            <div class="tab-pane fade @if($count === 0) show active @endif" id="page{{ $page->id }}" role="tabpanel"
                 aria-labelledby="nav-home-tab">
                <div class="card">
                    <div class="card-body">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
