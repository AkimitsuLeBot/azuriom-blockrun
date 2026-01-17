<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{trans('theme::lang.pages.title')}}</h3>
</div>
<div class="card-body">
    @includeIf('admin.pattern.components-builder',['page'=> 'pages' ])
</div>
