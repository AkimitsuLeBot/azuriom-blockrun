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
    $banner = ['key'=>'wiki_show', 'balise' => 1];
    $items = ['key'=> 'wiki_show',
                                'filedsBuilder' => [
                                ['type'=>'range','label' => trans('theme::lang.wiki.items.wiki-show.spacePerCategory'), 'key'=>'spacePerCategory','value'=>'spacePerCategory','default' =>'0','min'=>'0', 'max'=> '5', 'step'=>'1'],
                            ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
