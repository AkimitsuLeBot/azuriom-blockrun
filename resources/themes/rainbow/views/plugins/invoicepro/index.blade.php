@extends('layouts.app')

@section('title', trans('invoicepro::messages.invoice'))

@section('content')

    @php
        $notRequired = setting('invoicepro_force_required', 0) == 0
    @endphp

    @php($page_current = 'invoicepro')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('invoicepro.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        @include('plugins.invoicepro.index-widget')
    @endif
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelector('#invoicepro_country').addEventListener('change', async (event) => {
                const stateSelect = document.querySelector('#invoicepro_state');
                const state_spinner = document.querySelector('#state_spinner');
                stateSelect.setAttribute('disabled', '');
                state_spinner.classList.remove('d-none');
                const response = await axios.get('/invoicepro/'+event.target.value);
                while (stateSelect.firstChild && !stateSelect.firstChild.remove());

                response.data.forEach(element => {
                    let option = document.createElement("option");
                    option.text = element.name;
                    option.value = element.id;
                    stateSelect.appendChild(option);
                });
                stateSelect.removeAttribute('disabled')
                state_spinner.classList.add('d-none');
            });
        });
    </script>
@endpush
