@include('wiki::partials._header', ['type'=>'wiki-show','title' => $page->category->name])

<div class="row" id="wiki" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki-show'])>
    <div class="col-md-3">
        @if(! $page->category->categories->isEmpty())
            <div class="list-group mb-3 gap-{{ isset($getItem) ? theme_config($getItem.'.spacePerCategory'):'0' }}"
                 role="tablist">
                @foreach($page->category->categories as $subCategory)
                    @can('view', $subCategory)
                        <a href="{{ route('wiki.show', [$subCategory]) }}" class="list-group-item">
                            <i class="{{ $subCategory->icon ?? 'bi bi-book' }}"></i> {{ $subCategory->name }}
                        </a>
                    @endcan
                @endforeach
            </div>
        @endif

        <div class="list-group mb-3" role="tablist">
            @foreach($page->category->pages as $catPage)
                <a href="{{ route('wiki.pages.show', [$page->category, $catPage]) }}"
                   class="list-group-item @if($page->is($catPage)) active @endif"
                   title="{{ $catPage->title }}"
                   onclick="selectWikiPage(this)"
                   data-bs-toggle="tab" data-bs-target="#page-{{ $catPage->id }}" role="tab"
                   aria-controls="page-{{ $catPage->id }}" aria-selected="{{ $page->is($catPage) ? 'true' : 'false' }}">
                    {{ $catPage->title }}
                </a>
            @endforeach
        </div>

        @if($page->category->parent !== null)
            <a href="{{ route('wiki.show', $page->category->parent) }}" class="btn btn-secondary mb-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <a href="#wiki" class="btn btn-secondary mb-3">
                <i class="bi bi-arrow-up"></i> 
            </a>
        @else
            <a href="{{ route('wiki.index') }}" class="btn btn-secondary mb-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <a href="#wiki" class="btn btn-secondary mb-3">
                <i class="bi bi-arrow-up"></i> 
            </a>
        @endif
    </div>

    <div class="col-md-9 tab-content">
        @foreach($page->category->pages as $catPage)
            <div class="tab-pane fade @if($page->is($catPage)) show active @endif" id="page-{{ $catPage->id }}"
                 role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card">
                    <div class="card-body">
                        {!! $catPage->content !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
