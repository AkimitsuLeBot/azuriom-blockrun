
<div class="my-2 row">
    <label for="input-color-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           class="col-3">{{ trans('theme::widget.'.$key.'.item.label.'.$field['value']) }}</label>
    <input id="input-color-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           class="form-control col-7  js-detect-row js-detect-page js-detect-widget-id"
           value="{{ old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) ??  $field['default'] }}"
           name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
           type="color">
</div>
