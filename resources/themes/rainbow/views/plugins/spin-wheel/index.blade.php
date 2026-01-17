@extends('layouts.app')

@section('title', trans('spin-wheel::admin.plugin.name'))

@section('content')

    @php($page_current = 'spin_wheel')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('spin_wheel.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page pb-5" id="{{$page_current}}">
            <div class="row" onresize="resizeCanvas()">
                <div class="col-md-6">
                    @include('plugins.spin-wheel.spin')
                </div>
                <div class="col-md-6">
                    @include('plugins.spin-wheel.rewards')
                    @include('plugins.spin-wheel.lasts_players')
                </div>
            </div>
        </div>
    @endif

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ plugin_asset('spin-wheel', 'css/style.css') }}">
    <style>
        canvas {
            max-width: 100%;
        }

        .spin_wheel canvas {
            max-width: 434px;
        }
    </style>
@endpush

@push("scripts")
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="{{ plugin_asset('spin-wheel', 'js/Winwheel.js') }}"></script>
    <script src="{{ plugin_asset('spin-wheel', 'js/script.js') }}"></script>
@endpush

@push('footer-scripts')

    @if(setting('spin.freeSpin') && $freeSpin == "true")
        <script>let spinPrice = "{{ trans('spin-wheel::messages.wheel.modal.freePlay') }}";</script>
    @else
        <script>let spinPrice = "{{ trans('spin-wheel::messages.wheel.modal.price') . ' ' . setting('spin.price', 0) . ' ' . money_name()}}";</script>
    @endif

    <script>
        let rawardsApi = "{{ route('spin-wheel.rewards') }}";
        let play = "{{ route('spin-wheel.play') }}";

        let TextTitle = "{{ trans('spin-wheel::messages.wheel.modal.validation') }}";
        let TextConfirm = "{{ trans('spin-wheel::messages.wheel.modal.spin') }}"
        let TextCancel = "{{ trans('spin-wheel::messages.wheel.modal.cancel') }}";

        let theWheel;
        let wheelSpinning;
        let tcanvas = document.getElementById('canvas');
        let tx = tcanvas.getContext('2d');
        let xhr = new XMLHttpRequest();


        function drawTriangle() {
            tx.strokeStyle = '#fff';
            tx.fillStyle = '#4ed4c6';
            tx.lineWidth = 2;
            tx.beginPath();
            tx.moveTo(200, 2);
            tx.lineTo(234, 2);
            tx.lineTo(217, 30);
            tx.lineTo(201, 2);
            tx.stroke();
            tx.fill();
        }

        if (tx) {
            drawTriangle();
        }

        xhr.open('GET', rawardsApi);
        xhr.send();

        xhr.onload = function() {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText} Ask help here : https://discord.com/invite/upPHs3WsUt`);
            } else {
                let data = JSON.parse(xhr.response);
                console.log(data)
                theWheel = new Winwheel({
                    'numSegments': data.length,
                    'outerRadius': 212,
                    'textFontSize': 28,
                    'segments': data,
                    'animation': {
                        'type': 'spinToStop',
                        'duration': 5,
                        'spins': 8,
                        'callbackFinished': alertPrize,
                        "callbackAfter": 'drawTriangle()'
                    }
                });

                drawTriangle();
                wheelSpinning = false;
            }
        };

        function alertPrize(indicatedSegment) {
            Swal.fire({
                title: indicatedSegment.text,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok !'
            }).then((result) => {
                resetSpin();
                window.location = window.location
            });
        }

        function startSpin(prize) {
            if (wheelSpinning == false) {
                theWheel.animation.stopAngle = theWheel.getRandomForSegment(prize);
                document.getElementById('spin').setAttribute('disabled', '');
                theWheel.startAnimation();
                wheelSpinning = true;
            }
        }

        function resetSpin() {
            document.getElementById('spin').removeAttribute('disabled');
            theWheel.stopAnimation(false);
            theWheel.rotationAngle = 0;
            theWheel.draw();
            drawTriangle();
            wheelSpinning = false;
        }
    </script>
@endpush
