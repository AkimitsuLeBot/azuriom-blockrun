@php
    $id_widget_name = isset($id_widget) && $id_widget ? $id_widget :'{widget_id}';
    $id_widget = isset($id_widget) && $id_widget ? $id_widget :  random_int(1,9999);
@endphp
@php
    $widget = ['id' => $id_widget,
               'name' => $id_widget_name,
               'col-lg' => [
                           'default' => $config['col-lg'] ?? 'col-lg-12',
                           'min' => '4',
                           'max' => '12'
                            ],

              ];
    $banner = ['key'=>'article_show', 'balise' => 1];
    $items = ['key'=> 'article_show',
                            'filedsBuilder' => [
                                ['type'=>'checkbox','value' => 'img-hidden'],
                                ['type'=>'checkbox','value' => 'comment-hidden'],
                                ['type'=>'checkbox','value' => 'follow-hidden'],
                                ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
