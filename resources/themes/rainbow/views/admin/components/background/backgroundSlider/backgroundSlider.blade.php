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
        $banner = ['key'=>'backgroundSlider'];
        $items = ['key'=> 'backgroundSlider',
                                'filedsBuilder' => [
                                    ['type'=>'checkbox','value' => 'hidden'],
                                ]];


        $backgroundPage = [
                        'key'=> 'backgroundSlider',
                        'value' => 'background',
                        'is_aos' => false,
                        'filedsBuilder' => [
                            ['type'=>'image','value' => 'background','label' =>1],
                            ['type'=>'select','value' => 'height','default' => '90','option' => [
                                '100' => '100%',
                                '90' => '90%',
                                '80' => '80%',
                                '70' => '70%',
                                ]
                            ],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_continue'), 'key'=>'gradient_background_color_continue','value'=>'gradient_background_color_continue','default' =>'8','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ['type'=>'range','label' => trans('theme::background.gradient_background_color_transparency'), 'key'=>'gradient_background_color_transparency','value'=>'gradient_background_color_transparency','default' =>'41','min'=>'0', 'max'=> '100', 'step'=>'1'],
                            ]
                        ];

        $homeItemsIpServer = [
                        'key'=> 'backgroundSlider',
                        'value' => 'ipServer',
                        'filedsBuilder' => [
                            ['type'=>'input','value' => 'ip'],
                            ['type'=>'image','value' => 'mediaIp','label' =>1],
                            ['type'=>'image','value' => 'mediaServeOn','label' =>'1'],
                            ['type'=>'image','value' => 'mediaServeOff','label' =>1],
                            ['type'=>'select','value' => 'position','default' => 'center','option' => $alignSelft
                            ],
                            ['type'=>'checkbox','value' => 'hidden'],
                            ]
                        ];

        $homeItemsDownload = [
                        'key'=> 'backgroundSlider',
                        'value' => 'download',
                        'filedsBuilder' => [
                            ['type'=>'input','value' => 'name'],
                            ['type'=>'input','value' => 'url'],
                            ['type'=>'select','value' => 'position','default' => 'center','option' => $alignSelft
                            ],
                            ['type'=>'checkbox','value' => 'hidden'],
                            ]
                        ];
        $homeItemsCountResgister = [
                                'key'=> 'backgroundSlider',
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
@push('footer-scripts')
    <script>
        function backgroundServerSlider() {
            if (document.querySelector('.backgroundSlider')) {
                document.querySelectorAll('.command-remove-slider').forEach(function (el) {
                    addCommandIconMenu(el);
                });
                document.querySelectorAll('.addCommandButton').forEach(function (addCommandButton) {
                    addCommandButton.addEventListener('click', function () {
                        let i = 1;
                        let input = `@include('admin.components.background.backgroundSlider.slider', ['key'=> 'backgroundSlider'])`;

                        const newElement = document.createElement('div');
                        newElement.classList.add('slider', 'col-xl-4', 'col-lg-6', 'my-3')
                        newElement.innerHTML = input
                        addCommandIconMenu(newElement.querySelector('.command-remove-slider'));

                        let sliders = addCommandButton.closest('.card-body').querySelector('.sliders')
                        sliders.appendChild(newElement);
                        sliders.querySelectorAll('.slider').forEach(function (el) {
                            let count = i++
                            el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                            el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                            el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                            imagePreviewSelect(el.querySelector('select'))
                        })

                    });
                })
            }
        }

        function addCommandIconMenu(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.slider');
                element.parentNode.removeChild(element);
                element.closest('.sliders').querySelectorAll('.slider').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                })
            });
        }

        function configFormSlider(i) {
            if (document.getElementById('sliders')) {
                document.querySelectorAll('.sliders').forEach(function (slider) {
                    slider.querySelectorAll('.form-row').forEach(function (el) {
                        el.querySelectorAll('input').forEach(function (input) {
                            input.name = input.name.replace('{index}', i.toString());
                        });
                        el.querySelectorAll('select').forEach(function (select) {
                            select.name = select.name.replace('{index}', i.toString());
                        });

                        i++;
                    });
                })
            }
        }

    </script>
@endpush

<div class="col-lg-12 h-auto mb-4 sortable-item builder-background js-detect-background backgroundSlider">
    <input type="hidden" class="js-detect-page js-detect-background-id" name="{page}[background][backgroundSlider]"
           value="{{$id_background_name}}">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title mb-0">Background Slider</h4>
            <button type="button" class="btn btn-outline-danger mx-2 js-background-close">
                <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
            </button>
        </div>
        <div class="card-body">
            <div class="small font-italic mb-2">{!! trans('theme::lang.home.slider.info')!!}</div>
            <button type="button" id="addCommandButton" class="btn btn-sm btn-success addCommandButton">
                <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
            </button>
            <div id="sliders" class="row sliders">
                @forelse( theme_config('background.'.$background['id'].'.backgroundSlider.sliders') ?? [] as $slider )
                    <div class="slider col-xl-4 col-lg-6 my-3">
                        @include('admin.components.background.backgroundSlider.slider', ['key'=> 'backgroundSlider'])
                    </div>
                @empty
                    <div class="slider col-xl-4 col-lg-6 my-3">
                        @include('admin.components.background.backgroundSlider.slider', ['key'=> 'backgroundSlider'])
                    </div>
                @endforelse
            </div>
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
