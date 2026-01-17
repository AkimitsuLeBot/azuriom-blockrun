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
        $banner = ['key'=>'backgroundLogo', 'balise' => 1];
        $items = ['key'=> 'backgroundLogo',
                                'filedsBuilder' => [
                                    ['type'=>'checkbox','value' => 'hidden'],
                                ]];

        $backgroundPage = [
                        'key'=> 'backgroundLogo',
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
                                ]
                            ],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_continue'), 'key'=>'gradient_background_color_continue','value'=>'gradient_background_color_continue','default' =>'8','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_transparency'), 'key'=>'gradient_background_color_transparency','value'=>'gradient_background_color_transparency','default' =>'41','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ]
                        ];
        $homeItemsIpServer = [
                        'key'=> 'backgroundLogo',
                        'value' => 'ipServer',
                        'filedsBuilder' => [
                            ['type'=>'input','value' => 'ip'],
                            ['type'=>'image','value' => 'mediaIp','label' =>1],
                            ['type'=>'image','value' => 'mediaServeOn','label' =>1],
                            ['type'=>'image','value' => 'mediaServeOff','label' =>1],
                            ['type'=>'select','value' => 'position','default' => 'center','option' => $alignSelft
                            ],
                            ['type'=>'checkbox','value' => 'hidden'],
                            ]
                        ];

        $homeItemsDownload = [
                            'key'=> 'backgroundLogo',
                            'value' => 'logo',
                            'filedsBuilder' => [
                                ['type'=>'image','value' => 'media'],
                                ['type'=>'select','value' => 'position','default' => 'center','option' => $alignSelft
                                ],
                                ['type'=>'checkbox','value' => 'animation'],
                                ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ];
        $homeItemsCountResgister = [
                                'key'=> 'backgroundLogo',
                                'value' => 'register',
                                'filedsBuilder' => [
                                    ['type'=>'image','value' => 'mediaRegister'],
                                    ['type'=>'checkbox','value' => 'hidden'],
                                    ['type'=>'select','value' => 'style','option' => [
                                        'register' => 'Inscrits / Register',
                                        'discord' => 'Discord',
                                        ]
                                    ],
                                    ['type'=>'input','value' => 'textRegister'],
                                    ['type'=>'input','value' => 'textDiscord'],
                                    ['type'=>'input','value' => 'linkDiscord'],
                                    ['type'=>'input','value' => 'discord_key'],
                                    ['type'=>'select','value' => 'position','default' => 'center','option' => $alignSelft
                                    ],
                                    ]
                                ];
@endphp
<div class="col-lg-12 h-auto mb-4 sortable-item builder-background js-detect-background">
    <input type="hidden" class="js-detect-page js-detect-background-id" name="{page}[background][backgroundLogo]"
           value="{{$id_background_name}}">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title mb-0">Background Logo</h4>
            <button type="button" class="btn btn-outline-danger mx-2 js-background-close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 my-3">
                    @include('admin.pattern.background.background' ,$backgroundPage)
                </div>
                <div class="col-xl-4 col-lg-6">
                    @include('admin.pattern.background.background' ,$homeItemsIpServer)
                </div>
                <div class="col-xl-4 col-lg-6">
                    @include('admin.pattern.background.background',$homeItemsDownload)
                </div>
                <div class="col-xl-4 col-lg-6">
                    @include('admin.pattern.background.background',$homeItemsCountResgister)
                </div>
            </div>
        </div>
    </div>
</div>
