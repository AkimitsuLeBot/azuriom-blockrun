@extends('layouts.app')

@section('title', trans('positivity::messages.accounts.list'))

<?php
$page = isset(request()->page) ? request()->page - 1 : 0;
$perPage = setting('positivity.per_page');
$accounts = \Azuriom\Plugin\Positivity\Models\Accounts::on("positivity")->limit($perPage)->offset($page * $perPage)->get();
$pagination = \Azuriom\Plugin\Positivity\Models\Accounts::on("positivity")->paginate($perPage);
?>

@section('content')
    @php($page_current = 'positivity')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('skinApi.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include("positivity::header")
            <div id="positivity-accounts" @include('elements.string-aos')>
                <h3>{{ trans('positivity::messages.accounts.list') }}</h3>
                <div class="table-responsive">
                    @include('positivity::accounts._table')
                </div>
            </div>
        </div>
    @endif
@endsection
