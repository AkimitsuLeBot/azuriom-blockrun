@php
    $id_background_name = isset($id_background) && $id_background ? $id_background :'{background_id}';
    $id_background = isset($id_background) && $id_background ? $id_background :  random_int(1,9999);

	$background = ['id' => $id_background,
                   'name' => $id_background_name,
                   'col-lg' => [
                               'default' => $config['col-lg'] ?? 'col-lg-12',
                               'min' => '12',
                               'max' => '12'
                                ],

                  ];

        $backgroundPage = [
                        'key'=> 'background',
                        'value' => 'background',
                        'is_aos' => false,
                        'filedsBuilder' => [
                            ['type'=>'image','value' => 'background','label' =>1],
                            ['type'=>'select','value' => 'height','default' => '50','option' => [
                                '100' => '100%',
                                '90' => '90%',
                                '80' => '80%',
                                '70' => '70%',
                                '60' => '60%',
                                '50' => '50%',
                                '40' => '40%',
                                '30' => '30%',
                                ]
                            ],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_continue'), 'key'=>'gradient_background_color_continue','value'=>'gradient_background_color_continue','default' =>'8','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_transparency'), 'key'=>'gradient_background_color_transparency','value'=>'gradient_background_color_transparency','default' =>'41','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ]
                        ];
@endphp
<div class="col-lg-12 h-auto mb-4 sortable-item builder-background js-detect-background">
    <input type="hidden" class="js-detect-page js-detect-background-id" name="{page}[background][background]"
           value="{{$id_background_name}}">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title mb-0">Background</h4>
            <button type="button" class="btn btn-outline-danger mx-2 js-background-close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12">
                    @include('admin.pattern.background.background' ,$backgroundPage)
                </div>
            </div>
        </div>
    </div>
</div>
