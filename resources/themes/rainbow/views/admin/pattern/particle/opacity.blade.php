<div class="accordion" id="accordionParticleOpacityAnim">
    <div class="card">
        <div class="card-header" id="headingOpacityAnim">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOpacityAnim"
                    aria-expanded="false" aria-controls="collapseOpacityAnim">Anim
            </button>
        </div>
        <div id="collapseOpacityAnim" class="collapse" aria-labelledby="headingOpacityAnim"
             data-bs-parent="#accordionParticleOpacityAnim">
            <div class="card-body">
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'checkbox','label' => 'Anim.enable', 'key'=>'opacity','value'=>'animEnable'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Anim.speed', 'key'=>'opacity','value'=>'animSpeed',
                            'min'=>'1', 'max'=> '300', 'step'=>'1'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Anim.opacity_min', 'key'=>'opacity','value'=>'animOpacityMin',
                            'min'=>'1', 'max'=> '100', 'step'=>'1'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'checkbox','label' => 'Anim.sync', 'key'=>'opacity','value'=>'animSync'])
            </div>
        </div>
    </div>
</div>
@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Value', 'key'=>'opacity','value'=>'value',
            'min'=>'0', 'max'=> '1', 'step'=>'0.1'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Random', 'key'=>'opacity','value'=>'random'])
