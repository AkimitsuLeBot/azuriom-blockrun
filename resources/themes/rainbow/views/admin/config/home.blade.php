<div class="card-header d-flex align-items-center justify-content-between">
    <h3 class="m-0 fw--bold text-primary">{{ trans('theme::lang.home.title') }}</h3>
{{--    <button type="button" role="button" class="js-reset-page btn btn-outline-warning">Rénisialiée la page</button>--}}
</div>
<div class="card-body">
    @includeIf('admin.pattern.components-builder',['page'=> 'home' ])
</div>
