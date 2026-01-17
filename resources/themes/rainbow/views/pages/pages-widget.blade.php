@if(isset($getBanner))
    @include('widget.banner.banner-widget',['page' => $page])
@else
    @include('widget.banner.banner', ['banner' => 'pages', 'value' => 'page','page' => $page])
@endif
<div class="card shadow-sm" @include('elements.string-aos', ['pageAos' => 'pages', 'itemAos'=>'page'])>
    <div class="card-body">
        <div class="card-text user-html-content">
            {!! $page->content !!}
        </div>
    </div>
</div>
