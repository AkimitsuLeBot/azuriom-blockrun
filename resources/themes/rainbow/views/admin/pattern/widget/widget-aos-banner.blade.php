<div class="js-aos">
    <div class="my-2">
        <label class="form-label"
            for="widget-animation-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::lang.animation') }}</label>
        <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][aos][animation]"
                id="widget-animation-{{$widget['id']}}-{{$key}}-banner"
                class="form-control js-detect-row js-detect-page js-detect-widget-id js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="widget-banners-easing-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::lang.easing') }}</label>
            <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][aos][easing]"
                    id="widget-banners-easing-{{$widget['id']}}-{{$key}}-banner"
                    class="form-control js-detect-row js-detect-page js-detect-widget-id">
                @foreach($easingAnimations as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.aos.easing') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-banners-placement-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::lang.placement') }}</label>
            <select name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][aos][placement]"
                    id="widget-banners-placement-{{$widget['id']}}-{{$key}}-banner"
                    class="form-control js-detect-row js-detect-page js-detect-widget-id">
                @foreach($placements as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.aos.placement') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="widget-banners-duration-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control js-detect-row js-detect-page js-detect-widget-id"
                   id="widget-banners-duration-{{$widget['id']}}-{{$key}}-banner"
                   name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][aos][duration]"
                   value="{{ old($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'[banner][aos][duration]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.aos.duration')) }}">
        </div>
        <div class="my-2">
            <label
                for="widget-banners-offset-{{$widget['id']}}-{{$key}}-banner">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control js-detect-row js-detect-page js-detect-widget-id"
                   id="widget-banners-offset-{{$widget['id']}}-{{$key}}-banner"
                   name="{page}[row][{row}][widget][{{$widget['name']}}][{{$key}}][banner][aos][offset]"
                   value="{{ old($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'[banner][aos][offset]', theme_config($page_current.'.row.'.$row.'.widget.'.$widget['id'].'.'.$key.'.banner.aos.offset')) }}">
        </div>
    </div>
</div>
