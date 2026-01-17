<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}  @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}"
             class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                @includeIf('admin.pattern.components-builder',['page'=> 'wiki_index' ])
            @endif
            @if($k === 'show')
                @includeIf('admin.pattern.components-builder',['page'=> 'wiki_show' ])
            @endif
        </div>
    @endforeach
</div>
