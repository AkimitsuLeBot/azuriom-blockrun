<div class=" card">
    <div class="card-header d-flex justify-content-between">
        <h2 class="card-title">Icon @if(isset($icon)) {{ $loop->iteration }} @else 1 @endif </h2>
        <div class="input-group-text">
            <button class="btn btn-outline-danger command-remove" type="button"><i
                    class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="mb-0">
            <label class="form-label" for="imageSelect-particul">{{ trans('theme::lang.image') }}</label>
            <div class="input-group mb-3">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select"
                        id="imageSelect-iconparticul-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif"
                        name="home[particle][icons][{index}][url]"
                        data-image-preview-select="filePreview-iconparticul-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif">
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
                         id="filePreview-iconparticul-@if(isset($icon)) {{ $loop->iteration }} @else 1 @endif"
                         style="object-fit: contain">
                </div>
            </div>
        </div>
    </div>
</div>
