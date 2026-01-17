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
        $banner = ['key'=>'widget_changelog', 'balise' => 2];
        $items = ['key'=> 'widget_changelog',
                                    'filedsBuilder' => [
                                        ['type'=>'input','value' => 'name'],
                                        ['type'=>'range','label' => trans('theme::widget.widget_changelog.item.label.quantity'), 'key'=>'quantity','value'=>'quantity','default' =>'3','min'=>'1', 'max'=> '5', 'step'=>'1'],
                                        ['type'=>'range','label' => trans('theme::widget.widget_changelog.item.label.clamp'), 'key'=>'clamp','value'=>'clamp','default' =>'4','min'=>'1', 'max'=> '15', 'step'=>'1'],
                            ]];
@endphp
@include('admin.pattern.widget.builder-widget',['banner'=>$banner, 'items' => $items, 'widget'=> $widget])
