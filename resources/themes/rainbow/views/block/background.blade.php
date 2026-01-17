@if(isset($id, $key, $getItemBackground))
    <div
        class="js-background-particles block--background h-100">
        @if(theme_config($getItemBackground.'.background.item.background'))
            <img class="img-fluid w-100 background--height-custom"
                 src="{{ image_url(theme_config($getItemBackground.'.background.item.background'))}}"
                 alt="">
        @else
            @if(setting('background'))
                <img class="img-fluid w-100 background--height-custom " src="{{ image_url(setting('background'))}}"
                     alt="">
            @endif
        @endif
    </div>
    <style>
        .block--background::after {
            background-image: linear-gradient(0deg,var(--color-bg) {{ theme_config($getItemBackground.'.background.item.gradient_background_color_continue') ?? 8}}%,transparent {{theme_config($getItemBackground.'.background.item.gradient_background_color_transparency') ?? 41}}%);
        }
    </style>
@else
    @if(setting('background'))
        <div class="block--background">
            <img class="img-fluid w-100"
                 src="{{ image_url(setting('background')) }}"
                 alt="">
        </div>
    @else
        <div class="mt-5 pt-5"></div>
    @endif
@endif
