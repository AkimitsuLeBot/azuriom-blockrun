<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.identification.title')}}</h3>
</div>
<div class="card-body">

    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'login')
                @includeIf('admin.pattern.components-builder',['page'=> 'login' ])
            @endif
            @if($k === 'register')
                @includeIf('admin.pattern.components-builder',['page'=> 'register' ])
            @endif
            @if($k === 'f2a')
                @includeIf('admin.pattern.components-builder',['page'=> 'f2a' ])
            @endif
            @if($k === 'passwordReset')
                @includeIf('admin.pattern.components-builder',['page'=> 'passwordReset' ])
            @endif
            @if($k === 'passwordEmail')
                @includeIf('admin.pattern.components-builder',['page'=> 'passwordEmail' ])
            @endif
            @if($k === 'passwordConfirm')
                @includeIf('admin.pattern.components-builder',['page'=> 'passwordConfirm' ])
            @endif
            @if($k === 'account')
                @includeIf('admin.pattern.components-builder',['page'=> 'account' ])
            @endif
            @if($k === 'accountF2a')
                @includeIf('admin.pattern.components-builder',['page'=> 'accountF2a' ])
            @endif
            @if($k === 'error')
                @includeIf('admin.pattern.components-builder',['page'=> 'error' ])
            @endif
            @if($k === 'maintenance')
                @includeIf('admin.pattern.components-builder',['page'=> 'maintenance' ])
            @endif
        </div>
    @endforeach
</div>
