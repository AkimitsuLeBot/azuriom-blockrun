@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Enable_auto', 'key'=>'line_linked','value'=>'enableAuto'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Distance', 'key'=>'line_linked','value'=>'distance',
            'min'=>'0', 'max'=> '2000', 'step'=>'1'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'color','label' => 'Color', 'key'=>'line_linked','value'=>'color'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Opacity', 'key'=>'line_linked','value'=>'opacity',
            'min'=>'0', 'max'=> '1', 'step'=>'0.01'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Width', 'key'=>'line_linked','value'=>'width',
            'min'=>'0', 'max'=> '20', 'step'=>'1'])


