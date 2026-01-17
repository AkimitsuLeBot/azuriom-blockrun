<div class="js-change-color d-none">
    <div class="js-loader-color-theme">
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    </div>

    <button class="btn-picto-color">
        <img src="{{theme_asset('image/color-spectrum.png')}}" alt="change-color">
    </button>
    <div id="change--color">
        <button id="reset"><i class="bi bi-eraser-fill"></i></button>
        <button id="close"><i class="bi bi-x-lg"></i></button>
        <div class="app-sidebar app-sidebar-content js-app-sidebar--toggle">
            <div class="app-sidebar__inner">
                <div class="app-content">
                    <ul class="app-content__group js-app-content__group" data-global="Colors">
                        <li>
                            <div class="app-content-item app-content-item--parent app-content-item--is-editable
                                     app-content-item--show-children js-app-content-item--is-editable js-app-content-item--group">
                            <span
                                class="app-content-item__text">{{ trans('theme::lang.setting.color.button') }}</span>
                            </div>
                            <ul class="js-app-content__main-colors">
                                <li class="app-content-item js-app-content-item" data-section="#color-primary">
                                    <span class="app-content-item__text">--color-primary</span>
                                </li>
                                <li class="app-content-item js-app-content-item d-none" data-section="#color-accent">
                                    <span class="app-content-item__text">--color-accent</span>
                                </li>
                                <li class="app-content-item js-app-content-item" data-section="#color-download">
                                    <span class="app-content-item__text">--color-download</span>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none">
                            <div
                                class="app-content-item app-content-item--parent app-content-item--show-children js-app-content-item--group">
                                <svg class="icon icon-arrow color-contrast-medium js-open-group"
                                     viewBox="0 0 16 16"><title>Open group</title>
                                    <path d="M8 11l4-5H4l4 5z"></path>
                                </svg>
                                <svg aria-hidden="true" class="icon color-primary margin-right-xxxs"
                                     viewBox="0 0 16 16">
                                    <path d="M2 11a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5H2z"></path>
                                    <path d="M8 2H2v2h7L8 2z"></path>
                                </svg>
                                <span class="app-content-item__text">Black + White</span>
                            </div>
                            <ul>
                                <li class="app-content-item js-app-content-item " data-section="#color-black">
                                    <span class="app-content-item__text">--color-black</span>
                                </li>
                                <li class="app-content-item js-app-content-item " data-section="#color-white">
                                    <span class="app-content-item__text">--color-white</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div
                                class="app-content-item app-content-item--parent app-content-item--is-editable app-content-item--show-children js-app-content-item--is-editable js-app-content-item--group">
                            <span
                                class="app-content-item__text">{{ trans('theme::lang.setting.color.alert') }}</span>
                                <button id="setting-alert"><i class="bi bi-bell-fill"></i></button>
                            </div>
                            <ul class="js-app-content__feedback-colors">
                                <li class="app-content-item js-app-content-item" data-section="#color-success">
                                    <span class="app-content-item__text">--color-success</span>
                                </li>
                                <li class="app-content-item js-app-content-item" data-section="#color-error">
                                    <span class="app-content-item__text">--color-error</span>
                                </li>
                                <li class="app-content-item js-app-content-item" data-section="#color-warning">
                                    <span class="app-content-item__text">--color-warning</span>
                                </li>
                                <li class="app-content-item js-app-content-item" data-section="#color-info">
                                    <span class="app-content-item__text">--color-info</span>
                                </li>
                            </ul>
                        </li>
                        <li class="app-content-item js-app-content-item" data-section="#color-contrast">
                        <span
                            class="app-content-item__text">{{ trans('theme::lang.setting.color.bgText') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-color">

            <div
                class="app-sidebar app-sidebar-editor js-app-sidebar-editor--colors js-app-sidebar--globals js-app-sidebar--toggle">
                <div class="app-sidebar__inner">
                    <div
                        class="app-editor-section js-app-editor-section__color-picker">
                        <div class="app-editor-section__title js-app-editor-section__title ">
                            <div class="flex items-center">
                                <span class="app-label">{{ trans('theme::lang.setting.color.color') }}</span>
                            </div>
                        </div>
                        <div class="app-editor-section__body">
                            <div class="app-color-picker margin-bottom-xs js-color-picker">
                                <div class="app-color-picker__preview js-app-color-picker__color">
                                    <input class="app-color-picker__native" type="color">
                                </div>
                                <div
                                    class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                    <div class="app-editor__input-group">
                                        <input class="app-form-control" type="text" name="colorHex">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                        Background Color--}}
                    <div class="app-editor-section js-app-editor-section__bg-color-picker app-section--is-hidden">
                        <div class="app-editor-section__title js-app-editor-section__title ">
                            <div class="flex items-center">
                                <span class="app-label">{{ trans('theme::lang.setting.color.bgColor') }}</span>
                            </div>
                        </div>
                        <div class="app-editor-section__body">
                            <div class="app-color-picker margin-bottom-md js-color-picker">
                                <div class="app-color-picker__preview js-app-color-picker__color">
                                    <input class="app-color-picker__native" type="color">
                                </div>
                                <div
                                    class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                    <div class="app-editor__input-group">
                                        <input class="app-form-control" type="text" name="colorHex">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--                        Higher Contrast Color--}}
                    <div class="app-editor-section js-app-editor-section__hc-color-picker app-section--is-hidden">
                        <div class="app-editor-section__title js-app-editor-section__title ">
                            <div class="flex items-center">
                                <span class="app-label">{{ trans('theme::lang.setting.color.textColor') }}</span>
                            </div>
                        </div>
                        <div class="app-editor-section__body">
                            <div class="app-color-picker margin-bottom-md js-color-picker">
                                <div class="app-color-picker__preview js-app-color-picker__color">
                                    <input class="app-color-picker__native" type="color">
                                </div>
                                <div
                                    class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                    <div class="app-editor__input-group">
                                        <input class="app-form-control" type="text" name="colorHex">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-display="editColors"
                 class="cd-demo-container cd-demo-max-width-md js-cd-demo-container js-cd-demo-container--colors app-section--is-hidden">
                <div class="cd-demo-color">
                    <div class="cd-demo-color__list cd-demo-color__list--selected js-cd-demo-color__list"
                         data-section="#color-primary"></div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-accent"></div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-download"></div>
                    <div class="cd-demo-color__list-auto js-cd-demo-color__list js-cd-demo-color__list--black"
                         data-section="#color-black">
                        <div class="cd-demo-color__item">
                            <div class="cd-demo-color__preview"
                                 style="background-color: var(--color-black)"></div>
                        </div>
                    </div>
                    <div class="cd-demo-color__list-auto js-cd-demo-color__list js-cd-demo-color__list--white"
                         data-section="#color-white">
                        <div class="cd-demo-color__item">
                            <div class="cd-demo-color__preview" style="background-color: var(--color-white)"></div>
                        </div>
                    </div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-success"></div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-error"></div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-warning"></div>
                    <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-info"></div>
                    <div class="cd-demo-color__list cd-demo-color__list--contrast  js-cd-demo-color__list"
                         data-section="#color-contrast">
                    </div>
                </div>
            </div>
        </div>

        <button class="btn--subtle btn btn-primary copy-globals-code" data-copy="scss">
            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>

            <em class="btn__content-a icon-text">
            <span class="js-modal__copy-text">
                {{ trans('theme::lang.setting.save') }}
            </span>
            </em>
        </button>
        <div class="text--bottom">
            <span>Version 1.0.0</span>
            <a href="https://discord.gg/QF2AtgHJXY" target="_blank">Latshow#4681</a>
        </div>

        <div class="box--alert">
            <div class="alert alert-success" role="alert">Praesent sapien massa, convallis a pellentesque nec, egestas
                non
                nisi.
            </div>
            <div class="alert alert-danger" role="alert">Vivamus magna justo, lacinia eget consectetur sed, convallis at
                tellus.
            </div>
            <div class="alert alert-warning" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="alert alert-info" role="alert">Proin eget tortor risus. Donec sollicitudin molestie malesuada.
            </div>
        </div>
    </div>
</div>
