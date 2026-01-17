<div class="js-aos">
    <div class="my-2">
        <label class="form-label"
            for="widget-animation-{{$widget['id']}}-{{$key}}-item">{{ trans('theme::lang.animation') }}</label>
        <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][aos][animation]"
                id="widget-animation-{{$widget['id']}}-{{$key}}-item"
                class="form-control js-detect-row js-detect-page js-detect-widget-id js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="widget-items-easing-{{$widget['id']}}-{{$key}}-item">{{ trans('theme::lang.easing') }}</label>
            <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][aos][easing]"
                    id="widget-items-easing-{{$widget['id']}}-{{$key}}-item"
                    class="form-control js-detect-row js-detect-page js-detect-widget-id">
                @foreach($easingAnimations as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.aos.easing') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-items-placement-{{$widget['id']}}-{{$key}}-item">{{ trans('theme::lang.placement') }}</label>
            <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][aos][placement]"
                    id="widget-items-placement-{{$widget['id']}}-{{$key}}-item"
                    class="form-control js-detect-row js-detect-page js-detect-widget-id">
                @foreach($placements as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.aos.placement') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-items-duration-{{$widget['id']}}-{{$key}}-item">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control js-detect-row js-detect-page js-detect-widget-id"
                   id="widget-items-duration-{{$widget['id']}}-{{$key}}-item"
                   name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][aos][duration]"
                   value="{{ old($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'[item][aos][duration]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.aos.duration')) }}">
        </div>
        <div class="my-2">
            <label
                for="widget-items-offset-{{$widget['id']}}-{{$key}}-item">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control js-detect-row js-detect-page js-detect-widget-id"
                   id="widget-items-offset-{{$widget['id']}}-{{$key}}-item"
                   name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][item][aos][offset]"
                   value="{{ old($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'[item][aos][offset]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.item.aos.offset')) }}">
        </div>
    </div>
</div>
