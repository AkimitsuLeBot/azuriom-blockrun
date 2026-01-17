
<div class="form-check form-switch mt-2">
    <input type="checkbox"
           class="form-check-input js-detect-row js-detect-page js-detect-widget-id"
           id="checkbox-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
           @if( theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) checked @endif>
    <label class="form-check-label"
           for="checkbox-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}">
        {{ trans('theme::widget.'.$key.'.item.label.'.$field['value']) }}
    </label>
</div>
