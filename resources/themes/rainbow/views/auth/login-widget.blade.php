@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'login', 'value' => 'login'])
@endif
<div class="card" @include('elements.string-aos', ['pageAos' => 'login', 'itemAos'=>'login'])>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="email">{{ trans('auth.email') }}</label>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">{{ trans('auth.password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="row gy-3 mb-3">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember'))>

                        <label class="form-check-label" for="remember">
                            {{ trans('auth.remember') }}
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    @if (Route::has('password.request'))
                        <a class="float-md-end" href="{{ route('password.request') }}">
                            {{ trans('auth.forgot_password') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary d-block">
                    {{ trans('auth.login') }}
                </button>
            </div>
        </form>
    </div>
</div>
