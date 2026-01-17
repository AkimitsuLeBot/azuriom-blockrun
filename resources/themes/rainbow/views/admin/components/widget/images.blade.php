@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);
    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '1',
                           'max' => '12'
                            ],

              ];
    $items = ['key'=> 'images',
                'filedsBuilder' => [
                    ['type'=>'image','value' => 'media'],
                    ['type'=>'input','value' => 'title'],
                    ['type'=>'select','value' => 'alignement','option' => [
                        'end' => 'Right',
                        'center' => 'Center',
                        'start' => 'Left',
                        ]
                    ],
                    ['type'=>'range','label' => 'Taille L (px)', 'key'=>'move','value'=>'size','default' =>'0.3','min'=>'0', 'max'=> '1500', 'step'=>'1'],
                    ]
                ];
@endphp
@include('admin.pattern.widget.builder-widget',[ 'items' => $items, 'widget'=> $widget])
