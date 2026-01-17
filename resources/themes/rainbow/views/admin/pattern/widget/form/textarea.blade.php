<div class="my-2">
    <label for="textarear-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}"
           class="form-label">{{ trans('theme::widget.'.$key.'.item.label.'.$field['value']) }}</label>
    <textarea id="textarear-widget-{{$widget['id']}}-{{$key}}-item-{{$field['value']}}" rows="6"
              class="form-control col-7  js-detect-row js-detect-page js-detect-widget-id"
              name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][{{$field['value']}}]"
              type="color">{{ old($page_current.'[row]['.$row.'][widget]['.$widget['id'].']['.$key.'][item]['.$field['value'].']', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.'.$field['value'])) }}</textarea>
</div>
