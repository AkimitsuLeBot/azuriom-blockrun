<div class="py-2 row">
    <label for="input-text-homeParticleConfig-{{$key}}-{{$value}}" class="col-3 form-label">{{$label}}</label>
    <select id="input-text-homeParticleConfig-{{$key}}-{{$value}}"
            name="home[particle][config][{{$key}}][{{$value}}]"
            class="form-control col-9">
        @foreach($options as $option)
            <option value="{{$option}}"
                    @if(theme_config('home.particle.config.'.$key.'.'.$value) === $option) selected @endif>{{ $option }}</option>
        @endforeach
    </select>
</div>
