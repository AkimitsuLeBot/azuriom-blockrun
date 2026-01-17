<article class="block--home-glide background--height-custom">
    @php($background = $getItemBackground)
    @if(!empty(theme_config($background.'.sliders')))
        @includeIf('block.background')
        <div class="home--glide glide">
            <div data-glide-el="track" class="glide__track d-sm-block d-none position-relative top-50">
                <ul class="glide__slides">
                    @foreach(theme_config($background.'.sliders') ?? [] as $slider )
                        <li class="glide__slide d-flex align-items-center justify-content-center {{ isset($slider['background']) ? !empty($slider['url']) ? 'background--height-custom' :'' :''}}"
                            style="background: url('{{ isset($slider['background']) ? !empty($slider['url']) ? image_url($slider['url']) :'' :''}}') center / cover no-repeat">
                            <div
                                class="row h-100 align-items-center {{isset($slider['reverse']) && $slider['reverse']? 'flex-row-reverse':''}} justify-content-center">
                                <div class="{{!isset($slider['url']) ? 'col-lg-10 text-center':'col-lg-5'}} {{ empty($slider['title']) && empty($slider['description']) ? 'offset-lg-5':'' }}  mt-5 mt-lg-0 px-5">
                                    @if(!empty($slider['title']) || !empty($slider['description']))
                                        <h2 class="title">{{ !empty($slider['title']) ? $slider['title'] :''}}</h2>
                                        <h3 class="text">{{ !empty($slider['description']) ? $slider['description'] :''}}</h3>
                                    @endif
                                </div>
                                @if(isset($slider['url']) && !isset($slider['background']))
                                    <div
                                        class="col-lg-5 text-center px-lg-0 px-5 d-lg-block d-none">
                                        <img
                                            src="{{ !empty($slider['url']) ? image_url($slider['url']) :''}}"
                                            alt="Card image">
                                    </div>
                                @endif
                            </div>
                        </li>
                    @endforeach

                </ul>
                @if(count(theme_config($background.'.sliders')) >= 2)
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left"
                                data-glide-dir="<"><i
                                class="bi bi-chevron-left"></i></button>
                        <button class="glide__arrow glide__arrow--right"
                                data-glide-dir=">"><i
                                class="bi bi-chevron-right"></i></button>
                    </div>
                @endif
            </div>
        </div>
    @endif
    @include('block.server-ip')
</article>
