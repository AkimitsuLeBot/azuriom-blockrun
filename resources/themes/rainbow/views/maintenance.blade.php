@extends('layouts.app')

@section('title', trans('messages.maintenance.title'))

@section('content')

    @php($page_current = 'maintenance')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="banner">
                        <div class="banner-title no-image">
                            <h1>{{ trans('messages.maintenance.title') }}</h1>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            {{ $maintenanceMessage }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
