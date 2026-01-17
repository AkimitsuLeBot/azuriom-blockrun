@push('footer-scripts')
    <script>
        document.querySelectorAll('[data-widget-package-url]').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                axios.get(el.dataset['widgetPackageUrl']).then(function (response) {
                    const itemModal = document.getElementById('widget_itemModal');
                    itemModal.innerHTML = response.data;
                    new bootstrap.Modal(itemModal).show();
                }).catch(function (error) {
                    createAlert('danger', error, true);
                });
            });
        });
    </script>
@endpush
<article class="widget--top_product mb-5" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @php
        $products  = explode(';', theme_config($getItem.'.id_product'));
        $packages = Azuriom\Plugin\Shop\Models\Package::whereIn('id', $products)->get();
    @endphp
    @if($packages->count() >= 1)
        <div class="card bg-transparent">
            @foreach($packages as $package)
                <div class="card-body {{theme_config($getItem.'.style') == 1 ? 'my-2 rounded': 'py-2 rounded-0'}}">
                    <ul class="my-0 ps-0">
                        <li class="d-flex align-items-center justify-content-start">
                            @if($package->image !== null)
                                <a href="#" class="w-50"
                                   data-widget-package-url="{{ route('shop.packages.show', $package) }}">
                                    <img class="card-img-top" src="{{ $package->imageUrl() }}"
                                         alt="{{ $package->name }}">
                                </a>
                            @endif

                            <div class="card-body w-50">
                                <h4 class="card-title">{{ $package->name }}</h4>
                                <h5 class="card-subtitle mb-3">
                                    @if($package->isDiscounted())
                                        <del class="small">{{ $package->getOriginalPrice() }}</del>
                                    @endif
                                    {{ shop_format_amount($package->getPrice()) }}
                                </h5>

                                <a href="#" class="btn btn-primary btn-block"
                                   data-widget-package-url="{{ route('shop.packages.show', $package) }}">
                                    {{ trans('shop::messages.buy') }}
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="text-center py-2">
            <a href="{{route('shop.home')}}" class="btn btn-primary w-100 mw-100">{{trans('shop::messages.title')}}</a>
        </div>
        <div class="modal fade" id="widget_itemModal" tabindex="-1" role="dialog" aria-labelledby="widget_itemModal"
             aria-hidden="true"></div>
    @endif
</article>
