<div class="my-2">
    <label
        for="selectImage-widget-{{$widget['id']}}-{{$key}}-item">{{ isset($field['label']) ? trans('theme::widget.'.$key.'.item.label.'.$field['value']) : trans('theme::background.image') }}</label>
    <div class="input-group">
        <div class="input-group-text">
            <a class="btn btn-outline-success"
               href="{{ route('admin.images.create') }}"
               target="_blank" rel="noopener noreferrer"><i
                    class="bi bi-upload"></i></a>
        </div>
        <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                id="selectImage-widget-{{$widget['id']}}-{{$key}}-item"
                name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
                data-image-preview-select="filePreview-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}">
            <option value="">none</option>
            @foreach($allImagesStokage as $image)
                <option value="{{ $image->file }}"
                        @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value']) === $image->file) selected @endif>{{ $image->name }}</option>
            @endforeach
        </select>
        <div class="w-100">
            <img
                src="{{ theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value']) ? image_url( old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) ): ''}}"
                alt="{{ old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) }}"
                class="card-img rounded img-preview-sm @if(!theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value']))d-none @endif"
                id="filePreview-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
                style="object-fit: contain;max-height: 90px">
        </div>
    </div>
</div>
