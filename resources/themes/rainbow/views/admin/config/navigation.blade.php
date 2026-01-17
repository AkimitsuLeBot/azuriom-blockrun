@push('footer-scripts')
    <script>
        window.addEventListener('DOMContentLoaded', function (event) {
            document.querySelectorAll('.command-remove').forEach(function (el) {
                addCommandListener(el);
            });

            document.getElementById('addIconMenu').addEventListener('click', function () {
                let i = 1;
                let input = `@include('admin.pattern.iconMenu')`;

                const newElement = document.createElement('div');
                newElement.classList.add('iconMenu', 'col-xl-4', 'col-lg-6', 'my-3')
                newElement.innerHTML = input
                addCommandListener(newElement.querySelector('.command-remove'));

                document.getElementById('iconMenus').appendChild(newElement);
                document.getElementById('iconMenus').querySelectorAll('.iconMenu').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Menu ' + count;
                    el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                    el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                    imagePreviewSelect(el.querySelector('select'))
                })

            });
        });

        function addCommandListener(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.iconMenu');
                element.parentNode.removeChild(element);
                document.getElementById('iconMenus').querySelectorAll('.iconMenu').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Menu ' + count;
                })
            });
        }

        function configFormIconMenus(i) {
            document.getElementById('iconMenus').querySelectorAll('.form-row').forEach(function (el) {
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
    <h3 class="m-0 font-weight-bold text-primary">{{trans('theme::lang.navigation.title')}}</h3>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.header.navbar.title')}}</h4>
                </div>
                <div class="card-body">
{{--                    <div class="small font-italic mb-2">{!! trans('theme::lang.header.navbar.info')!!}</div>--}}

                    <div class="form-group">
                        <label for="select-style-navbar-breakpoint">{{ trans('theme::lang.header.navbar.breakpoint') }}</label>
                        <select name="header[navbar][breakpoint]" id="select-style-navbar-breakpoint"
                                class="form-control mb-3">
                            @foreach($breakpoint as $key => $value)
                                <option value="{{ $key }}"
                                        @if(theme_config('header.navbar.breakpoint') == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="select-style-navbar-style">{{ trans('theme::lang.header.navbar.style') }}</label>
                        <select name="header[navbar][style]" id="select-style-navbar-style"
                                class="form-control mb-3">
                            @foreach($navbarStyle as $key => $value)
                                <option value="{{ $key }}"
                                        @if(theme_config('header.navbar.style') == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label
                            for="select-style-navbar-position">{{ trans('theme::lang.header.navbar.position') }}</label>
                        <select name="header[navbar][position]" id="select-style-navbar-position"
                                class="form-control mb-3">
                            @foreach($navbarPosition as $key => $value)
                                <option value="{{ $key }}"
                                        @if(theme_config('header.navbar.position') == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-range-homeItemSpacement-home-navbar"
                               class="col-12">{{ trans('theme::lang.header.navbar.items_px_spacement') }}</label>
                        <input id="input-range-homeItemSpacement-home-navbar"
                               class="col-9"
                               value="{{old('header[navbar][items_px_spacement]',theme_config('header.navbar.items_px_spacement'))}}"
                               name=header[navbar][items_px_spacement]"
                               type="range"
                               min="0"
                               max="100"
                               step="1"
                               oninput="this.nextElementSibling.value = this.value">
                        <output
                            class="col-2">{{old('header[navbar][items_px_spacement]',theme_config('header.navbar.items_px_spacement'))}}</output>
                    </div>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerNavbarFixed"
                               name="header[navbar][fixed]"
                               @if(theme_config('header.navbar.fixed')) checked @endif>
                        <label class="form-check-label" for="headerNavbarFixed">
                            {{ trans('theme::lang.header.navbar.fixed') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="input-range-homeParticleConfig-home-navbar"
                               class="col-12">{{ trans('theme::lang.header.navbar.transition_dures') }}</label>
                        <input id="input-range-homeParticleConfig-home-navbar"
                               class="col-9"
                               value="{{old('header[navbar][transition_dures]',theme_config('header.navbar.transition_dures'))}}"
                               name=header[navbar][transition_dures]"
                               type="range"
                               min="0"
                               max="10"
                               step="0.1"
                               oninput="this.nextElementSibling.value = this.value">
                        <output
                            class="col-2">{{old('header[navbar][transition_dures]',theme_config('header.navbar.transition_dures'))}}</output>
                    </div>

                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerDiscord'Hidden"
                               name="header[discord][hidden]"
                               @if(theme_config('header.discord.hidden')) checked @endif>
                        <label class="form-check-label" for="headerDiscord'Hidden">
                            {!! trans('theme::lang.header.navbar.hiddenDiscord')  !!}
                        </label>
                    </div>

                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerIcon"
                               name="header[icons]"
                               @if(theme_config('header.icons')) checked @endif>
                        <label class="form-check-label" for="headerIcon">
                            {{ trans('theme::lang.header.navbar.hiddenIcon') }}
                        </label>
                    </div>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerTextHidden"
                               name="header[text][hidden]"
                               @if(theme_config('header.text.hidden')) checked @endif>
                        <label class="form-check-label" for="headerTextHidden">
                            {{ trans('theme::lang.header.navbar.hiddenText') }}
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.header.navbar.logo.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerNavbarLogoCenter"
                               name="header[navbar][logo][center]"
                               @if(theme_config('header.navbar.logo.center')) checked @endif>
                        <label class="form-check-label" for="headerNavbarLogoCenter">
                            {{ trans('theme::lang.header.navbar.logo.center') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="input-range-homeLogoSize-home-navbar"
                               class="col-12">{{ trans('theme::lang.header.navbar.logo.size') }}</label>
                        <input id="input-range-homeLogoSize-home-navbar"
                               class="col-9"
                               value="{{old('header[navbar][logo][size]',theme_config('header.navbar.logo.size'))}}"
                               name=header[navbar][logo][size]"
                               type="range"
                               min="0"
                               max="500"
                               step="1"
                               oninput="this.nextElementSibling.value = this.value">
                        <output
                            class="col-2">{{old('header[navbar][logo][size]',theme_config('header.navbar.logo.size'))}}</output>
                    </div>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="headerLogoHidden"
                               name="header[logo][hidden]"
                               @if(theme_config('header.logo.hidden')) checked @endif>
                        <label class="form-check-label" for="headerLogoHidden">
                            {{ trans('theme::lang.header.navbar.hiddenLogo') }}
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.header.icon.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.header.icon.info')!!}</div>
                    <span class="d-block fw--bold mb-2">
                <span class="text-danger"><i class="bi bi-exclamation-circle-triangle pe-1"></i></span>
                {{ trans('theme::lang.header.icon.alert') }}
            </span>
                    <button type="button" id="addIconMenu" class="btn btn-sm btn-success">
                        <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                    </button>
                    <div id="iconMenus" class="row">
                        @forelse( theme_config('header.iconmenus') ?? [] as $icon )
                            <div class="iconMenu col-xl-4 col-lg-6 my-3">
                                @include('admin.pattern.iconMenu')
                            </div>
                        @empty
                            <div class="iconMenu col-xl-4  col-lg-6 my-3">
                                @include('admin.pattern.iconMenu')
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
