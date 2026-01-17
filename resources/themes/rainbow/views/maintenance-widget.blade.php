@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'maintenance', 'value' => 'maintenance'])
@endif

<div class="card">
    <div class="card-body">
        {{ $maintenanceMessage }}
    </div>
</div>
