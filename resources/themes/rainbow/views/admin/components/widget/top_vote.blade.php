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
    $banner = ['key'=>'top_vote', 'balise' => 2];
    $items = ['key'=> 'top_vote',
                            'filedsBuilder' => [
                                ['type'=>'select','value' => 'style','option' => [
                                    0 => 'Style N°1',
                                    1 => 'Style N°2',
                                    ]
                                ],
                                ['type'=>'select','value' => 'selectSkinInterface','option' => $selectSkinInterface],
                                ['type'=>'select','value' => 'selectSkin','option' => $selectSkin],
                                ['type'=>'range','label' => trans('theme::widget.top_vote.item.label.maxPlayer'), 'key'=>'quantity','value'=>'quantity','default' =>'1','min'=>'0', 'max'=> '10', 'step'=>'1'],
                                ['type'=>'color','value' => 'color_top_1','default' => '#f7ce45'],
                                ['type'=>'color','value' => 'color_top_2','default' => '#a29f96'],
                                ['type'=>'color','value' => 'color_top_3','default' => '#6d4a22'],
                                ['type'=>'color','value' => 'color_top_7','default' => '#ffffff'],
                            ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
