@if(isset($getItem))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'passwordConfirm', 'value' => 'passwordConfirm'])
@endif

<div class="card">
    <div class="card-body">
        <p>{{ trans('auth.confirmation') }}</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="password">{{ trans('auth.password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">
                    {{ trans('auth.passwords.confirm') }}
                </button>
            </div>

            <div class="text-center">
                <a href="{{ route('password.request') }}">
                    {{ trans('auth.forgot_password') }}
                </a>
            </div>
        </form>
    </div>
</div>
