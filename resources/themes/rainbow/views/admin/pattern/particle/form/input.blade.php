@if($type === "range")
    <div class="my-2 row">
        <label for="input-range-homeParticleConfig-{{$key}}-{{$value}}" class="col-3 form-label">{{$label}}</label>
        <input id="input-range-homeParticleConfig-{{$key}}-{{$value}}"
               class="col-7"
               value="{{old('home[particle][config]['.$key.']['.$value.']',theme_config('home.particle.config.'.$key.'.'.$value))}}"
               name="home[particle][config][{{$key}}][{{$value}}]"
               type="range"
               min="{{$min}}"
               max="{{$max}}"
               step="{{$step}}"
               oninput="this.nextElementSibling.value = this.value">
        <output
            class="col-2">{{old('home[particle][config]['.$key.']['.$value.']',theme_config('home.particle.config.'.$key.'.'.$value))}}</output>
    </div>
@endif

@if($type === "text")
    <div class="my-2 row">
        <label for="input-text-homeParticleConfig-{{$key}}-{{$value}}" class="col-3 form-label">{{$label}}</label>
        <input id="input-text-homeParticleConfig-{{$key}}-{{$value}}"
               class="form-control col-7"
               value="{{old('home[particle][config]['.$key.']['.$value.']',theme_config('home.particle.config.'.$key.'.'.$value))}}"
               name="home[particle][config][{{$key}}][{{$value}}]"
               type="text">
    </div>
@endif

@if($type === "color")
    <div class="my-2 row">
    <label for="input-color-homeParticleConfig-{{$key}}-{{$value}}" class="col-4 form-label">{{$label}}</label>
    <input id="input-colo-homeParticleConfig-{{$key}}-{{$value}}"
           class="form-control col-6"
           value="{{old('home[particle][config]['.$key.']['.$value.']',theme_config('home.particle.config.'.$key.'.'.$value))}}"
           name="home[particle][config][{{$key}}][{{$value}}]"
           type="color">
    </div>
@endif

@if($type === "checkbox")
    <div class="my-2">
        <div class="form-check form-switch mt-2">
            <input type="checkbox" class="form-check-input"
                   id="input-checkbox-homeParticleConfig-{{$key}}-{{$value}}"
                   name="home[particle][config][{{$key}}][{{$value}}]"
                   @if( theme_config('home.particle.config.'.$key.'.'.$value)) checked @endif>
            <label class="form-check-label" for="input-checkbox-homeParticleConfig-{{$key}}-{{$value}}">{{$label}}</label>
        </div>
    </div>
@endif
