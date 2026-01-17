@if($topCustomer !== null)
    @if(isset($getBanner))
        @include('widget.banner.banner-widget')
    @else
        @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'top'])
    @endif
    <div class="card mb-4" @include('elements.string-aos')>
        <div class="card-body d-flex">
            <div class="flex-shrink-0">
                <img class="me-3 rounded" src="{{ $topCustomer->user->getAvatar(64) }}" alt="{{ $topCustomer->user->name }}" width="64">
            </div>
            <div class="flex-grow-1">
                <p class="h4 mb-1">{{ $topCustomer->user->name }}</p>
                {{-- {{ $topCustomer->total.' '.currency_display() }} --}}
            </div>
        </div>
    </div>
@endif
