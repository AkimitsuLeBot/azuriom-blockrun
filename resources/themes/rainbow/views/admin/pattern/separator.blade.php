@php
    isset($randJs) ? $randID = '{rand_id}' : $randID = random_int(1,999);
	$page_current = $page ?? '{page}';
	$row = $row ?? '{row}';
@endphp
<div class="row m-0 justify-content-between align-items-center builder-row w-100">
    <div class="col-auto px-0">
        <h4 class="fw-bold">Séparateur</h4>
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
<div class="separator js-separator">
    <div class="row mb-4">
        <div class="col-lg-6">
            <label
                for="selectImage-page-separator-{{$randID}}-item">{{ trans('theme::background.image') }}</label>
            <div class="input-group">
                <div class="input-group-text">
                    <a class="btn btn-outline-success"
                       href="{{ route('admin.images.create') }}"
                       target="_blank" rel="noopener noreferrer"><i
                            class="bi bi-upload"></i></a>
                </div>
                <select class="form-select js-detect-row js-detect-page"
                        id="selectImage-separator-{{$randID}}-item"
                        name="{page}[row][{row}][separator][image]"
                        data-image-preview-select="filePreview-separator-separator-{{$randID}}">
                    <option value="">none</option>
                    <optgroup label="Default">
                        @foreach($separator as $key => $value)
                            <option data-image="theme" value="{{ $value }}"
                                    @if(theme_config($page_current.'.row.'.$row.'.separator.image') === $value) selected @endif>{{ $key }}</option>
                        @endforeach
                    </optgroup>
                    <optgroup label="Stockage">
                        @foreach($allImagesStokage as $image)
                            <option value="{{ $image->file }}"
                                    @if(theme_config($page_current.'.row.'.$row.'.separator.image') === $image->file) selected @endif>{{ $image->name }}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="range-separator-{{$randID}}-item"
                   class="form-label d-block">Taille du séparateur</label>
            <input id="range-separator-{{$randID}}-item"
                   class=" js-detect-row js-detect-page js-detect-widget-id"
                   value="{{ old($page_current.'[row]['.$row.'][separator][size]', theme_config($page_current.'.row.'.$row.'.separator.size')) ??  150 }}"
                   name="{page}[row][{row}][separator][size]"
                   type="range"
                   min="1"
                   max="500"
                   step="1"
                   oninput="this.nextElementSibling.value = this.value">
            <output
                class="col-2">{{old($page_current.'[row]['.$row.'][separator][size]', theme_config($page_current.'.row.'.$row.'.separator.size')) ??  150}}</output>
        </div>
    </div>

    @php
        if (theme_config($page_current.'.row.'.$row.'.separator.image')){
            $src = "";
            $objecFit = "";
                if (strpos(theme_config($page_current.'.row.'.$row.'.separator.image'), 'separator') !== false){
                    $src = theme_asset( old($page_current.'[row]['.$row.'][separator][image]', theme_config($page_current.'.row.'.$row.'.separator.image')) );
                    $objecFit = "fill";
                }else{
                    $src = image_url( old($page_current.'[row]['.$row.'][separator][image]', theme_config($page_current.'.row.'.$row.'.separator.image')) );
                    $objecFit = "cover";
                }
    }
    @endphp
    <img
        src="{{ theme_config($page_current.'.row.'.$row.'.separator.image') ? $src: ''}}"
        style="object-fit: {{ theme_config($page_current.'.row.'.$row.'.separator.image') ? $objecFit: ''}}"
        alt="{{ old($page_current.'[row]['.$row.'][separator][image]', theme_config($page_current.'.row.'.$row.'.separator.image')) }}"
        class="card-img rounded w-100 @if(!theme_config($page_current.'.row.'.$row.'.separator.image'))d-none @endif"
        id="filePreview-separator-separator-{{$randID}}">
</div>
