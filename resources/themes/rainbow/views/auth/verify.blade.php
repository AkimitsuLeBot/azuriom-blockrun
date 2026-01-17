@extends('layouts.app')

@section('title', trans('auth.verify'))

@section('content')
    @php($page_current = 'verify')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--verify">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ trans('auth.verification.sent') }}
                                </div>
                            @endif

                            <p>{{ trans('auth.verification.check') }}</p>
                            <p>{{ trans('auth.verification.request') }}</p>

                            <form method="POST" action="{{ route('verification.resend') }}" class="d-grid">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.verification.resend') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
