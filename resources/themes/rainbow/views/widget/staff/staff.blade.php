@php
    $settings = collect(json_decode(Azuriom\Models\Setting::where('name', 'staff.settings')->first()->value, true, 512, JSON_THROW_ON_ERROR));
    $staffs =Azuriom\Plugin\Staff\Models\Staff::orderBy('position')->get();
@endphp
@if(isset($settings['style']))
    @push('scripts')
        <script defer data-cfasync="false" src="{{ plugin_asset('staff', 'js/glide.min.js') }} "></script>
        <script defer data-cfasync="false" src="{{ plugin_asset('staff', 'js/script.js') }} "></script>
    @endpush
@endif
@push('styles')
    @if(isset($settings['style']))
        <link href="{{ plugin_asset('staff', 'css/glide.core.min.css') }} " rel="stylesheet">
        <link href="{{ plugin_asset('staff', 'css/glide.theme.min.css') }} " rel="stylesheet">
    @endif
    <link href="{{ plugin_asset('staff', 'css/style.css') }} " rel="stylesheet">
@endpush
<article class="widget--staff mb-3" id="staff" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')
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
        @endswitch
    @else
        <div class="alert alert-warning" role="alert">
            {{ trans('staff::messages.staff-empty') }}
        </div>
    @endif
</article>
