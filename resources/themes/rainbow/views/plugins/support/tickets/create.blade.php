@extends('layouts.app')

@section('title', trans('support::messages.tickets.open'))

@if($category->fields->isEmpty())
    @include('elements.markdown-editor', [
        'imagesUploadUrl' => route('support.comments.attachments.pending', $pendingId),
        'autosaveId' => 'support_ticket',
    ])
@endif

@section('content')

    @php($page_current = 'support_create')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('support.items.support-create') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="support">
            @include('elements.session-alerts')
            @include('plugins.support.tickets.create-widget')
        </div>
    @endif
@endsection
