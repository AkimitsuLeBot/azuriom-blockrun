<div class="card card-custom">
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none{{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.chevron')?"collapsed":""}}"
            {{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.chevron')?"checked":""}}
            type="checkbox"
            {{--            name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][chevron]"--}}
            data-bs-toggle="collapse"
            data-bs-target="#collapse-widget-{{$widget['id']}}-{{$key}}-item"
            aria-expanded="{{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.chevron')?"true":"false"}}"
            aria-controls="collapse-widget-{{$widget['id']}}-{{$key}}-item"
            id="checkbox-widget-{{$widget['id']}}-{{$key}}-item">
        <label for="checkbox-widget-{{$widget['id']}}-{{$key}}-item"
               class="px-2 d-flex align-items-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">{{ trans('theme::widget.'.$key.'.item.title') }}</h4>
            <i class="bi bi-chevron-down" style="padding: 6px;"></i>
        </label>
    </div>
    <div
        class="collapse {{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.chevron')?"show":""}}"
        id="collapse-widget-{{$widget['id']}}-{{$key}}-item">

        <div class="card-body">
            @if(trans()->has('theme::widget.'.$key.'.item.info'))
                <div
                    class="small font-italic mb-2">{!! trans('theme::widget.'.$key.'.item.info')!!}</div>
            @endif
            @if(isset($filedsBuilder))
                @foreach($filedsBuilder as $field)
                    @if($field['type'] === 'input')
                        @include('admin.pattern.widget.form.input-text')
                    @endif
                    @if($field['type'] === 'checkbox')
                        @include('admin.pattern.widget.form.input-checkbox')
                    @endif
                    @if($field['type'] === 'select')
                        @include('admin.pattern.widget.form.select')
                    @endif
                    @if($field['type'] === "range")
                        @include('admin.pattern.widget.form.input-range')
                    @endif
                    @if($field['type'] === "image")
                        @include('admin.pattern.widget.form.select-image')
                    @endif
                    @if($field['type'] === "color")
                        @include('admin.pattern.widget.form.input-color')
                    @endif
                    @if($field['type'] === "textarea")
                        @include('admin.pattern.widget.form.textarea')
                    @endif
                    @if($field['type'] === 'builderInputs')
                        @include('admin.pattern.widget.form.builder-input')
                    @endif
                @endforeach
            @endif
            @if(!isset($is_aos))
                @include('admin.pattern.widget.widget-aos')
            @endif
        </div>
    </div>
</div>
