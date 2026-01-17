<div class="container content main-page" id="{{$page_current}}">
    @include('elements.session-alerts')
    @php
        $separators = [];
        foreach (theme_config($page_current.'.row') ?? [] as $key => $value){
            if (isset($value['separator'])){
                    $separators[] = [$key => $value['separator']];
            }
        }
        $endSeparator = end($separators);
    @endphp

    <section class="row">
        @foreach(theme_config($page_current.'.row') ?? [] as $key => $value)

            @foreach($separators as $sKey => $sValue)
                @if(key($sValue) == 1 && $key == 1)
                    @if(array_values($sValue)[0]['image'])
                        <div class="section-separator-bottom-start position-relative"
                             style="margin-top: -{{array_values($sValue)[0]['size']}}px; height: {{array_values($sValue)[0]['size']}}px">
                            @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                        </div>
                    @endif
                @endif
            @endforeach

            @if($key != '{row}' && isset($value['col-lg']) && $value['col-lg'])
                @foreach($separators as $sKey => $sValue)
                    @php($sCount = key($sValue) + 1)
                    @if($sCount == $key)
                        @if(array_values($sValue)[0]['image'])
                            <div class="section-separator-top"
                                 style="height: {{array_values($sValue)[0]['size']}}px">
                                @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                            </div>
                        @endif
                    @endif
                @endforeach

                <div class="{{ $value['col-lg'] ??  'col-lg-12' }} position-relative">
                    <div
                        class="row {{isset($value['justify-content']) && $value['justify-content'] ? 'justify-content-'.$value['justify-content']:''}}">
                        @if(isset($value['widget']))
                            @foreach($value['widget'] as $widget => $w)
                                <div class="{{array_values($w)[0]['col-lg']}}">
                                    @includeIf('components.components',['key'=> key($w), 'row' => $key, 'id' => $widget, 'page_current' => $page_current])
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                @foreach($separators as $sKey => $sValue)
                    @php( $sCountBottom = key($sValue) - 1)
                    @if($sCountBottom == $key)
                        @if(array_values($sValue)[0]['image'])
                            <div class="section-separator-bottom"
                                 style="height: {{array_values($sValue)[0]['size']}}px">
                                @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                            </div>
                        @endif
                    @endif
                @endforeach
            @endif

            @if(isset($value['separator-bg']))
                <div class="col-lg-12 position-relative section-separator-bg">
                    @foreach($separators as $sKey => $sValue)
                        @php($sCount = key($sValue) + 1)
                        @if($sCount == $key)
                            @if(array_values($sValue)[0]['image'])
                                <div class="section-separator-top"
                                     style="height: {{array_values($sValue)[0]['size']}}px">
                                    @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                                </div>
                            @endif
                        @endif
                    @endforeach

                    @if($value['separator-bg'])
                        <img src="{{image_url($value['separator-bg'])}}" class="section-separator-bg-image" alt="">
                    @endif
                    <div class="row">
                        @if(isset($value['widget']))
                            @foreach($value['widget'] as $widget => $w)
                                <div class="{{array_values($w)[0]['col-lg']}}">
                                    @includeIf('components.components',['key'=> key($w), 'row' => $key, 'id' => $widget, 'page_current' => $page_current])
                                </div>
                            @endforeach
                        @endif
                    </div>

                    @foreach($separators as $sKey => $sValue)
                        @php($sCount = key($sValue) - 1)
                        @if($sCount == $key)
                            @php($isSeparator = 1)
                            @if(array_values($sValue)[0]['image'])
                                <div class="section-separator-bottom"
                                     style="height: {{array_values($sValue)[0]['size']}}px">
                                    @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>

                @if(!isset($isSeparator))
                    <div class="mb-5"></div>
                @endif
            @endif



            @if(isset($value['background-color']))
                <div class="col-lg-12 position-relative section-separator-color">
                    @php($heightTopBackground = 48)
                    @php($heightBottomBackground = 48)

                    @foreach($separators as $sKey => $sValue)
                        @php($sCount = key($sValue) + 1)
                        @php( $sCountBottom = key($sValue) - 1)

                        @if($sCountBottom == $key)
                            @if(array_values($sValue)[0]['image'])
                                @php($heightBottomBackground += array_values($sValue)[0]['size'])
                            @endif
                        @endif

                        @if($sCount == $key)
                            @if(array_values($sValue)[0]['image'])
                                @php($heightTopBackground += array_values($sValue)[0]['size'])
                                <div class="section-separator-top"
                                     style="height: {{array_values($sValue)[0]['size']}}px">
                                    @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                                </div>
                            @endif
                        @endif
                    @endforeach

                    @php($totalHeight = 0)
                    @if($heightTopBackground >= 49 && $heightBottomBackground >= 49)
                        @php($totalHeight = $heightTopBackground + $heightBottomBackground)
                    @elseif($heightTopBackground >= 49)
                        @php($totalHeight = $heightTopBackground)
                    @else
                        @php($totalHeight = $heightBottomBackground)
                    @endif
                    <div class="section-background-color"
                         style="
                             background-color: {{$value['background-color'] !== '#000000' ? $value['background-color'] :'transparent'}};
                             height: 100%";
                    ></div>
                    <div class="row">
                        @if(isset($value['widget']))
                            @foreach($value['widget'] as $widget => $w)
                                <div class="{{array_values($w)[0]['col-lg']}}">
                                    @includeIf('components.components',['key'=> key($w), 'row' => $key, 'id' => $widget, 'page_current' => $page_current])
                                </div>
                            @endforeach
                        @endif
                    </div>

                    @foreach($separators as $sKey => $sValue)
                        @php($sCount = key($sValue) - 1)
                        @if($sCount == $key)
                            @php($isSeparator = 1)
                            @if(array_values($sValue)[0]['image'])
                                <div class="section-separator-bottom"
                                     style="height: {{array_values($sValue)[0]['size']}}px">
                                    @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>

                @if(!isset($isSeparator))
                    <div class="mb-5"></div>
                @endif
            @endif

            @if(isset($endSeparator) && !empty($endSeparator) && key($endSeparator) == count(theme_config($page_current.'.row')) && $key == count(theme_config($page_current.'.row')) )
                @if(array_values($sValue)[0]['image'])
                    <div class="section-separator-top-end position-relative"
                         style="height: {{array_values($sValue)[0]['size']}}px">
                        @include('components.separators', ['image' => array_values($sValue)[0]['image'], 'size' => array_values($sValue)[0]['size']])
                    </div>
                @endif
            @endif
        @endforeach
    </section>
</div>
