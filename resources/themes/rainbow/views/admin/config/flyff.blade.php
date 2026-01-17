<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.wiki.title')}}</h3>
</div>
<div class="card-body">
    {!! trans('theme::lang.config.info-eye') !!}  @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'flyff_accounts')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_accounts' ])
            @endif
            @if($k === 'flyff_resetPassword')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_resetPassword' ])
            @endif
            @if($k === 'flyff_guilds')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_guilds' ])
            @endif
            @if($k === 'flyff_guildsShow')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_guildsShow' ])
            @endif
            @if($k === 'flyff_guildSiege')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_guildSiege' ])
            @endif
            @if($k === 'flyff_guildSiegeShow')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_guildSiegeShow' ])
            @endif
            @if($k === 'flyff_characters')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_characters' ])
            @endif
            @if($k === 'flyff_characterShow')
                @includeIf('admin.pattern.components-builder',['page'=> 'flyff_characterShow' ])
            @endif
        </div>
    @endforeach
</div>
