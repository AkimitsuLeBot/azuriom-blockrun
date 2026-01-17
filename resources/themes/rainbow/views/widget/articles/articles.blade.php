<div class="home--post mb-5">
    @if(isset($getBanner))
        @include('widget.banner.banner-widget')
    @else
        @include('widget.banner.banner',['banner' => 'home', 'value' => 'article'])
    @endif
    <div class="row">
        @php
            $posts = \Azuriom\Models\Post::published()
                        ->with('author')
                        ->orderByDesc('is_pinned')
                        ->latest('published_at')
                        ->paginate(isset($getItem) && theme_config($getItem.'.numberMax') ? theme_config($getItem.'.numberMax') : 6);
                $i= 0
        @endphp
        @php($i = 100)
        @foreach($posts as $post)
            <article class="
                            {{(isset($getItem) && theme_config($getItem.'.style') == 0) || (isset($getItem) && !theme_config($getItem.'.style')) ? 'col-md-6':''}}
            {{isset($getItem) && theme_config($getItem.'.style') == 1 ? ($loop->index == 0 ?'col-md-12':'col-md-6'):''}}
            {{isset($getItem) && theme_config($getItem.'.style') == 2 ? 'col-md-12':''}}
                "
                     @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'article', 'noDuration'])

                     @if(isset($getItem) && theme_config($getItem.'.aos.duration'))
                     data-aos-duration='{{theme_config($getItem.'.aos.duration') * $loop->iteration}}'
                     @endif
            >

                @if(isset($getItem))
                    @switch(theme_config($getItem.'.style_interface'))
                        @case('0')
                        @include('widget.articles.interface.0')
                        @break
                        @case('1')
                        @include('widget.articles.interface.1')
                        @break
                        @case('2')
                        @include('widget.articles.interface.2')
                        @break
                        @case('3')
                        @include('widget.articles.interface.3')
                        @break
                        @default
                        @include('widget.articles.interface.0')
                    @endswitch
                @else
                    @include('widget.articles.interface.0')
                @endif
            </article>
        @endforeach
        @if(isset($getItem) && theme_config($getItem.'.button_all'))
            <div class="text-center my-3">
                <a href="{{route('posts.index')}}" class="btn btn-primary">{{trans('theme::theme.widget.article.button_all')}}</a>
            </div>
        @endif
    </div>
</div>
