@extends('layouts.app')

@section('title', setting("tebex.shop.title", trans("tebex::messages.shop")))

@section('content')



    @php($page_current = 'tebex')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('tebex.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else

        <div class="container pb-5" id="{{$page_current}}">
            <div class="row">
                <div class="col-md-9">
                    @include('plugins.tebex.package')
                </div>
                <div class="col-md-3">
                    @include('plugins.tebex.category')
                </div>
            </div>
        </div>

    @endif

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @guest
        <script>
            var pseudo = ""
        </script>
    @else
        <script>
            var pseudo = "{{ Auth::user()->name }}"
        </script>
    @endguest

    <script>
        var api = "{{ route('tebex.api.buy') }}";

        function openInNewTab(url) {
            window.open(url, '_blank').focus();
        }

        function openProductModal(product_id) {

            Swal.fire({
                title: "{{ trans('tebex::messages.modal.mc_pseudo') }}",
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off',
                    min: 3,
                },
                inputPlaceholder: 'Steve',
                showCancelButton: true,
                reverseButtons: true,
                inputValue: pseudo,
                confirmButtonText: "{{ trans('tebex::messages.packages.buy') }}",
                showLoaderOnConfirm: true,
                inputValidator: (value) => {
                    if (value.length < 3) {
                        return "{{ trans('tebex::messages.modal.bad_username') }}"
                    }
                },
                preConfirm: (username) => {
                    return fetch(api, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            username: username,
                            package_id: product_id
                        })
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Oups ! : ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    openInNewTab(result.value.checkout_url);
                }
            });

        }
    </script>
@endpush
