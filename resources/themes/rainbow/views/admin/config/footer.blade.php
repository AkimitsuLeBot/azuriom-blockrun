@push('footer-scripts')
    <script>
        function configFormLiens(i) {
            document.getElementById('liens').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                i++;
            });
        }

        function configFormCondition(i) {
            document.getElementById('conditions').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                i++;
            });
        }

        function addLinkListener(el) {
            el.addEventListener('click', function () {
                const element = el.parentNode.parentNode.parentNode.parentNode;

                element.parentNode.removeChild(element);
            });
        }

        document.querySelectorAll('.link-remove').forEach(function (el) {
            addLinkListener(el);
        });

        document.getElementById('addLiensButton').addEventListener('click', function () {
            let input = '<div class="form-row row g-0 my-2"><div class="form-group col-md"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[liens][links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md ms-md-2"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[liens][links][{index}][url]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-text p-0"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="bi bi-x-lg"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('liens').appendChild(newElement);
        });

        document.getElementById('addConditionsButton').addEventListener('click', function () {
            let input = '<div class="form-row row g-0 my-2"><div class="form-group col-md"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[conditions][links][{index}][name]" placeholder="{{ trans('theme::lang.name') }}"></div></div>';
            input += '<div class="form-group col-md ms-md-2"><div class="input-group">';
            input += '<input type="text" class="form-control" name="footer[conditions][links][{index}][url]" placeholder="{{ trans('theme::lang.link') }}">';
            input += '<div class="input-group-text p-0"><button class="btn btn-outline-danger link-remove" type="button">';
            input += '<i class="bi bi-x-lg"></i></button></div></div></div></div></div>';

            const newElement = document.createElement('div');
            newElement.innerHTML = input;

            addLinkListener(newElement.querySelector('.link-remove'));

            document.getElementById('conditions').appendChild(newElement);
        });

    </script>
@endpush
<div class="card-header">
    <h3 class="m-0 fw--bold text-primary">{{ trans('theme::lang.footer.title') }}</h3>
