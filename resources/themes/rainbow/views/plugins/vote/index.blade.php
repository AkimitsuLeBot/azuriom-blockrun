@extends('layouts.app')

@section('title', trans('vote::messages.title'))

@section('content')

    @php($page_current = 'vote')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('vote.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="vote">
            @include('elements.session-alerts')
            <div id="vote-alert"></div>

            @include('widget.banner.banner',['banner' => 'vote', 'value' => 'vote'])
            <div class="row">
                @include('plugins.vote.vote')
                @include('plugins.vote.podium')
                <div
                    class="col-md-6 {{display_rewards() ?'': 'offset-md-3'}}">
                    @include('plugins.vote.classement')
                </div>
                @if(display_rewards())
                    <div class="col-md-6">
                        @include('plugins.vote.recompenses')
                    </div>
                @endif
            </div>
        </div>
    @endif
@endsection


@push('scripts')
    @if($ipv6compatibility)
        <script src="https://ipv6-adapter.com/api/v1/api.js" async defer></script>
    @endif

    <script src="{{ plugin_asset('vote', 'js/vote.js') }}" defer></script>
    @auth
        <script>
            window.username  = '{{ $user->name }}';
        </script>
    @endauth
@endpush

@push('styles')
    <style>
        #vote-card .spinner-parent {
            display: none;
        }

        #vote-card.voting .spinner-parent {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(70, 70, 70, 0.6);
            z-index: 10;
        }
    </style>
@endpush
