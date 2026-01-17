@extends('layouts.app')

@section('title', trans('skin-api::messages.title'))

@push('footer-scripts')
    <script>
        const skinInput = document.getElementById('skin');

        skinInput.addEventListener('change', function () {
            if (!skinInput.files || !skinInput.files[0]) {
                return;
            }

            const file = skinInput.files[0];

            if (file.name !== undefined && file.name !== '') {
                document.getElementById('skinLabel').innerText = file.name;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                const preview = document.getElementById('skinPreview');
                preview.src = e.currentTarget.result;
                preview.classList.remove('d-none');
            };

            reader.readAsDataURL(skinInput.files[0]);
        });
    </script>
@endpush

@section('content')

    @php($page_current = 'skinApi')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('skinApi.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="skin-api">
            @include('elements.session-alerts')
            @include('plugins.skin-api.index-widget')
        </div>
    @endif
@endsection
