<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.jirai.title')}}</h3>
</div>
<div class="card-body">
    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_index' ])
            @endif
            @if($k === 'changelogs_create')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_changelogs_create' ])
            @endif
            @if($k === 'changelogs_edit')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_changelogs_edit' ])
            @endif
            @if($k === 'changelogs_show')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_issues_create' ])
            @endif
            @if($k === 'issues_create')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_issues' ])
            @endif
            @if($k === 'issues_edit')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_issues_edit' ])
            @endif
            @if($k === 'issues_show')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_issues_show' ])
            @endif
            @if($k === 'messages')
                @includeIf('admin.pattern.components-builder',['page'=> 'jirai_messages_edit' ])
            @endif
        </div>
    @endforeach
</div>
