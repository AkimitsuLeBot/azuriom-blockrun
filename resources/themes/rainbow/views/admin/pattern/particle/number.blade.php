@includeIf('admin.pattern.particle.form.input',
                           ['type'=>'range','label' => 'Value', 'key'=>'number','value'=>'value',
                           'min'=>'1', 'max'=> '600', 'step'=>'1'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Density.enable', 'key'=>'number','value'=>'densityEnable'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Density.value_area', 'key'=>'number','value'=>'DensityValue',
            'min'=>'1', 'max'=> '10000', 'step'=>'1'])
