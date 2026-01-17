@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'tebex', 'value' => 'tebex_package'])
@endif
@php
    $y = 0;
@endphp
<div class="col tab-content" @include('elements.string-aos')>

    @if(setting("tebex.shop.subtitle"))
        <div class="col-lg-12 mb-3" style="background-color: var(--color-contrast-low); border: 1px solid var(--color-primary);">
            <div class="card">
                <div class="card-body">
                    {{ setting("tebex.shop.subtitle") }}
                </div>
            </div>
        </div>
    @endif

    @forelse($categories as $categorie)
        <div class="tab-pane fade show @if($y == 0) active @endif" id="pill-{{ $categorie->id }}" role="tabpanel">
            <div class="row">
                @forelse($categorie->packages as $package)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100" style="border: 1px solid var(--color-primary);">
                            @if($package->image)
                                <img class="card-img-top" draggable="false" src="{{ $package->image }}" alt="{{ $package->name }}">
                            @endif

                            <div class="card-body text-center" style="background-color: var(--color-contrast-low);">
                                <h4 class="card-title">{{ $package->name }}</h4>
                                <h5>
                                    @if($package->price->discounted)
                                        <del class="small">{{ $package->price->normal . tebex_currency_symbol() }}</del>
                                        {{ $package->price->discounted . tebex_currency_symbol() }}
                                    @else
                                        {{ $package->price->normal . tebex_currency_symbol() }}
                                    @endif
                                </h5>

                                <button class="btn btn-primary btn-block" onclick="openProductModal(`{{ $package->id }}`)">
                                    {{ trans('tebex::messages.packages.buy') }}
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <div class="alert alert-warning" role="alert">
                            {{ trans('tebex::messages.categories.empty') }}
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        @php
            $y++
        @endphp
    @empty
        <div class="col">
            <div class="alert alert-warning" role="alert">
                {{ trans('tebex::messages.categories.empty') }}
            </div>
        </div>
    @endforelse
</div>
