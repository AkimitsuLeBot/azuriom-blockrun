@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'shop'])
@endif
<div class="row">
    @if(isset($welcome))
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{ $welcome }}
                </div>
            </div>
        </div>
    @else

        @if(isset($category->description))
        <div class="col-lg-12 mb-3">
            <div class="card">
                <div class="card-body">
                    {!! $category->description !!}
                </div>
            </div>
        </div>
        @endif

        @forelse($category->packages  as $package)
            <div class="col-md-4 mb-4"
                 @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'shop', 'noDuration'])
                 @if(theme_config('shop.items.shop.aos.duration'))
                 data-aos-duration='{{theme_config('shop.items.shop.aos.duration') * $loop->iteration}}'
                @endif>
                <div class="card h-100">
                    @if($package->hasImage())
                        <a href="#" data-package-url="{{ route('shop.packages.show', $package) }}">
                            <img class="card-img-top" src="{{ $package->imageUrl() }}"
                                 alt="{{ $package->name }}">
                        </a>
                    @endif

                    <div class="card-body">
                        <h4 class="card-title">{{ $package->name }}</h4>
                        <h5>
                            @if($package->isDiscounted())
                                <del class="small">{{ $package->getOriginalPrice() }}</del>
                            @endif
                            {{ shop_format_amount($package->getPrice()) }}
                        </h5>

                        <a href="#" class="btn btn-primary btn-block"
                           data-package-url="{{ route('shop.packages.show', $package) }}">
                            {{ trans('shop::messages.buy') }}
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.categories.empty') }}
                </div>
            </div>
        @endforelse
    @endif
</div>
