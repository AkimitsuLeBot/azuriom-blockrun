@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);
@endphp
@php
    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '6',
                           'max' => '12'
                            ],

              ];
    $items = [['key'=> 'slogan',
                'filedsBuilder' => [
                    ['type'=>'input','value' => 'title'],
                    ['type'=>'image','value' => 'block_1_media', 'label' =>1],
                    ['type'=>'range','label' => 'Taille L (px)', 'key'=>'move','value'=>'block_1_media_size','default' =>'95','min'=>'0', 'max'=> '330', 'step'=>'1'],
                    ['type'=>'input','value' => 'block_1_title'],
                    ['type'=>'input','value' => 'block_1_description'],
                    ['type'=>'input','value' => 'block_1_link'],
                    ['type'=>'select','value' => 'block_1_onglet','option' => [
                        '_blank' =>  trans('theme::widget.button.item.label._blank'),
                        '_self' => trans('theme::widget.button.item.label._self'),
                        '_parent' => trans('theme::widget.button.item.label._parent'),
                        '_top' => trans('theme::widget.button.item.label._top'),
                        ]
                    ],
                    ['type'=>'image','value' => 'block_2_media', 'label' =>1],
                    ['type'=>'range','label' => 'Taille L (px)', 'key'=>'move','value'=>'block_2_media_size','default' =>'95','min'=>'0', 'max'=> '330', 'step'=>'1'],
                    ['type'=>'input','value' => 'block_2_title'],
                    ['type'=>'input','value' => 'block_2_description'],
                    ['type'=>'input','value' => 'block_2_link'],
                    ['type'=>'select','value' => 'block_2_onglet','option' => [
                        '_blank' =>  trans('theme::widget.button.item.label._blank'),
                        '_self' => trans('theme::widget.button.item.label._self'),
                        '_parent' => trans('theme::widget.button.item.label._parent'),
                        '_top' => trans('theme::widget.button.item.label._top'),
                        ]
                    ],
                    ['type'=>'image','value' => 'block_3_media', 'label' =>1],
                    ['type'=>'range','label' => 'Taille L (px)', 'key'=>'move','value'=>'block_3_media_size','default' =>'95','min'=>'0', 'max'=> '330', 'step'=>'1'],
                    ['type'=>'input','value' => 'block_3_title'],
                    ['type'=>'input','value' => 'block_3_description'],
                    ['type'=>'input','value' => 'block_3_link'],
                    ['type'=>'select','value' => 'block_3_onglet','option' => [
                        '_blank' =>  trans('theme::widget.button.item.label._blank'),
                        '_self' => trans('theme::widget.button.item.label._self'),
                        '_parent' => trans('theme::widget.button.item.label._parent'),
                        '_top' => trans('theme::widget.button.item.label._top'),
                        ]
                    ],
                ]],
                            ];
@endphp
@include('admin.pattern.widget.builder-widget',['items' => $items, 'widget'=> $widget])
