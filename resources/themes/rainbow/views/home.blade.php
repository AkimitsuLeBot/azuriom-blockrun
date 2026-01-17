@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    @php($page_current = 'home')
    @if(theme_config($page_current.'.background') && theme_config($page_current.'.background.'.key(theme_config($page_current.'.background'))))
        @includeIf('components.backgrounds',['key'=> key(theme_config($page_current.'.background')),
                                             'id' => theme_config($page_current.'.background.'.key(theme_config($page_current.'.background')))])
    @else
        @if(!empty(theme_config('sliders')[0]))
            @includeIf('block.backgroundSlider.backgroundSlider-old')
        @else
            @includeIf('block.background-top')
        @endif
    @endif

    @if(!theme_config('home.items') && theme_config($page_current.'.row'))
        <div id="home" class="position-relative">

            @if(isset($message) && !empty((string) $message))
                <div class="container">
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            {!! nl2br(e($message)) !!}
                        </div>
                    </div>
                </div>
            @endif
            @include('components.components-builder',['page_current'=> $page_current])
        </div>
    @else
        <div id="home" class="position-relative">
            <div class="container content main-page">
                @if(isset($message) && !empty((string) $message))
                    <div class="card mb-4 rounded-0">
                        <div class="card-body">
                            {!! nl2br($message) !!}
                        </div>
                    </div>
                @endif
                @include('elements.session-alerts')
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        @includeIf('widget.articles.articles')
                    </div>
                    <div class="col-lg-4">
                        @guest
                            @include('widget.login.login_home')
                        @endguest
                        @includeIf('widget.discord.discord')
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
