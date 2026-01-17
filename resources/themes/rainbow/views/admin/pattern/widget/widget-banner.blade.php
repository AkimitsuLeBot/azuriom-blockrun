<div class="card card-custom">
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none {{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.chevron')?"collapsed":""}}"
            {{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.chevron')?"checked":""}}
            type="checkbox"
            {{--            name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][chevron]"--}}
            data-bs-toggle="collapse"
            data-bs-target="#collapse-widget-{{$widget['id']}}-{{$key}}-banner"
            aria-expanded="{{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.chevron')?"true":"false"}}"
            aria-controls="collapse-widget-{{$widget['id']}}-{{$key}}-banner"
            id="checkbox-widget-{{$widget['id']}}-{{$key}}-banner">
        <label for="checkbox-widget-{{$widget['id']}}-{{$key}}-banner"
               class="px-2 d-flex align-items-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">{{trans('theme::widget.'.$key.'.banner.title')}}</h4>
            <i class="bi bi-chevron-down" style="padding: 6px"></i>
        </label>
    </div>

    <div
        class="collapse {{theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.chevron')?"show":""}}"
        id="collapse-widget-{{$widget['id']}}-{{$key}}-banner">
        <div class="card-body">
            <div class="small font-italic mb-2">{!! trans('theme::widget.'.$key.'.banner.info')!!}</div>
            <label
                for="selectImage-widget-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::widget.image') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                        id="selectImage-widget-{{$widget['id']}}-{{$key}}-banner"
                        name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][image]"
                        data-image-preview-select="filePreview-widget-{{$widget['id']}}-{{$key}}-banner">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.image') === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
                <div class="mt-3 w-100">
                    <img
                        src="{{ theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.image') ? image_url( old('widget['.$widget['id'].']['.$key.'][banner][image]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.image')) ): ''}}"
                        alt="{{ old('widget['.$widget['id'].']['.$key.'][banner][image]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.image')) }}"
                        class="card-img rounded img-preview-sm @if(!theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.image'))d-none @endif"
                        id="filePreview-widget-{{$widget['id']}}-{{$key}}-banner"
                        style="object-fit: contain;max-height: 90px">
                </div>
            </div>

            <label
                for="title-widget-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::widget.title') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                            name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][balise]">

                        @for($i = 1 ; $i <=6; $i++)
                            <option value="h{{$i}}"
                                    @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.balise') === 'h'.$i || $i === $balise) selected @endif>
                                h{{$i}}</option>
                        @endfor
                    </select>
                </div>
                <input type="text"
                       class="form-control js-detect-row js-detect-page js-detect-widget-id"
                       id="title-widget-{{$widget['id']}}-{{$key}}-banner"
                       name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][title]"
                       value="{{ old('widget['.$widget['id'].']['.$key.'][banner][title]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.title')) }}">
            </div>
            <div class="mb-3">
                <label for="size-widget-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::widget.size') }}</label>
                <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                        id="size-widget-{{$widget['id']}}-{{$key}}-banner"
                        name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][size]">
                    <option value="lg"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.size') === 'lg' || $i === $balise) selected @endif>
                        Default
                    </option>
                    <option value="sm"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.size') === 'sm' || $i === $balise) selected @endif>
                        Sm
                    </option>

                </select>
            </div>
            <div class="mb-3">
                <label for="position-widget-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::widget.position') }}</label>
                <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                        id="position-widget-{{$widget['id']}}-{{$key}}-banner"
                        name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][position]">
                    <option value="start"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.position') === 'start' || $i === $balise) selected @endif>
                        {{ trans('theme::widget.start') }}
                    </option>
                    <option value="center"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.position') === 'center' || $i === $balise) selected @endif>
                        {{ trans('theme::widget.center') }}
                    </option>
                    <option value="end"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.position') === 'end' || $i === $balise) selected @endif>
                        {{ trans('theme::widget.end') }}
                    </option>

                </select>
            </div>
            @include('admin.pattern.widget.widget-aos-banner')

            <div class="form-check form-switch mt-2">
                <input type="checkbox"
                       class="form-check-input js-detect-row js-detect-page js-detect-widget-id"
                       id="hidden-widget-{{$widget['id']}}-{{$key}}-banner"
                       name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][hidden]"
                       @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.hidden')) checked @endif>
                <label class="form-check-label" for="hidden-widget-{{$widget['id']}}-{{$key}}-banner">
                    {{trans('theme::widget.'.$key.'.banner.hidden')}}
                </label>
            </div>
        </div>
    </div>
</div>
