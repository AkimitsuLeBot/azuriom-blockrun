@extends('layouts.app')

@section('title', trans('litebans::messages.navigation.kicks'))

@section('content')

    @php($page_current = 'liteBans')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('liteBans.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> 'liteBans'])
    @else
        <div class="container content main-page" id="litebans">
            @include('elements.session-alerts')
            @include('litebans::elements.navbar')
            <div
                class="table-responsive" @include('elements.string-aos', ['pageAos' => 'liteBans', 'itemAos'=>'litebans'])>
                <ul class="table--custom mt-5">
                    <li class="table-header">
                        <div class="col px-3 col-3">{{ trans('litebans::messages.username') }}</div>
                        <div class="col px-3 col-3">{{ trans('litebans::messages.staff_kick') }}</div>
                        <div class="col px-3 col-4">{{ trans('litebans::messages.reason') }}</div>
                        <div class="col px-3 col-2">{{ trans('messages.fields.date') }}</div>
                    </li>
                    @forelse ($kicks as $item)
                        <li class="table-row">
                            <div class="col px-3 col-3">
                                <a href="{{ route('litebans.history', $item->name) }}">
                                    <img src="https://mc-heads.net/avatar/{{ $item->name }}/25" alt="{{ $item->name }}">
                                    {{ $item->name }}
                                </a>
                            </div>
                            <div class="col px-3 col-3">
                                <a href="{{ route('litebans.history.issued', $item->banned_by_name) }}">
                                    {{ $item->banned_by_name }}
                                </a>
                            </div>
                            <div class="col px-3 col-4">{{ $item->reason }}</div>
                            <div class="col px-3 col-2">{{ format_date($item->time) }}</div>
                        </li>
                    @empty
                        <li class="table-row">
                            <div class="col px-3 col-12">{{ trans('litebans::messages.no_punishments_found') }}</div>
                        </li>
                    @endforelse
                </ul>
            </div>

            {{ $kicks->withQueryString()->links() }}
        </div>
    @endif
@endsection
