<div class="form-row card">
    <div class="card-header d-flex justify-content-between">
        <h2 class="card-title">{{ trans('theme::lang.sliders.name') }} @if(isset($slider)) {{ $loop->iteration }} @else 1 @endif </h2>
        <div class="input-group-text">
            <button class="btn btn-outline-danger command-remove-slider" type="button"><i
                    class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-0">
            <label for="imageSelect">{{ trans('theme::lang.image') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select"
                        id="imageSelect-slider-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif"
                        name="sliders[{index}][url]"
                        data-image-preview-select="filePreview-slider-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(isset($slider['url']) && $slider['url'] === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
                <div class="mt-3 w-100">
                    <img src="@if(isset($slider['url'])) {{ image_url($slider['url']) }} @endif"
                         alt="@if(isset($slider['title'])) {{ $slider['title'] }} @endif"
                         class="card-img rounded img-preview-sm @if(!isset($slider['url']))d-none @endif"
                         id="filePreview-slider-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif"
                         style="object-fit: contain">
                </div>
            </div>
        </div>
        <div class="mb-2">
            <label>{{ trans('theme::lang.title') }}</label>
            <input type="text" class="form-control"
                   name="sliders[{index}][title]"
                   value="@if(isset($slider['title'])) {{ $slider['title'] }} @endif">
        </div>
        <div class="mb-2">
            <label>{{ trans('theme::lang.description') }}</label>
            <input type="text" class="form-control"
                   name="sliders[{index}][description]"
                   value="@if(isset($slider['description'])) {{ $slider['description'] }} @endif">
        </div>
        <div class="form-group">
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" id="background-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif"
                       name="sliders[{index}][background]"
                       @if(isset($slider['background'])) checked @endif>
                <label class="form-check-label" for="background-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif">
                    {{ trans('theme::lang.sliders.background') }}
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" id="reverse-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif"
                       name="sliders[{index}][reverse]"
                       @if(isset($slider['reverse'])) checked @endif>
                <label class="form-check-label" for="reverse-@if(isset($slider)) {{ $loop->iteration }} @else 1 @endif">
                    {{ trans('theme::lang.sliders.reverse') }}
                </label>
            </div>
        </div>
    </div>
</div>
