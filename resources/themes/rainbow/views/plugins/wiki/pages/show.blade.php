@extends('layouts.app')

@section('title', $page->title)

@section('content')

    @php($page_current = 'wiki_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('wiki.items.wiki-show') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="wiki">
            @include('elements.session-alerts')
            @include('plugins.wiki.pages.show-widget')
        </div>
    @endif
@endsection

@push('scripts')
    <script>
        let currentTitle = '{{ $page->title }}';

        function selectWikiPage(element, replaceState = false) {
            const tab = bootstrap.Tab.getOrCreateInstance(element);
            tab.show();

            if (replaceState) {
                window.history.replaceState({}, '', element.href);
            } else {
                window.history.pushState({}, '', element.href);
            }

            document.title = document.title.replace(currentTitle, element.title);
            currentTitle = element.title;
        }

        window.onpopstate = function(e) {
            const target = document.querySelector('[href="' + e.target.location.href + '"]');

            if (target) {
                selectWikiPage(target, true);
            }
        };
    </script>
@endpush
