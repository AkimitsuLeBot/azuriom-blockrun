<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.forum.title')}}</h3>
</div>
<div class="card-body">

    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_index' ])
            @endif
            @if($k === 'show')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_show' ])
            @endif
            @if($k === 'profileEdit')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_profileEdit' ])
            @endif
            @if($k === 'profileShow')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_profileShow' ])
            @endif
            @if($k === 'discussionsPostsEdit')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_discussionsPostsEdit' ])
            @endif
            @if($k === 'discussionsCreate')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_discussionsCreate' ])
            @endif
            @if($k === 'discussionsEdit')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_discussionsEdit' ])

            @endif
            @if($k === 'discussionsShow')
                @includeIf('admin.pattern.components-builder',['page'=> 'forum_discussionsShow' ])
            @endif
        </div>
    @endforeach
</div>
