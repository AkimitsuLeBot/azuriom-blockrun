@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'passwordReset', 'value' => 'passwordReset'])
@endif

<div
    class="card" @include('elements.string-aos', ['pageAos' => 'passwordReset', 'itemAos'=>'passwordReset'])>
    <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <label class="form-label" for="email">{{ trans('auth.email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">{{ trans('auth.password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password-confirm">{{ trans('auth.confirm_password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                       autocomplete="new-password">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ trans('auth.passwords.reset') }}
                </button>
            </div>
        </form>
    </div>
</div>
