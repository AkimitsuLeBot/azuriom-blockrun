@extends('layouts.app')

@section('title', trans('faq::messages.title'))

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (!window.location.hash) {
                return;
            }

            const searchElement = document.getElementById(window.location.hash.substring(1))
            if (!searchElement) {
                return;
            }

            const button = searchElement.querySelector('[data-bs-target]');
            if (!button) {
                return;
            }

            const target = document.querySelector(button.getAttribute('data-bs-target'));
            const collapse = new bootstrap.Collapse(target, { toggle: false });
            collapse.show();
        })
    </script>
@endpush

@section('content')

    @php($page_current = 'faq')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('faq.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page">
            @include('elements.session-alerts')
            @include('plugins.faq.index-widget')
        </div>
    @endif
@endsection
