@extends('layouts.app')

@section('title', trans('messages.profile.delete.title'))

@section('content')

    @php($page_current = 'account_delete')
    @include('components.backgrounds-builder',['page_current'=> $page_current])
    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            @if(isset($getBanner))
                @include('widget.banner.banner-widget')
            @else
                @include('widget.banner.banner', ['banner' => 'account', 'value' => 'delete'])
            @endif
            <h1></h1>

            <div class="card">
                <div class="card-body">
                    <p>{{ trans('messages.profile.delete.info') }}</p>

                    @if($confirmDelete)
                        <form method="POST">
                            @csrf

                            <a class="btn btn-secondary" href="{{ route('profile.index') }}">
                                <i class="bi bi-arrow-left"></i> {{ trans('messages.actions.cancel') }}
                            </a>

                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-exclamation-triangle"></i> {{ trans('messages.actions.delete') }}
                            </button>
                        </form>
                    @else
                        <p>{{ trans('messages.profile.delete.email') }}</p>

                        <form method="POST" action="{{ route('profile.delete.send') }}">
                            @csrf

                            <a class="btn btn-secondary" href="{{ route('profile.index') }}">
                                <i class="bi bi-arrow-left"></i> {{ trans('messages.actions.cancel') }}
                            </a>

                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-check-lg"></i> {{ trans('messages.actions.continue') }}
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endif
@endsection
