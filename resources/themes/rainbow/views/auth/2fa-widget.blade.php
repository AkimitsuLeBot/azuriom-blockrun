@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'f2a', 'value' => 'f2a'])
@endif
<div class="card mb-3"  @include('elements.string-aos')>
    <div class="card-body">
        <form method="POST" action="{{ route('login.2fa') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="code">{{ trans('auth.2fa.code') }}</label>
                <input id="code" type="text"
                       class="form-control @error('code') is-invalid @enderror"
                       name="code" required autofocus>

                @error('code')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ trans('auth.login') }}
                </button>
            </div>
        </form>
    </div>
</div>
