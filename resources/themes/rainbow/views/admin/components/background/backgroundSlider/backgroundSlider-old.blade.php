@push('footer-scripts')
    <script >
        function backgroundServerSliderOld() {
            document.querySelectorAll('.command-remove-slider').forEach(function (el) {
                addCommandIconMenu(el);
            });
            if (document.getElementById('addCommandButton')) {
                document.getElementById('addCommandButton').addEventListener('click', function () {
                    let i = 1;
                    let input = `@include('admin.components.background.background-server-ip.slider-old')`;

                    const newElement = document.createElement('div');
                    newElement.classList.add('slider', 'col-xl-4', 'col-lg-6', 'my-3')
                    newElement.innerHTML = input
                    addCommandIconMenu(newElement.querySelector('.command-remove-slider'));

                    document.getElementById('sliders').appendChild(newElement);
                    document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                        let count = i++
                        el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                        el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                        el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                        imagePreviewSelect(el.querySelector('select'))
                    })

                });
            }
        }

        function addCommandIconMenu(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.slider');
                element.parentNode.removeChild(element);
                document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                })
            });
        }

        function configFormSlider(i) {
            if (document.getElementById('sliders')) {
                document.getElementById('sliders').querySelectorAll('.form-row').forEach(function (el) {
                    el.querySelectorAll('input').forEach(function (input) {
                        input.name = input.name.replace('{index}', i.toString());
                    });
                    el.querySelectorAll('select').forEach(function (select) {
                        select.name = select.name.replace('{index}', i.toString());
                    });

                    i++;
                });
            }
        }

    </script>
@endpush
<div class="col-lg-12 h-auto mb-4 sortable-item builder-background js-detect-background backgroundSliderOld">
        @php
            $homeItemsIpServer = [
                            'url'=>route('home'),
                            'key'=> 'home',
                            'value' => 'ip-server',
                            'filedsBuilder' => [
                                ['type'=>'input','value' => 'ip'],
                                ['type'=>'image','value' => 'media','label' =>1],
                                ['type'=>'image','value' => 'mediaServeOn','label' =>1],
                                ['type'=>'image','value' => 'mediaServeOff','label' =>1],
                                ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ];

            $homeItemsDownload = [
                            'url'=>route('home'),
                            'key'=> 'home',
                            'value' => 'download',
                            'filedsBuilder' => [
                                ['type'=>'input','value' => 'name'],
                                ['type'=>'input','value' => 'url'],
                                ['type'=>'checkbox','value' => 'hidden'],
                                ]
                            ];
            $homeItemsCountResgister = [
                            'url'=>route('home'),
                                    'key'=> 'home',
                                    'value' => 'count-register',
                                    'filedsBuilder' => [
                                        ['type'=>'image','value' => 'media'],
                                        ['type'=>'checkbox','value' => 'hidden'],
                                        ]
                                    ];
        @endphp
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">{{trans('theme::lang.home.slider.title')}}</h4>
                <button type="button" class="btn btn-outline-danger mx-2 js-background-close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="card-body">
                <div class="small font-italic mb-2">{!! trans('theme::lang.home.slider.info')!!}</div>
                <button type="button" id="addCommandButton" class="btn btn-sm btn-success">
                    <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                </button>
                <div id="sliders" class="row">
                    @forelse( theme_config('sliders') ?? [] as $slider )

                        <div class="slider col-xl-4 col-lg-6 my-3">
                            @include('admin.components.background.background-server-ip.slider-old')
                        </div>
                    @empty
                        <div class="slider col-xl-4 col-lg-6 my-3">
                            @include('admin.components.background.background-server-ip.slider-old')
                        </div>
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        @include('admin.pattern.items.items' ,$homeItemsIpServer)
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        @include('admin.pattern.items.items',$homeItemsDownload)
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        @include('admin.pattern.items.items',$homeItemsCountResgister)
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
