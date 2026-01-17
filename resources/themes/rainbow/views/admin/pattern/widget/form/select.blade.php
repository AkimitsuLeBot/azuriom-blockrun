<div class="my-2">
    <label class="mb-1  mt-2"
           for="select-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}">{{ trans('theme::widget.'.$key.'.item.label.'.$field['value']) }}</label>
    <select
        name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
        id="select-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
        class="form-control js-detect-row js-detect-page js-detect-widget-id">
        @foreach($field['option'] as $k => $v)
            <option value="{{ $k }}"
                    @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value']) == $k || (isset($field['default']) && $field['default'] == $k) ) selected @endif>{{ $v }}</option>
        @endforeach
    </select>
</div>
