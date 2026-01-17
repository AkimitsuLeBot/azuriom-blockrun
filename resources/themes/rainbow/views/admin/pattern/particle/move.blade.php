@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Enable', 'key'=>'move','value'=>'enable'])

@includeIf('admin.pattern.particle.form.select',
            ['label' => 'Direction', 'key'=>'move','value'=>'direction',
            'options'=> ['none','top','top-right','right','bottom-right','bottom','bottom-left','left','top-left']])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Random', 'key'=>'move','value'=>'random'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Straight', 'key'=>'move','value'=>'straight'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Speed', 'key'=>'move','value'=>'speed',
            'min'=>'0', 'max'=> '200', 'step'=>'1'])

@includeIf('admin.pattern.particle.form.select',
            ['label' => 'Out_mode', 'key'=>'move','value'=>'outMode',
            'options'=> ['out','bounce']])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'checkbox','label' => 'Attract.enable', 'key'=>'move','value'=>'attractEnable'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Attract.rotateX', 'key'=>'move','value'=>'attractRotateX',
            'min'=>'0', 'max'=> '10000', 'step'=>'1'])

@includeIf('admin.pattern.particle.form.input',
            ['type'=>'range','label' => 'Attract.rotateT', 'key'=>'move','value'=>'attractRotateY',
            'min'=>'0', 'max'=> '10000', 'step'=>'1'])
