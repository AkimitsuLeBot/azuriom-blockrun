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
    $banner = ['key'=>'vote_classement', 'balise' => 2];
    $items = ['key'=> 'vote_classement',
                                'value' => 'rewards',
                                'filedsBuilder' => [
                                    ['type'=>'checkbox','value' => 'hidden_skin'],
                                    ['type'=>'builderInputs',
                                    'key' => 'rewards',
                                    'labels' => ['Rewards'],
                                    'inputs' => [
                                        ['key' => 'rewards', 'value'=>'name', 'index' => 1],
                                    ]],
                                ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
