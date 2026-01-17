<div class="accordion" id="accordionParticleShape">
    <div class="card">
        <div class="card-header" id="headingStroke">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseStroke"
                    aria-expanded="false" aria-controls="collapseStroke">Stroke
            </button>
        </div>
        <div id="collapseStroke" class="collapse" aria-labelledby="headingStroke"
             data-bs-parent="#accordionParticleShape">
            <div class="card-body">
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Stroke.width', 'key'=>'shape','value'=>'strokeWidth',
                            'min'=>'0', 'max'=> '20', 'step'=>'1'])
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'color','label' => 'value (single string)', 'key'=>'shape','value'=>'strokeColor'])
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingPolygon">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsePolygon"
                    aria-expanded="false" aria-controls="collapsePolygon">Polygon
            </button>
        </div>
        <div id="collapsePolygon" class="collapse" aria-labelledby="headingPolygon"
             data-bs-parent="#accordionParticleShape">
            <div class="card-body">
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Polygon.nb_sides', 'key'=>'shape','value'=>'polygonNbSides',
                            'min'=>'1', 'max'=> '20', 'step'=>'1'])
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingImage">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseImage"
                    aria-expanded="false" aria-controls="collapseImage">Image
            </button>
        </div>
        <div id="collapseImage" class="collapse" aria-labelledby="headingImage"
             data-bs-parent="#accordionParticleShape">
            <div class="card-body">
                <div class="pb-1 row">
                    <label for="imageSelect-particul"
                           class="col-3">{{ trans('theme::lang.image') }}</label>
                    <div class="input-group mb-3 col-9">
                        <div class="input-group-text">
                            <a class="btn btn-outline-success"
                               href="{{ route('admin.images.create') }}"
                               target="_blank" rel="noopener noreferrer"><i
                                    class="bi bi-upload"></i></a>
                        </div>
                        <select class="form-select"
                                id="imageSelect-shape-imageSrc"
                                name="home[particle][config][shape][imageSrc]"
                                data-image-preview-select="filePreview-shape-imageSrc">
                            <option value="">none</option>
                            @foreach($allImagesStokage as $image)
                                <option value="{{ $image->file }}"
                                        @if(theme_config('home.particle.config.shape.imageSrc') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="@if(theme_config('home.particle.config.shape.imageSrc')) {{ image_url(theme_config('home.particle.config.shape.imageSrc')) }} @endif"
                                class="card-img rounded img-preview-sm @if(!theme_config('home.particle.config.shape.imageSrc'))d-none @endif"
                                id="filePreview-shape-imageSrc"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'text','label' => 'Image.width', 'key'=>'shape','value'=>'imageWidth'])
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'text','label' => 'Image.height', 'key'=>'shape','value'=>'imageHeight'])
            </div>
        </div>
    </div>
</div>
@includeIf('admin.pattern.particle.form.select',
            ['label' => 'Type', 'key'=>'shape','value'=>'type', 'options'=> ['circle','edge','triangle','polygon','star','image']])

