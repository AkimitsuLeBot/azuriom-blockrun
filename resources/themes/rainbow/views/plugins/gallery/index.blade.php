@extends('layouts.app')

@section('title', trans('gallery::messages.title'))

@section('content')

    @php($page_current = 'gallery')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('galerie.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container pb-5">
        @include('plugins.gallery.index-widget')
        </div>
    @endif
@endsection
