@extends('layouts.app')

@section('title', $ticket->subject)

@include('elements.markdown-editor', [
    'imagesUploadUrl' => route('support.comments.attachments.pending', $pendingId),
    'autosaveId' => 'support_ticket_'.$ticket->id,
])

@section('content')

    @php($page_current = 'support_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('support.items.support-show') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="support">
            @include('elements.session-alerts')
            @include('plugins.support.tickets.show-widget')
        </div>
    @endif
@endsection
