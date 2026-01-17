<article class="widget--social_networks mb-3" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @if(!theme_config($getItem.'.hidden'))
        <div class="card">
            <div class="card-body text-center">
                @switch(theme_config($getItem.'.style'))
                    @case('0')
                    @foreach(social_links() as $link)
                        <a href="{{ $link->value }}" title="{{ $link->title }}" target="_blank"
                           rel="noopener noreferrer"
                           class="p-2">
                            <i class="{{ $link->icon }} fs-1" style="color: {{ $link->color }}"></i>
                        </a>
                    @endforeach
                    @break
                    @case('1')
                    @foreach(social_links() as $link)
                        <a href="{{ $link->value }}" title="{{ $link->title }}"
                           style="background-color: {{ $link->color }}"
                           target="_blank" rel="noopener noreferrer"
                           class="px-3 py-1  btn-primary d-inline-block rounded mx-2 my-2">
                            <i class="{{ $link->icon }} fs-1"></i>
                        </a>
                    @endforeach
                    @break
                    @case('2')
                    @foreach(social_links() as $link)
                        <a href="{{ $link->value }}" title="{{ $link->title }}"
                           style="background-color: {{ $link->color }}"
                           target="_blank" rel="noopener noreferrer"
                           class="px-3 py-0 btn-primary d-flex align-items-center justify-content-center w-100 rounded mx-2 my-2">
                            <i class="{{ $link->icon }} fs-1"></i> <span class="ps-2 fw-bold">{{ $link->title }}</span>
                        </a>
                    @endforeach
                    @break
                @endswitch
            </div>
        </div>
    @endif
</article>
