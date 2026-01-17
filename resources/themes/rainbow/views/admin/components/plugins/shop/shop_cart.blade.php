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
    $banner = ['key'=>'shop_cart', 'balise' => 1];
    $items = [
            ['key'=> 'shop_cart',
                        'is_aos' => false,
                        'filedsBuilder' => [
                                ['type'=>'input','value' => 'nameCgv'],
                                ['type'=>'input','value' => 'linnkCgv'],
                            ]
                        ],
            ['key'=> 'shop_coupons',
                        'filedsBuilder' => [
                                ['type'=>'input','value' => 'title'],
                            ]
                        ],
            ['key'=> 'shop_add_coupons',
                        'filedsBuilder' => [
                                ['type'=>'input','value' => 'title'],
                            ]
                        ]
            ];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
