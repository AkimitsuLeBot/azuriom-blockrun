@push('footer-scripts')
    <script>
        window.addEventListener('DOMContentLoaded', function (event) {
            document.querySelectorAll('.command-remove').forEach(function (el) {
                addCommandListenerParticul(el)
            });

            document.getElementById('addIconParticuls').addEventListener('click', function () {
                let i = 1;
                let input = `@include('admin.pattern.iconParticul')`;

                const newElement = document.createElement('div');
                newElement.classList.add('iconParticul', 'col-xl-4', 'col-lg-6', 'my-3')
                newElement.innerHTML = input
                addCommandListenerParticul(newElement.querySelector('.command-remove'));

                document.getElementById('iconParticuls').appendChild(newElement);
                document.getElementById('iconParticuls').querySelectorAll('.iconParticul').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                    el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                    el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                    imagePreviewSelect(el.querySelector('select'))
                })

            });
        });

        function addCommandListenerParticul(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.iconParticul');
                element.parentNode.removeChild(element);
                document.getElementById('iconParticuls').querySelectorAll('.iconParticul').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Icon ' + count;
                })
            });
        }

        function configFormIconParticul(i) {
            document.getElementById('iconParticuls').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                el.querySelectorAll('select').forEach(function (select) {
                    select.name = select.name.replace('{index}', i.toString());
                });

                i++;
            });
        }

    </script>
@endpush
<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">
        {{trans('theme::lang.global.title')}}
    </h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ trans('theme::lang.general.style') }}</h4>
                </div>
                <div class="card-body">
                    <select name="header[style]" id="select-style" class="form-control">
                        @foreach($themes as $key => $value)
                            <option value="{{ $key }}"
                                    @if(theme_config('header.style') == $key) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ trans('theme::lang.meta.title') }}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.meta.color.info')!!}</div>
                    <div class="form-group">
                        <label for="header_meta_color">{{ trans('theme::lang.meta.color.label') }}</label>
                        <input type="color"
                               class="form-contro"
                               id="header_meta_color"
                               name="header[meta][color]"
                               value="{{ old('header[meta][color]', theme_config('header.meta.color')) }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.header.preloader.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.header.preloader.info')!!}</div>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerPreloader"
                               name="header[preloader][hidden]"
                               @if(theme_config('header.preloader.hidden')) checked @endif>
                        <label class="form-check-label" for="headerPreloader">
                            {{trans('theme::lang.header.preloader.hidden')}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ trans('theme::lang.home.particle.title') }}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.home.particle.info')!!}</div>
                    <div class="form-group">
                        <label for="select-content">{{ trans('theme::lang.home.particle.content') }}</label>
                        <select name="home[particle][content]" id="select-content" class="form-control mb-3">
                            @foreach($particleContent as $key => $value)
                                <option value="{{ $value }}"
                                        @if(theme_config('home.particle.content') == $value) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select-style">{{ trans('theme::lang.home.particle.style') }}</label>
                        <select name="home[particle][style]" id="select-style"
                                class="form-control mb-3 js-select-trigger-particlejs">
                            @foreach($particleStyle as $key => $value)
                                <option value="{{ $value }}"
                                        @if(theme_config('home.particle.style') == $value) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div
                        class="form-group js-select-trigger-particlejs-target {{theme_config('home.particle.style') === 'custom' ? '':'d-none' }}">
                        @includeIf('admin.pattern.particle.particlesjs')
                    </div>
                    <button type="button" id="addIconParticuls" class="btn btn-sm btn-success d-none">
                        <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                    </button>
                    <div id="iconParticuls" class="row d-none">
                        @forelse( theme_config('home.particle.icons') ?? [] as $icon )
                            <div class="iconParticul col-xl-4 col-lg-6 my-3">
                                @include('admin.pattern.iconParticul')
                            </div>
                        @empty
                            <div class="iconMenu col-xl-4  col-lg-6 my-3">
                                @include('admin.pattern.iconParticul')
                            </div>
                        @endforelse
                    </div>
                    <div class="ps-3 mb-3">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="homeParticleHidden"
                                   name="home[particle][hidden]"
                                   @if(theme_config('home.particle.hidden')) checked @endif>
                            <label class="form-check-label" for="homeParticleHidden">
                                {{ trans('theme::lang.home.particle.hidden') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ trans('theme::lang.cursor.title') }}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.cursor.media.info')!!}</div>
                    <div class="mb-3">
                        <label for="imageSelect-particul">{{ trans('theme::lang.cursor.media.label') }}</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <a class="btn btn-outline-success"
                                   href="{{ route('admin.images.create') }}"
                                   target="_blank" rel="noopener noreferrer"><i
                                        class="bi bi-upload"></i></a>
                            </div>
                            <select class="form-select"
                                    id="imageSelect-shape-imageSrc"
                                    name="header[cursor]"
                                    data-image-preview-select="filePreview-shape-imageSrc">
                                <option value="">none</option>
                                @foreach($allImagesStokage as $image)
                                    <option value="{{ $image->file }}"
                                            @if(theme_config('header.cursor') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3 w-100">
                                <img
                                    src="@if(theme_config('header.cursor')) {{ image_url(theme_config('header.cursor')) }} @endif"
                                    class="card-img rounded img-preview-sm @if(!theme_config('header.cursor'))d-none @endif"
                                    id="filePreview-shape-imageSrc"
                                    style="object-fit: contain">
                            </div>
                        </div>
                    </div>

                    <label for="imageSelect-particul">{{ trans('theme::lang.cursor.media_link.label') }}</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <a class="btn btn-outline-success"
                               href="{{ route('admin.images.create') }}"
                               target="_blank" rel="noopener noreferrer"><i
                                    class="bi bi-upload"></i></a>
                        </div>
                        <select class="form-select"
                                id="imageSelect-shape-imageSrc"
                                name="header[cursor_link]"
                                data-image-preview-select="filePreview-shape-imageSrc_link">
                            <option value="">none</option>
                            @foreach($allImagesStokage as $image)
                                <option value="{{ $image->file }}"
                                        @if(theme_config('header.cursor') === $image->file) selected @endif>{{ $image->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3 w-100">
                            <img
                                src="@if(theme_config('header.cursor')) {{ image_url(theme_config('header.cursor')) }} @endif"
                                class="card-img rounded img-preview-sm @if(!theme_config('header.cursor'))d-none @endif"
                                id="filePreview-shape-imageSrc_link"
                                style="object-fit: contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
