<div class="js-detect-first-background-builder detect-first-background-builder border rounded mb-4"
     data-page="{{$page}}">
    @if(theme_config($page.'.background'))
        @includeIf('admin.components.background', ['background' => key(theme_config($page.'.background')),
                    'id_background' => theme_config($page.'.background.'.key(theme_config($page.'.background')))])
    @endif
</div>

<div class="sortable row js-detect-first-row-builder detect-first-row-builder sortable-list border rounded pb-5"
     data-page="{{$page}}">
    @foreach(theme_config($page.'.row') ?? [] as $row => $value)
        <div class="{{ $value['col-lg'] ??  'col-lg-12' }} js-detect-col  {{isset($value['separator']) ?: 'sortable-parent'}}">
            @if(isset($value['col-lg']))
                <div
                    class="row g-0 js-detect-justifyContent {{isset($value['justify-content']) && $value['justify-content'] ? 'justify-content-'.$value['justify-content']:'justify-content-center'}} js-detect-row-builder js-detect-sortable">
                    @include('admin.pattern.row', ['row' => $row])

                    @foreach($value as $r => $v)
                        @if($r !== 'col-lg' && $r !== 'justify-content' && $r !== 'separator' && $r !== 'separator-bg' && $r !== 'background-color')
                            @foreach( $v as $widget => $w)
                                @foreach($w as $component => $config)
                                    @include('admin.components.components', ['component' => $component, 'id_widget' => $widget ,'config' => $config, 'row' => $row, 'page' => $page])
                                @endforeach
                            @endforeach
                        @endif
                    @endforeach
                </div>
            @endif

            @if(isset($value['separator']))
                <div class="row g-0 js-detect-justifyContent js-detect-row-builder js-detect-separator-builder">
                    @include('admin.pattern.separator', ['row' => $row])
                </div>
            @endif

            @if(isset($value['separator-bg']))
                <div class="row g-0 js-detect-justifyContent js-detect-row-builder js-detect-sortable">
                    @include('admin.pattern.separator-bg', ['row' => $row])
                    @foreach($value as $r => $v)
                        @if($r !== 'col-lg' && $r !== 'justify-content' && $r !== 'separator' && $r !== 'separator-bg' && $r !== 'background-color')
                            @foreach( $v as $widget => $w)
                                @foreach($w as $component => $config)
                                    @include('admin.components.components', ['component' => $component, 'id_widget' => $widget ,'config' => $config, 'row' => $row, 'page' => $page])
                                @endforeach
                            @endforeach
                        @endif
                    @endforeach
                </div>
            @endif

            @if(isset($value['background-color']))
                <div class="row g-0 js-detect-justifyContent js-detect-row-builder js-detect-sortable">
                    @include('admin.pattern.separator-color', ['row' => $row])
                    @foreach($value as $r => $v)
                        @if($r !== 'col-lg' && $r !== 'justify-content' && $r !== 'separator' && $r !== 'separator-bg' && $r !== 'background-color')
                            @foreach( $v as $widget => $w)
                                @foreach($w as $component => $config)
                                    @include('admin.components.components', ['component' => $component, 'id_widget' => $widget ,'config' => $config, 'row' => $row, 'page' => $page])
                                @endforeach
                            @endforeach
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    @endforeach
</div>
