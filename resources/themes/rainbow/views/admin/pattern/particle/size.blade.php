<div class="accordion" id="accordionParticleAnim">
    <div class="card">
        <div class="card-header" id="headingAnim">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseAnim"
                    aria-expanded="false" aria-controls="collapseAnim">Anim
            </button>
        </div>
        <div id="collapseAnim" class="collapse" aria-labelledby="headingAnim"
             data-bs-parent="#accordionParticleAnim">
            <div class="card-body">
                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'checkbox','label' => 'Anim.enable', 'key'=>'size','value'=>'animEnable'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Anim.speed', 'key'=>'size','value'=>'animSpeed',
                            'min'=>'1', 'max'=> '300', 'step'=>'1'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'range','label' => 'Anim.size_min', 'key'=>'size','value'=>'animSizeMin',
                            'min'=>'1', 'max'=> '100', 'step'=>'1'])

                @includeIf('admin.pattern.particle.form.input',
                            ['type'=>'checkbox','label' => 'Anim.sync', 'key'=>'size','value'=>'animSync'])
            </div>
        </div>
    </div>
</div>
@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Value', 'key'=>'size','value'=>'value',
            'min'=>'0', 'max'=> '500', 'step'=>'1'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Random', 'key'=>'size','value'=>'random'])
