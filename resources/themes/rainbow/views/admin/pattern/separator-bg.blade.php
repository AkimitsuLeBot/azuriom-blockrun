@php
    isset($randJs) ? $randID = '{rand_id}' : $randID = random_int(1,999);
	$page_current = $page ?? '{page}';
	$row = $row ?? '{row}';
@endphp
<div class="row m-0 justify-content-between align-items-center builder-row w-100">
    <div class="col-auto px-0">
        <h4 class="fw-bold">Séparateur image</h4>
    </div>
    <div class="col-auto px-0  text-center">
        <button type="button" class="btn btn-outline-warning sortable-row-handle m-1">
            <i class="bi bi-arrows-move"></i>
        </button>
    </div>
    <div class="col-auto px-0">
        <button type="button" class="btn btn-outline-danger js-row-close m-1">
            <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
        </button>
    </div>
</div>
<div class="separator-bg js-separator">
    <div class="row mb-4">
        <div class="col-lg-6">
            <label
                for="selectImage-page-separator-bg-{{$randID}}-item">{{ trans('theme::background.image') }}</label>
            <div class="input-group">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select js-detect-row js-detect-page"
                        id="selectImage-separator-bg-{{$randID}}-item"
                        name="{page}[row][{row}][separator-bg]"
                        data-image-preview-select="filePreview-separator-separator-bg-{{$randID}}">
                    <option value="">none</option>
                    @foreach($allImagesStokage as $image)
                        <option value="{{ $image->file }}"
                                @if(theme_config($page_current.'.row.'.$row.'.separator-bg') === $image->file) selected @endif>{{ $image->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<img
    src="{{ theme_config($page_current.'.row.'.$row.'.separator-bg') ? image_url( old($page_current.'[row]['.$row.'][separator-bg]', theme_config($page_current.'.row.'.$row.'.separator-bg')) ): ''}}"
    alt="{{ old($page_current.'[row]['.$row.'][separator-bg]', theme_config($page_current.'.row.'.$row.'.separator-bg')) }}"
    class="separator-bg-image @if(!theme_config($page_current.'.row.'.$row.'.separator-bg'))d-none @endif"
    id="filePreview-separator-separator-bg-{{$randID}}">
