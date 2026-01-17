@extends('layouts.app')

@section('title', trans('jirai::messages.title'))

@section('content')

    @php($page_current = 'jirai_changelogs_edit')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('jirai.items.changelogs-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="jirai">
            @include('elements.session-alerts')
            <div
                class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'changelogs-edit'])>
                <div class="card-body">
                    <form action="{{ route('jirai.changelogs.update', $changelog) }}" method="POST">
                        @method('PUT')

                        @include('jirai::changelog._form')

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                        </button>
                        <a href="{{ route('jirai.changelogs.destroy', $changelog) }}" class="btn btn-danger"
                           data-confirm="delete">
                            <i class="bi bi-trash-fill"></i> {{ trans('messages.actions.delete') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    @endif
    @include('jirai::delete-modal')
@endsection
