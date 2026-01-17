@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'skinApi', 'value' => 'skin'])
@endif

<div class="card shadow mb-4" @include('elements.string-aos', ['pageAos' => 'skinApi', 'itemAos'=>'skin'])>
    <div class="card-body">
        <form action="{{ route('skin-api.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-2">
                <label class="form-label" for="skin">{{ trans('skin-api::messages.skin') }}</label>
                <div class="form-control">
                    <input type="file" class="form-control-input @error('skin') is-invalid @enderror" id="skin"
                           name="skin" accept=".png" required>
                    <label class="form-control-label" for="skin" data-browse="{{ trans('messages.actions.browse') }}"
                           id="skinLabel">
                        {{ trans('messages.actions.choose-file') }}
                    </label>

                    @error('skin')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <img src="{{ $skinUrl }}" alt="{{ trans('skin-api::messages.skin') }}" id="skinPreview"
                     class="mt-3 img-fluid">
            </div>

            <button type="submit" class="btn btn-primary">
                {{ trans('messages.actions.save') }}
            </button>
        </form>

    </div>
</div>
