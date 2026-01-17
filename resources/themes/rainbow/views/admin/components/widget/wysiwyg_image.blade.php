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
    $items = ['key'=> 'wysiwyg_image',
                'filedsBuilder' => [
                    ['type'=>'input','value' => 'title'],
                    ['type'=>'textarea','value' => 'description'],
                    ['type'=>'image','value' => 'media'],
                    ['type'=>'select','value' => 'media_size','option' => [
                        'small' => 'Small',
                        'medium' => 'Medium',
                        'large' => 'Large',
                        'xl' => 'Extra large',
                        ]
                    ],
                    ['type'=>'input','value' => 'btn_name'],
                    ['type'=>'input','value' => 'btn_url'],
                    ['type'=>'select','value' => 'onglet','option' => [
                        '_blank' =>  trans('theme::widget.button.item.label._blank'),
                        '_self' => trans('theme::widget.button.item.label._self'),
                        '_parent' => trans('theme::widget.button.item.label._parent'),
                        '_top' => trans('theme::widget.button.item.label._top'),
                        ]
                    ],
                    ['type'=>'select','value' => 'btn_type','option' => [
                        'primary' => 'Primary',
                        'danger' => 'Danger',
                        'warning' => 'Warning',
                        'info' => 'Info',
                        ]
                    ],
                    ['type'=>'checkbox','value' => 'contain'],
                    ['type'=>'checkbox','value' => 'reverse'],
                    ['type'=>'select','value' => 'alignement','option' => [
                        'start' => 'Left',
                        'center' => 'Center',
                        'end' => 'Right',
                        ]
                    ],
                    ]
                ];
@endphp
@include('admin.pattern.widget.builder-widget',[ 'items' => $items, 'widget'=> $widget])
