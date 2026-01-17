@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);
    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '8',
                           'max' => '12'
                            ],

              ];
    $banner = ['key'=>'wiki_index', 'balise' => 1];
    $items = ['key'=> 'wiki_index',
                'filedsBuilder' => [
                        ['type'=>'checkbox','value' => 'hidden_text'],
                        ['type'=>'select','value' => 'rows','option' => [
                            4 => 'Default',
                            1 => '1',
                            2 => '2',
                            3 => '3',
                            ]
                        ],
                        ['type'=>'select','value' => 'alignement','option' => [
                            'start' => 'Left',
                            'center' => 'Center',
                            'end' => 'Right',
                            ]
                        ],
                        ['type'=>'select','value' => 'style','option' => [
                            0 => 'Style default',
                            1 => 'Style Miniature',
                            ]
                        ],
                    ]];
	$messageFLash = trans('theme::widget.wiki_index.messageFlash');

@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget, 'messageFLash' => $messageFLash])
