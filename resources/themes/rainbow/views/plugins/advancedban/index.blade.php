@extends('layouts.app')

@section('title', trans('advancedban::messages.title'))

@section('content')

    @php($page_current = 'advancedBan')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page">
            @include('elements.session-alerts')

            @include('plugins.advancedban.index-widget')
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        window.addEventListener('load', function() {
            var links = document.querySelectorAll("img");

            links.forEach(function(element) {
                let name = element.getAttribute('data-name');
                if (name === null) return;

                element.setAttribute('src', 'https://crafthead.net/avatar/' + name + '/30');
            });
        })
    </script>
@endpush

