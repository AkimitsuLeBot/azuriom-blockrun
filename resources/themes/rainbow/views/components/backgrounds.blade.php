@php
    $getItemBackground = 'background.'.$id.'.'.$key;

@endphp
@if(theme_config($getItemBackground.'.background.item.height'))
    <style>
        @media (min-width: 1199.98px) {
            .background--height-custom {
                height: {{theme_config($getItemBackground.'.background.item.height')}}vh !important;
            }
        }
    </style>
@endif
@switch($key)
    @case('backgroundSlider')
    @includeIf('block.backgroundSlider.backgroundSlider')
    @break

    @case('background')
    @includeIf('block.background')
    @break

    @case('backgroundServerIp')
    @includeIf('block.background-top')
    @break

    @case('backgroundLogo')
    @includeIf('block.background-logo')
    @break

@endswitch
