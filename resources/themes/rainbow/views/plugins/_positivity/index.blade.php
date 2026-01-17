@extends('layouts.app')

@section('title', 'Stats')

@section('content')

    @php($page_current = 'positivity')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('positivity.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include("positivity::header")
            <div class="row" id="stats">
                <div class="col-12 py-3">
                    @if(app('request')->input('error') != null)
                        <div class="card">
                            <div class="card-body">
                                <p class="text-warning">{{ trans('positivity::messages.error.' . app('request')->input('error')) }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <label class="form-label" for="playername">{{ trans('messages.fields.name') }}</label>
                            <input type="text" class="form-control" id="playername" name="playername" required>
                        </div>
                        <div class="card-footer">
                            <a type="submit" value="submit request" class="btn btn-primary"
                               onclick="return checkValidation(document.getElementById('playername').value)">
                                {{ trans('messages.actions.continue') }}
                                <span role="status"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@push('scripts')
    <script>
        function checkValidation(name) {
            window.location.href = "{{ route('positivity.accounts.show', ['account' => 'UUID']) }}".replace('UUID', name);
            return false;
        }
    </script>
@endpush
