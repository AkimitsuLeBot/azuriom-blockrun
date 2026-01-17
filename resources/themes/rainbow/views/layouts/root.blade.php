@if(theme_config('project.color_themes'))
    @push('styles')
        <style id="style-color">
            :root, [data-theme="default"] {
            {{theme_config('project.color_themes')}}
            }
        </style>
    @endpush
@endif
