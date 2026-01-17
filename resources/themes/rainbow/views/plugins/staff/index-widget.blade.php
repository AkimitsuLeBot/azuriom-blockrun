@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'staff', 'value' => 'staff'])
@endif

<div @include('elements.string-aos')>
@if($staffs->count() >= 1)
        @php
            $alignment = match ($settings['alignment'] ?? 'start') {
                'center' => 'center',
                'end' => 'end',
                default => 'start',
            };
            $column = isset($settings['column']) ? intdiv(12,(int) $settings['column']) : intdiv(12,1)
        @endphp

        @switch($settings['style'] ?? '1')
            @case('1')
                @include('staff::styles._slider' , ['title' => 'h2'])
                @break
            @case('2')
                @include('staff::styles._list' , ['title' => 'h2'])
                @break
            @case('3')
                @include('staff::styles._rounded' , ['title' => 'h2'])
                @break
            @case('4')
                @include('staff::styles._tags-list' , ['title' => 'h3'])
                @break
            @case('5')
                @include('staff::styles._tags-rounded' , ['title' => 'h3'])
                @break
            @case('6')
                @include('staff::styles._tags-slider' , ['title' => 'h3'])
                @break
        @endswitch
</div>
@else
    <div class="alert alert-warning" role="alert">
        {{ trans('staff::messages.staff-empty') }}
    </div>
@endif
