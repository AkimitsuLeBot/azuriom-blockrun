<div class="js-aos">
    <div class="my-2">
        <label
            for="background-animation-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ trans('theme::lang.animation') }}</label>
        <select name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][aos][animation]"
                id="background-animation-{{$background['id']}}-{{$key}}-{{$value}}-item"
                class="form-control js-detect-background-id js-select-aos">
            @foreach($animations as $k => $val)
                <optgroup label="{{$k}}">
                    @foreach($val as $v)
                        <option value="{{ $v }}"
                                @if(theme_config('background.'.$background['id'].'.'.$key.'.'.$value.'.item.aos.animation') === $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="js-aos-active d-none">
        <div class="my-2">
            <label
                for="background-items-easing-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ trans('theme::lang.easing') }}</label>
            <select name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][aos][easing]"
                    id="background-items-easing-{{$background['id']}}-{{$key}}-{{$value}}-item"
                    class="form-control js-detect-background-id">
                @foreach($easingAnimations as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config('background'.$background['id'].'.'.$key.'.'.$value.'.item.aos.easing') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="background-items-placement-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ trans('theme::lang.placement') }}</label>
            <select name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][aos][placement]"
                    id="background-items-placement-{{$background['id']}}-{{$key}}-{{$value}}-item"
                    class="form-control js-detect-background-id">
                @foreach($placements as $k => $v)
                    <option value="{{ $v }}"
                            @if(theme_config('background'.$background['id'].'.'.$key.'.'.$value.'.item.aos.placement') === $v) selected @endif>{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <div class="my-2">
            <label
                for="background-items-duration-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ trans('theme::lang.duration') }}</label>
            <input type="text"
                   class="form-control js-detect-background-id"
                   id="background-items-duration-{{$background['id']}}-{{$key}}-{{$value}}-item"
                   name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][aos][duration]"
                   value="{{ old('background'.$background['id'].'.'.$key.'.'.$value.'[item][aos][duration]', theme_config('background'.$background['id'].'.'.$key.'.'.$value.'.item.aos.duration')) }}">
        </div>
        <div class="my-2">
            <label
                for="background-items-offset-{{$background['id']}}-{{$key}}-{{$value}}-item">{{ trans('theme::lang.offset') }}</label>
            <input type="text"
                   class="form-control js-detect-background-id"
                   id="background-items-offset-{{$background['id']}}-{{$key}}-{{$value}}-item"
                   name="background[{{$background['name']}}][{{$key}}][{{$value}}][item][aos][offset]"
                   value="{{ old('background'.$background['id'].'.'.$key.'.'.$value.'[item][aos][offset]', theme_config('background'.$background['id'].'.'.$key.'.'.$value.'.item.aos.offset')) }}">
        </div>
    </div>
</div>
