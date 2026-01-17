@extends('layouts.app')

@section('title', 'CPS')

@section('content')

    @php($page_current = 'cps')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('cps.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container">
            @include('plugins.cps.index-widget')
        </div>
    @endif

@endsection

@push('styles')
    <style media="screen">
        .cps .clicBox {
            width: 100%;
            background-color: rgba(0,0,0,.1);
            border-radius: 3px;
            padding: 50px;
            text-align: center;
            user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            margin-bottom: 10px;
        }
        .cps .clicBox {
            cursor:pointer;
        }
        .cps .clicBox p {
            margin: 0;
            padding: 0;
        }
        .hide {
            display: none;
        }
    </style>
@endpush
@push('footer-scripts')
    <script>
        var nbclics = 0;
        var timer = 10;
        var interval;

        function updateClick() {
            nbclics++;
            document.getElementById("clicNumber").innerHTML = "{{ trans('cps::messages.numberOfClick') }} " + nbclics;
        }
        function count() {
            alert("CPS: " + nbclics / 10);
            document.getElementById('clicBox').innerHTML = "<p>{{ trans('cps::messages.stop') }}</p>";
            document.getElementById('cpsP').innerHTML = "<p>{{ trans('cps::messages.numberOfCPS') }} " + (nbclics / 10) + "</p>";
            clearInterval(interval);
            document.getElementById("clicStart").classList.toggle("hide");
            document.getElementById("clicBox").classList.toggle("hide");
            document.getElementById("timer").classList.add("hide");
        }
        function update() {
            if (timer > 0) {
                timer = timer - 1;
                document.getElementById("timer").innerHTML = "{{ trans('cps::messages.numberOfTime') }} " + timer;
            }
        }
        function start() {
            document.getElementById("clicStart").classList.toggle("hide");
            document.getElementById("timer").classList.remove("hide");
            document.getElementById("clicBox").classList.toggle("hide");
            document.getElementById('cpsP').innerHTML = "";
            setTimeout('count()', 10000);
            interval = setInterval('update()', 1000);
            timer = 10;
        }
    </script>
@endpush
