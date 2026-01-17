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
    $banner = ['key'=>'shop_offersSelect', 'balise' => 1];
    $items = [ 'key'=> 'shop_offersSelect',
                'filedsBuilder' => [
                    ['type'=>'image','value' => 'media_paypal','label' =>1],
                    ['type'=>'image','value' => 'media_paysafecard_manual','label' =>1],
                    ['type'=>'image','value' => 'media_paypal_express_checkout','label' =>1],
                    ['type'=>'image','value' => 'media_mollie','label' =>1],
                    ['type'=>'image','value' => 'media_paysafecard','label' =>1],
                    ['type'=>'image','value' => 'media_paygol','label' =>1],
                    ['type'=>'image','value' => 'media_stripe','label' =>1],
                    ['type'=>'image','value' => 'media_paymentwall','label' =>1],
                    ['type'=>'image','value' => 'media_xsolla','label' =>1],
                    ['type'=>'image','value' => 'media_dedipass','label' =>1],
                    ]
                ];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
