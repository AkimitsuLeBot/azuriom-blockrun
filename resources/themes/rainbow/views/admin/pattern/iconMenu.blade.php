<div class="form-row border card">
    <div class="card-header d-flex justify-content-between">
        <h2 class="card-title">Menu @if(isset($icon)) {{ $loop->iteration }} @else 1 @endif </h2>
        <div class="input-group-text">
            <button class="btn btn-outline-danger command-remove" type="button">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-0">
            <label class="form-label" for="imageSelect">{{ trans('theme::lang.image') }}</label>
            <div class="input-group">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select"
                        id="imageSelect-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif"
                        name="header[iconmenus][{index}][url]"
                        data-image-preview-select="filePreview-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(isset($icon['url']) && $icon['url'] === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
                <div class="mt-3 w-100">
                    <img src="@if(isset($icon['url'])) {{ image_url($icon['url']) }} @endif"
                         alt="@if(isset($icon['title'])) {{ $icon['title'] }} @endif"
                         class="card-img rounded img-preview-sm @if(!isset($icon['url']))d-none @endif"
                         id="filePreview-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif"
                         style="object-fit: contain">
                </div>
            </div>
        </div>
        <div class="mb-2">
            <label class="form-label">Nom</label>
            <select name="header[iconmenus][{index}][name]" id="name" class="w-100 form-control">
                <option value="">none</option>
                @foreach($navbars as $navbar)
                    <option value="{{$navbar->value.'-'.$navbar->type.'-'.$navbar->id}}"
                            @if(isset($icon['name']) && $icon['name'] === $navbar->value.'-'.$navbar->type.'-'.$navbar->id) selected @endif>{{ $navbar->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2 row">
            <label class="col-3">{{trans('theme::lang.header.icon.size')}}</label>
            <input id="select-header-iconmenus"
                   class=" js-detect-row js-detect-page js-detect-widget-id col-7"
                   value="{{ old('header[iconmenus][{index}][size]', theme_config('header.iconmenus.'.$loop->index.'.size')) ??  35 }}"
                   name="header[iconmenus][{index}][size]"
                   type="range"
                   min="1"
                   max="65"
                   step="1"
                   oninput="this.nextElementSibling.value = this.value">
            <output
                class="col-2">{{ old('header[iconmenus][{index}][size]', theme_config('header.iconmenus.'.$loop->index.'.size')) ??  35 }}</output>
        </div>

        <hr>
        <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input"
                   name="header[iconmenus][{index}][hiddenColor]"
                   @if(theme_config('header.iconmenus.'.$loop->index.'.hiddenColor')) checked @endif>
            <label class="form-check-label">
                {{ trans('theme::lang.header.navbar.hiddenColor') }}
            </label>
        </div>

        <div class="my-2">
            <label class="form-label">{{ trans('theme::lang.header.navbar.color') }}</label>
            <input
                class="form-control"
                value="{{ old('header[iconmenus][{index}][color]', theme_config('header.iconmenus.'.$loop->index.'.color'))}}"
                name="header[iconmenus][{index}][color]"
                type="color">
        </div>

    </div>
</div>
