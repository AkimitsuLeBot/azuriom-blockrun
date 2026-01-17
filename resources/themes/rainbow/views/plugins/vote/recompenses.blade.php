<div class="my-3">

    @if(isset($getItem))
        @include('widget.banner.banner-widget')
    @else
        <div class="banner">
            <div class="banner-title no-image">
                <h2>{{ trans('vote::messages.sections.rewards') }}</h2>
            </div>
        </div>
    @endif

    @if(display_rewards())
        <div @include('elements.string-aos', ['pageAos' => 'vote', 'itemAos'=>'recompenses'])>
            <div class="table-responsive">
                <ul class="table--custom">
                    <li class="table-header">
                        <div class="col px-3 col-6">{{ trans('messages.fields.name') }}</div>
                        <div class="col px-3 col-6">{{ trans('vote::messages.fields.chances') }}</div>
                    </li>
                    @foreach($rewards as $reward)
                        <li class="table-row">
                            <div class="col px-3 col-6" scope="row">
                                @if($reward->image)
                                    <img src="{{ $reward->imageUrl() }}" alt="{{ $reward->name }}" width="45" class="me-2">
                                @endif
                                {{ $reward->name }}
                            </div>
                            <div class="col px-3 col-6">{{ $reward->chances }} %</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
