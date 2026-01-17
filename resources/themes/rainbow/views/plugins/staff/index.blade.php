@extends('layouts.app')

@section('title', 'Staff')

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

@section('content')

    @php($page_current = 'staff')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('staff.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page mt-5" id="staff">
            @include('elements.session-alerts')
            @include('plugins.staff.index-widget')
        </div>
    @endif
@endsection
