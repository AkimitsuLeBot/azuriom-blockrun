@extends('layouts.app')

@section('title', trans('shop::messages.cart.title'))

@section('content')

    @php($page_current = 'shop_cart')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.cart') && !theme_config('shop.items.coupons') && !theme_config('shop.items.addCoupons') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        @include('plugins.shop.cart.index-old')
    @endif

    @push('footer-scripts')
        <script>
            function setError(oCheckbox, bAction) {
                var sClass = "text-danger",
                    oP = oCheckbox.parentNode;
                console.log(oP)
                if (bAction == true) {
                    oP.classList.add(sClass);
                    oP.querySelector('a').classList.add(sClass)
                    oCheckbox.classList.add("is-invalid");
                } else {
                    oP.classList.remove(sClass);
                    oP.querySelector('a').classList.remove(sClass)
                    oCheckbox.classList.remove("is-invalid");
                }
            }

            function setSubmit(oEvent) {
                var oForm = oEvent.currentTarget,
                    oCheckbox = oForm['quote-request-cgu'];
                if (oCheckbox.checked === false) {
                    oEvent.preventDefault();
                    setError(oCheckbox, true);
                } else {
                    setError(oCheckbox, false);
                }
            }

            function removeError(oEvent) {
                var oCheckbox = oEvent.querySelector('[name="quote-request-cgu"]'),
                    oP = oCheckbox.parentNode,
                    bHasError = oP.classList.contains("error");
                if (bHasError && oCheckbox.checked === true) {
                    setError(oCheckbox, false);
                }
            }

            //Assignation de l'événement
            document.addEventListener('DOMContentLoaded', function () {
                var aForm = document.getElementById('verifCgv');
                if (aForm) {
                    aForm.addEventListener('submit', setSubmit);
                    aForm['quote-request-cgu'].addEventListener('click', removeError);
                }

                let link = document.getElementById('ctaLinkBuy')
                if (link) {
                    link.addEventListener('click', function (event) {
                        let getCheckbox = document.querySelector('#shop_cart input[name="quote-request-cgu"]');
                        if (getCheckbox.checked === false) {
                            event.preventDefault();
                            setError(getCheckbox, true);
                        } else {
                            setError(getCheckbox, false);
                        }
                    });
                    document.querySelector('#shop_cart input[name="quote-request-cgu"]').addEventListener('click', function (checkbox) {
                        let oP = this.parentNode,
                            bHasError = oP.classList.contains("text-danger");
                        if (bHasError && this.checked === true) {
                            setError(this, false);
                        }
                    })
                }

            });
        </script>
    @endpush

@endsection