</div>
<div class="card-body">
    <div class="row">

        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label class="form-label"
                               for="footer_global_alignment">{{ trans('theme::lang.alignment-h') }}</label>
                        <select name="footer[global][alignment]" id="footer_global_alignment"
                                class="form-control">
                            @foreach($justifyContent as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.global.alignment') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="footer_global_reverse"
                               name="footer[global][reverse]"
                               @if(theme_config('footer.global.reverse')) checked @endif>
                        <label class="form-check-label" for="footer_global_reverse">
                            {{ trans('theme::lang.footer.global.reverse') }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.logo.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="my-2">
                        <label
                                for="input-range-footer-logo-media">{{ trans('theme::background.image') }}</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <a class="btn btn-outline-success"
                                   href="{{ route('admin.images.create') }}"
                                   target="_blank" rel="noopener noreferrer"><i
                                            class="bi bi-upload"></i></a>
                            </div>
                            <select class="form-select js-detect-row js-detect-page js-detect-widget-id"
                                    id="input-range-footer-logo-media"
                                    name="footer[logo][media]"
                                    data-image-preview-select="filePreview-footer-media">
                                <option value="">none</option>
                                @foreach($allImagesStokage as $image)
                                    <option value="{{ $image->file }}"
                                            @if(theme_config('footer.logo.media') === $image->file) selected @endif>{{ $image->name }}</option>
                                @endforeach
                            </select>
                            <div class="w-100">
                                <img
                                        src="{{ theme_config('footer.logo.media') ? image_url( old('footer[logo][media]', theme_config('footer.logo.media')) ): ''}}"
                                        alt="{{ old('footer[logo][media]', theme_config('footer.logo.media')) }}"
                                        class="card-img rounded img-preview-sm @if(!theme_config('footer.logo.media'))d-none @endif"
                                        id="filePreview-footer-media"
                                        style="object-fit: contain;max-height: 90px">
                            </div>
                        </div>
                    </div>
                    <div class="pb-2 row">
                        <label for="input-range-footer-logo-opacity" class="col-12 form-label">Opacity</label>
                        <input id="input-range-footer-logo-opacity"
                               class="col-7"
                               value="{{old('footer[logo][opacity]',theme_config('footer.logo.opacity'))}}"
                               name="footer[logo][opacity]"
                               type="range"
                               min="0.1"
                               max="1"
                               step="0.1"
                               oninput="this.nextElementSibling.value = this.value">
                        <output
                            class="col-2">{{old('footer[logo][opacity]',theme_config('footer.logo.opacity'))}}</output>
                    </div>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="footerLogo"
                               name="footer[logo][hidden]"
                               @if(theme_config('footer.logo.hidden')) checked @endif>
                        <label class="form-check-label" for="footerLogo">
                            {{trans('theme::lang.footer.logo.hidden')}}
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.social.title')}}</h4>
                </div>

                <div class="card-body">
                    <div class="mb-2">
                        <label class="form-label"
                               for="footer_socialLinks_alignment">{{ trans('theme::lang.alignment-h') }}</label>
                        <select name="footer[socialLinks][alignment]" id="footer_socialLinks_alignment"
                                class="form-control">
                            @foreach($alignText as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.socialLinks.alignment') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{route('admin.social-links.index')}}" title="{{trans('admin.social_links.create')}}"
                       target="_blank">{{trans('admin.social_links.create')}}</a>

                    <div class="my-2 form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="footerSocialLinks"
                               name="footer[socialLinks][hidden]"
                               @if(theme_config('footer.socialLinks.hidden')) checked @endif>
                        <label class="form-check-label" for="footerSocialLinks">
                            {{trans('theme::lang.footer.socialLinks.hidden')}}
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{ trans('theme::lang.description') }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label class="form-label" for="footer_title">{{ trans('theme::lang.title') }}</label>
                        <input type="text"
                               class="form-control @error('footer[title]') is-invalid @enderror"
                               id="footer_title"
                               name="footer[title]"
                               value="{{ old('footer[title]', theme_config('footer.title')) }}">
                        @error('footer[title]')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label"
                               for="footer_description">{{ trans('theme::lang.description') }}</label>
                        <textarea type="text"
                                  class="form-control @error('footer[description]') is-invalid @enderror"
                                  id="footer_description"
                                  name="footer[description]"
                                  rows="6">{{ old('footer[description]', theme_config('footer.description')) }}</textarea>
                    </div>
                    <div class="mb-2">
                        <label class="form-label"
                               for="footer_description_c_alignment">{{ trans('theme::lang.alignment-h') }}</label>
                        <select name="footer[description_c][alignment]" id="footer_description_c_alignment"
                                class="form-control">
                            @foreach($alignText as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.description_c.alignment') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.liens.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="footer_liens" class="form-label">{{trans('theme::lang.title')}}</label>
                        <input type="text"
                               class="form-control @error('footer[liens][title]') is-invalid @enderror"
                               id="footer_liens"
                               name="footer[liens][title]"
                               value="{{ old('footer[liens][title]', theme_config('footer.liens.title')) }}">
                    </div>

                    <div class="mt-2">
                        <label class="form-label"
                               for="footer_liens_alignment">{{ trans('theme::lang.alignment-h') }}</label>
                        <select name="footer[liens][alignment]" id="footer_liens_alignment" class="form-control">
                            @foreach($alignText as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.liens.alignment') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input type="checkbox" class="form-check-input" id="footerLienButton"
                               name="footer[liens][button]"
                               @if(theme_config('footer.liens.button')) checked @endif>
                        <label class="form-check-label" for="footerLienButton">
                            {{trans('theme::lang.footer.liens.button')}}
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="form-label"
                               for="footer_liens_buttonWidth">{{ trans('theme::lang.footer.liens.buttonWidth') }}</label>
                        <select name="footer[liens][buttonWidth]" id="footer_liens_buttonWidth" class="form-control">
                            @foreach($buttonWidthText as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.liens.buttonWidth') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-2">
                        <label class="form-label"
                               for="footer_liens_textAlignement">{{ trans('theme::lang.footer.liens.textAlignement') }}</label>
                        <select name="footer[liens][textAlignement]" id="footer_liens_textAlignement" class="form-control">
                            @foreach($textAlignement as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.liens.textAlignement') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input type="checkbox" class="form-check-input" id="footerLienHidden"
                               name="footer[liens][hidden]"
                               @if(theme_config('footer.liens.hidden')) checked @endif>
                        <label class="form-check-label" for="footerLienHidden">
                            {{trans('theme::lang.footer.liens.hidden')}}
                        </label>
                    </div>

                    <div id="liens" class="mt-3">
                        <div class="small font-italic mb-2">{!! trans('theme::lang.footer.liens.info')!!}</div>

                        <div class="form-row row g-0 my-2">
                            <div class="form-group col-md">
                                <label class="form-label">{{ trans('theme::lang.name') }}</label>
                            </div>
                            <div class="form-group col-md">
                                <label class="form-label">{{ trans('theme::lang.link') }}</label>
                            </div>
                            <div class="form-group col-md">
                                <label class="form-label">{{ trans('theme::lang.target') }}</label>
                            </div>
                        </div>
                        @foreach(theme_config('footer.liens.links') ?? [] as $link)
                            <div class="form-row row g-0 my-2">
                                <div class="form-group col-md">
                                    <input type="text" class="form-control" name="footer[liens][links][{index}][name]"
                                           placeholder="{{ trans('theme::lang.name') }}"
                                           value="{{ $link['name'] ?? '' }}">
                                </div>
                                <div class="form-group col-md">
                                    <input type="text" class="form-control"
                                           name="footer[liens][links][{index}][url]"
                                           placeholder="{{ trans('theme::lang.link') }}"
                                           value="{{ $link['url'] ?? '' }}">
                                </div>
                                <div class="form-group col-md ms-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="footer[liens][links][{index}][target]"
                                               placeholder="true/false"
                                               value="{{ $link['target'] ?? '' }}">
                                        <div class="input-group-text p-0">
                                            <button class="btn btn-outline-danger link-remove" type="button">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-2">
                        <button type="button" id="addLiensButton" class="btn btn-sm btn-success">
                            <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                        </button>
                    </div>

                    <div class="form-check form-switch mt-2">
                        <input type="checkbox" class="form-check-input" id="footerLienServeurlisteHidden"
                               name="footer[liens][serveurliste][active]"
                               @if(theme_config('footer.liens.serveurliste.active')) checked @endif>
                        <label class="form-check-label" for="footerLienServeurlisteHidden">
                            {{trans('theme::lang.footer.liens.serveurliste.active')}}
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="footer_liens"
                               class="form-label">{!! trans('theme::lang.footer.liens.serveurliste.link') !!}</label>
                        <input type="text"
                               class="form-control @error('footer[liens][serveurliste][link]') is-invalid @enderror"
                               id="footer_liens"
                               name="footer[liens][serveurliste][link]"
                               value="{{ old('footer[liens][serveurliste][link]', theme_config('footer.liens.serveurliste.link')) }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.download.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.footer.download.info')!!}</div>
                    <div class="form-row row g-0 my-2">
                        <div class="form-group col-md">
                            <label class="form-label">{{ trans('theme::lang.name') }}</label>
                            <input type="text" class="form-control" id="download_link"
                                   name="footer[download][link][name]"
                                   placeholder="{{ trans('theme::lang.name') }}"
                                   value="{{ old('footer[download][link][name]', theme_config('footer.download.link.name')) }}">
                            @error('footer[download][link][name]')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group col-md ms-md-2">
                            <label class="form-label">{{ trans('theme::lang.link') }}</label>
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       id="download_url"
                                       name="footer[download][link][url]"
                                       placeholder="{{ trans('theme::lang.link') }}"
                                       value="{{ old('footer[download][link][url]', theme_config('footer.download.link.url')) }}">
                                @error('footer[download][link][url]')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label class="form-label"
                               for="footer_download_alignment">{{ trans('theme::lang.alignment-h') }}</label>
                        <select name="footer[download][alignment]" id="footer_download_alignment" class="form-control">
                            @foreach($alignText as $key => $value)
                                <option value="{{$key}}"
                                        @if(theme_config('footer.download.alignment') == $key) selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="footerDownloadHidden"
                               name="footer[download][hidden]"
                               @if(theme_config('footer.download.hidden')) checked @endif>
                        <label class="form-check-label" for="footerDownloadHidden">
                            {{trans('theme::lang.footer.download.hidden')}}
                        </label>
                    </div>
                </div>
            </div>
            <div class="card shadow border rounded">
                <div class="card-header">
                    <h4 class="card-title mb-0">{{trans('theme::lang.footer.condition.title')}}</h4>
                </div>
                <div class="card-body">
                    <div class="small font-italic mb-2">{!! trans('theme::lang.footer.condition.info')!!}</div>
                    <div id="conditions">
                        <div class="form-row row g-0 my-2">
                            <div class="form-group col-md">
                                <label for="conditions_link"
                                       class="form-label">{{ trans('theme::lang.name') }}</label>
                            </div>
                            <div class="form-group col-md">
                                <label for="conditions_url"
                                       class="form-label">{{ trans('theme::lang.link') }}</label>
                            </div>
                        </div>
                        @foreach(theme_config('footer.conditions.links') ?? [] as $condition)
                            <div class="form-row row g-0 my-2">
                                <div class="form-group col-md">
                                    <input type="text" class="form-control"
                                           id="conditions_link"
                                           name="footer[conditions][links][{index}][name]"
                                           placeholder="{{ trans('theme::lang.name') }}"
                                           value="{{ $condition['name'] }}">
                                </div>
                                <div class="form-group col-md ms-md-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                               id="conditions_url"
                                               name="footer[conditions][links][{index}][url]"
                                               placeholder="{{ trans('theme::lang.link') }}"
                                               value="{{ $condition['url'] }}">
                                        <div class="input-group-text p-0">
                                            <button class="btn btn-outline-danger link-remove" type="button">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-2">
                        <button type="button" id="addConditionsButton" class="btn btn-sm btn-success">
                            <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
