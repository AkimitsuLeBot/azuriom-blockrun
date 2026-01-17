<div class="card card-custom">
    <div class="card-header d-flex align-items-center justify-content-between">
        <input
            class="btn btn-link d-none js-detect-background-id {{theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.chevron')?"collapsed":""}}"
            {{theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.chevron')?"checked":""}}
            type="checkbox"
{{--                        name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][chevron]"--}}
            data-bs-toggle="collapse"
            data-bs-target="#collapse-background-{{$background['id']}}-{{$key}}-{{$value}}-item"
            aria-expanded="{{theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.chevron')?"true":"false"}}"
            aria-controls="collapse-background-{{$background['id']}}-{{$key}}-{{$value}}-item"
            id="checkbox-background-{{$background['id']}}-{{$key}}-{{$value}}-item">
        <label for="checkbox-background-{{$background['id']}}-{{$key}}-{{$value}}-item"
               class="px-2 d-flex align-content-center justify-content-between w-100" style="cursor: pointer">
            <h4 class="card-title mb-0">
                {{ trans('theme::background.'.$key.'.'.$value.'.item.title') }}
            </h4>
            <i class="bi bi-chevron-down" style="padding: 6px;"></i>
        </label>
    </div>
    <div
        class="collapse {{theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.chevron')?"show":""}}"
        id="collapse-background-{{$background['id']}}-{{$key}}-{{$value}}-item">

        <div class="card-body">
            @if(trans()->has('theme::background.'.$key.'.'.$value.'.item.info'))
                <div
                    class="small font-italic mb-2">{!! trans('theme::background.'.$key.'.'.$value.'.item.info')!!}</div>
            @endif
            @if(isset($filedsBuilder))
                @foreach($filedsBuilder as $field)
                    @if($field['type'] === 'input')
                        <label class="mb-1  mt-2"
                               for="input-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}">{{ trans('theme::background.'.$key.'.'.$value.'.item.label.'.$field['value']) }}</label>
                        <input type="text"
                               class="form-control js-detect-background-id"
                               placeholder="{{ trans('theme::background.'.$key.'.'.$value.'.item.placeholder.'.$field['value']) }}"
                               id="input-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}"
                               name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][{{$field['value']}}]"
                               value="{{ old('background['.$background['id'].']['.$key.'.'.$value.'][item]['.$field['value'].']', theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value'])) }}">

                    @endif
                    @if($field['type'] === 'checkbox')
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="form-check-input js-detect-background-id"
                                   id="checkbox-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}"
                                   name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][{{$field['value']}}]"
                                   @if( theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value'])) checked @endif>
                            <label class="form-check-label"
                                   for="checkbox-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}">
                                {{ trans('theme::background.'.$key.'.'.$value.'.item.label.'.$field['value']) }}
                            </label>
                        </div>
                    @endif
                    @if($field['type'] === 'select')
                        <div class="my-2">
                            <label class="mb-1  mt-2"
                                   for="select-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}">{{ trans('theme::background.'.$key.'.'.$value.'.item.label.'.$field['value']) }}</label>
                            <select
                                name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][{{$field['value']}}]"
                                id="select-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}"
                                class="form-control js-detect-background-id">
                                @foreach($field['option'] as $k => $v)
                                    <option value="{{ $k }}"
                                            @if(theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value']) == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    @if($field['type'] === "range")
                        <div class="my-2 row">
                            <label
                                for="select-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}"
                                class="col-3">{{$field['label']}}</label>
                            <input
                                id="select-background-{{$background['id']}}-{{$key}}-{{$value}}-item-{{$field['value']}}"
                                class="col-7"
                                name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][{{$field['value']}}]"
                                type="range"
                                value="{{theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value']) ?? $field['default']}}"
                                min="{{$field['min']}}"
                                max="{{$field['max']}}"
                                step="{{$field['step']}}"
                                oninput="this.nextElementSibling.value = this.value">
                            <output
                                class="col-2">{{old('background['.$background['id'].']['.$key.'.'.$value.'][item]['.$field['value'].']', theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value'])) }}</output>
                        </div>
                    @endif
                    @if($field['type'] === "image")
                        <div class="my-2">
                            <label
                                for="selectImage-background-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ isset($field['label']) ? trans('theme::background.'.$key.'.'.$value.'.item.label.'.$field['value']) : trans('theme::background.image') }}</label>
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <a class="btn btn-outline-success"
                                       href="{{ route('admin.images.create') }}"
                                       target="_blank" rel="noopener noreferrer"><i
                                            class="bi bi-upload"></i></a>
                                </div>
                                <select class="form-select js-detect-background-id"
                                        id="selectImage-background-{{$background['id']}}-{{$key}}-{{$value}}-item"
                                        name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][{{$field['value']}}]"
                                        data-image-preview-select="filePreview-background-{{$background['id']}}-{{$key}}-{{$value}}-item">
                                    <option value="">none</option>
                                    @foreach($allImagesStokage as $image)
                                        <option value="{{ $image->file }}"
                                                @if(theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value']) === $image->file) selected @endif>{{ $image->name }}</option>
                                    @endforeach
                                </select>
                                <div class="mt-3 w-100">
                                    <img
                                        src="{{ theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value']) ? image_url( old('background['.$background['id'].']['.$key.'.'.$value.'][item]['.$field['value'].']', theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value'])) ): ''}}"
                                        alt="{{ old('background['.$background['id'].']['.$key.'.'.$value.'][item]['.$field['value'].']', theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value'])) }}"
                                        class="card-img rounded img-preview-sm @if(!theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.'.$field['value']))d-none @endif"
                                        id="filePreview-background-{{$background['id']}}-{{$key}}-{{$value}}-item"
                                        style="object-fit: contain;max-height: 90px">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            @if(!isset($is_aos))
                @include('admin.pattern.background.background-aos')
            @endif
        </div>
    </div>
</div>
