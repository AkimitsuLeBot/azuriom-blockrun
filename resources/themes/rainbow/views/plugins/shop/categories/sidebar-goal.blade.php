@if($goal !== false)
    @if(isset($getBanner))
        @include('widget.banner.banner-widget')
    @else
        @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'goal'])
    @endif
    <div class="card mb-4" @include('elements.string-aos')>
        <div class="card-body">
            <div class="progress mb-1">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                     aria-valuenow="{{ $goal }}" aria-valuemin="0" aria-valuemax="100"
                     style="width: {{ min($goal, 100) }}%"></div>
            </div>

            <p class="card-text text-center">
                {{ trans_choice('shop::messages.goal.progress', $goal) }}
            </p>
        </div>
    </div>
@endif
