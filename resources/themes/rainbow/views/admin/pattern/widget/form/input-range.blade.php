<div class="my-2 row">
    <label for="select-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           class="col-3">{{$field['label']}}</label>
    <input id="select-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           class=" js-detect-row js-detect-page js-detect-widget-id col-7"
           value="{{ old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) ??  $field['default'] }}"
           name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
           type="range"
           min="{{$field['min']}}"
           max="{{$field['max']}}"
           step="{{$field['step']}}"
           oninput="this.nextElementSibling.value = this.value">
    <output
        class="col-2">{{old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) ??  $field['default']}}</output>
</div>
