@foreach($datas as $category)
    @if(!$category->links->isEmpty())
        @if(isset($getBanner))
            @include('widget.banner.banner-widget')
        @else
            @include('widget.banner.banner',['banner' => 'gallery', 'value' => 'gallery'])
        @endif

        <div class="card mb-4" @include('elements.string-aos')>
            <div class="card-body text-center position-relative">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                        @foreach($category->links as $link)
                            <div class="col mb-3">
                                <img src="{{ $link->image->url() }}" class="img-small img-fluid rounded"
                                     alt="{{ $link->image->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
