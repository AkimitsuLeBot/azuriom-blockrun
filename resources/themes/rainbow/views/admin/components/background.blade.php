@switch($background)

    @case('backgroundSlider')
    @include('admin.components.background.backgroundSlider.backgroundSlider')
    @break

    @case('backgroundServerIp')
    @include('admin.components.background.backgroundServerIp.backgroundServerIp')
    @break

    @case('background')
    @include('admin.components.background.background.background')
    @break

    @case('backgroundLogo')
    @include('admin.components.background.backgroundLogo.backgroundLogo')
    @break


@endswitch
