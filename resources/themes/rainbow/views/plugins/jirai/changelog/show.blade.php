@extends('layouts.app')

@section('title', trans('jirai::messages.title'))

@section('content')

    @php($page_current = 'jirai_changelogs_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('jirai.items.changelogs-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="jirai">
            @include('elements.session-alerts')
            <div
                class="card mt-5" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'changelogs-show'])>
                <div class="card-header">
                    <img class="rounded float-start me-4" src="{{ $changelog->user->getAvatar() }}"
                         alt="{{ $changelog->user->name }}" height="55">
                    <h1 class="card-title">{{ $changelog->description }}</h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>@lang('messages.posts.posted', ['user' => e($changelog->user->name), 'date' => format_date($changelog->created_at, true)])</span>
                        <div>
                            @can('jirai.changelog.post')
                                <a class="btn btn-danger"
                                   href="{{ route('jirai.changelogs.edit', $changelog->id) }}">{{ trans('jirai::messages.edit') }}</a>
                                <a class="btn btn-danger" href="{{ route('jirai.changelogs.destroy', $changelog->id) }}"
                                   data-confirm="delete">{{ trans('jirai::messages.delete') }}</a>
                            @endcan
                        </div>
                        </a>
                    </div>
                </div>
                <div class="card-body user-html-content mt-5">
                    {!! \Azuriom\Support\Markdown::parse($changelog->message) !!}
                </div>
            </div>
        </div>
    @endif
    @include('jirai::delete-modal')
@endsection
