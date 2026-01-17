@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);

    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '3',
                           'max' => '12'
                            ],

              ];
    $banner = ['key'=>'social_networks', 'balise' => 2];
    $items = ['key'=> 'social_networks',
                            'filedsBuilder' => [
                                ['type'=>'select','value' => 'style','option' => [
                                    0 => 'Style N°1',
                                    1 => 'Style N°2',
                                    2 => 'Style N°3',
                                    ]
                                ],
                            ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
