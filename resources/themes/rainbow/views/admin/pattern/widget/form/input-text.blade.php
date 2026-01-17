@if(!isset($keyInput))
    <label class="mb-1  mt-2"
           for="input-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}">{{ trans('theme::widget.'.$key.'.item.label.'.$field['value']) }}</label>
@endif
<input type="text"
       class="form-control js-detect-row js-detect-page js-detect-widget-id"
       @if(!isset($keyInput))
       placeholder="{{ trans('theme::widget.'.$key.'.item.placeholder.'.$field['value']) }}"
       @endif
       id="input-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
       name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item]{{isset($field['index']) ? '[index][{index}]': ''}}[{{$field['value']}}]"
       value="{{ theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.(isset($keyInput) ? 'index'.'.'.$keyInput.'.'.$field['value'] : $field['value'])) }}">
