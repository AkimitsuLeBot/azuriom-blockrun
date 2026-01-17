@extends('layouts.app')

@section('title', trans('jirai::messages.title'))

@section('content')

    @php($page_current = 'jirai_changelogs_create')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('jirai.items.changelogs-create') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="jirai">
            @include('elements.session-alerts')
            <div
                class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'changelogs-create'])>
                <div class="card-body">
                    <form action="{{ route('jirai.changelogs.store') }}" method="POST">

                        @include('jirai::changelog._form')

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection
