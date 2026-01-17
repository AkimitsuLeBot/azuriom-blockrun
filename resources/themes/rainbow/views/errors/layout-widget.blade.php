<div class="card">
    <div class="card-body text-center">
        <h1>@yield('code')</h1>
        <h2>@yield('title')</h2>
        <p>@yield('message')</p>
        <a href="{{ route('home') }}" class="btn btn-primary">{{ trans('errors.home') }}</a>
    </div>
</div>
