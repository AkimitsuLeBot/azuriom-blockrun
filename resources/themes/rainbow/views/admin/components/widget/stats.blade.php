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
    $banner = ['key'=>'stats', 'balise' => 2];
    $items = ['key'=> 'stats', 'filedsBuilder' => [
                                    ['type'=>'builderInputs',
                                    'key' => 'stats',
                                    'labels' => [trans('theme::lang.name'),trans('theme::lang.number')],
                                    'inputs' => [
                                        ['key' => 'name', 'value'=>'name', 'index' => 1],
                                        ['key' => 'number', 'value'=>'number', 'index' => 1],
                                    ]],
                                ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
