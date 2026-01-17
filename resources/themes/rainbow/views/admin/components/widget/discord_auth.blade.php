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
    $items = ['key'=> 'discord_auth',
                        'filedsBuilder' => [
                            ['type'=>'image','value' => 'media'],
                            ['type'=>'input','value' => 'text'],
                            ]
                        ];
@endphp
@include('admin.pattern.widget.builder-widget',['items' => $items, 'widget'=> $widget])
