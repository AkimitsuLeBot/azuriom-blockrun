@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);
    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '4',
                           'max' => '12'
                            ],

              ];
    $items = ['key'=> 'vote_podium',
                'filedsBuilder' => [
                        ['type'=>'color','value' => 'color_top_1','default' => '#f7ce45'],
                        ['type'=>'color','value' => 'color_top_2','default' => '#a29f96'],
                        ['type'=>'color','value' => 'color_top_3','default' => '#6d4a22'],
                    ]];
@endphp
@include('admin.pattern.widget.builder-widget',['items' => $items, 'widget'=> $widget])
