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
    $items = ['key'=> 'button',
                'filedsBuilder' => [
                    ['type'=>'image','value' => 'media'],
                    ['type'=>'input','value' => 'name'],
                    ['type'=>'input','value' => 'url'],
                    ['type'=>'select','value' => 'onglet','option' => [
                        '_blank' =>  trans('theme::widget.button.item.label._blank'),
                        '_self' => trans('theme::widget.button.item.label._self'),
                        '_parent' => trans('theme::widget.button.item.label._parent'),
                        '_top' => trans('theme::widget.button.item.label._top'),
                        ]
                    ],
                    ['type'=>'select','value' => 'type','option' => [
                        'primary' => 'Primary',
                        'danger' => 'Danger',
                        'warning' => 'Warning',
                        'info' => 'Info',
                        ]
                    ],
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
