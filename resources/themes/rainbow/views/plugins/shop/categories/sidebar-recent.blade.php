@if($recentPayments !== null)
    @if(isset($getBanner))
        @include('widget.banner.banner-widget')
    @else
        @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'recent'])
    @endif
    <div class="card mb-4" @include('elements.string-aos')>
        <div class="list-group list-group-flush">
            @forelse($recentPayments as $payment)
                <div class="list-group-item d-flex">
                    <div class="flex-shrink-0 d-flex align-items-center">
                        <img src="{{ $payment->user->getAvatar(48) }}" class="me-3 rounded" alt="{{ $payment->user->name }}" width="48">
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-1">{{ $payment->user->name }}</p>
                        <small>{{ $payment->price.' '.currency_display() }} - {{ format_date($payment->created_at) }}</small>
                    </div>
                </div>
            @empty
                <div class="list-group-item">
                    {{ trans('shop::messages.recent.empty') }}
                </div>
            @endforelse
        </div>
    </div>
@endif
