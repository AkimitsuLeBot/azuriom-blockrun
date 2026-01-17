<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.shop.title')}}</h3>
</div>
<div class="card-body">
    @foreach($multiple_page as $k => $v)
        <div id="collapse-{{$page_current}}-{{$k}}" class="accordion-collapse collapse @if($loop->index == 0) show @endif"
             aria-labelledby="heading-{{$page_current}}-{{$k}}" data-bs-parent="#accordion-theme">
            <h3 class="fw--bold text-secondary">Page {{$v['name']}}</h3>
            @if($k === 'index')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_index' ])
            @endif
            @if($k === 'cart')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_cart' ])
            @endif
            @if($k === 'offersSelect')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_offersSelect' ])
            @endif
            @if($k === 'offersBuy')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_offersBuy' ])
            @endif
            @if($k === 'payments')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_payments' ])
            @endif
            @if($k === 'shop_profile')
                @includeIf('admin.pattern.components-builder',['page'=> 'shop_profile' ])
            @endif
        </div>
    @endforeach
</div>
