@extends('layouts.app')

@section('title', '')

@section('content')

    @php($page_current = 'jirai_messages_edit')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('jirai.items.messages-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
    <div class="container content main-page" id="jirai">
        @include('elements.session-alerts')
        <div class="card shadow mb-4"  @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'messages-edit'])>
            <div class="card-body">
                <form action="{{ route('jirai.messages.update', $message) }}" method="POST" >

                    @method('PUT')
                    @csrf

                    @error('message')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <div class="form-group col-md-12">
                        <textarea name="message" data-initialValue="{{ $message->message }}" id="markdownEditor"></textarea>
                    </div>

                    <input type="hidden" name="jirai_issue_id" value="{{ $message->jirai_issue_id }}">

                    <input type="hidden" name="message" value="{{ $message->message }}">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
                    </button>

                    <a href="{{ route('jirai.messages.destroy', $message) }}" class="btn btn-danger" data-confirm="delete">
                        <i class="bi bi-trash-fill"></i> {{ trans('messages.actions.delete') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
    @endif

    @include('jirai::delete-modal')
    @include('jirai::editor')

@endsection
