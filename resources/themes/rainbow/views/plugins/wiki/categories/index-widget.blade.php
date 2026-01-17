@include('wiki::partials._header', ['type' => 'wiki','title' => trans('wiki::messages.title')])

@if(isset($getItem))
    <div
        class="row row-cols-md-{{theme_config($getItem.'.rows')? theme_config($getItem.'.rows') ===1 ? 1 : theme_config($getItem.'.rows') -1: 4}} row-cols-xl-{{theme_config($getItem.'.rows') ?? 4}} justify-content-{{theme_config($getItem.'.alignement') ?? 'center'}} mt-5" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki'])>
        @foreach($categories as $category)
            <div class="col mb-4">
                <a href="{{ route('wiki.show', $category) }}">
                    <div class="card text-center">
                        @switch(theme_config($getItem.'.style'))
                            @case(0)
                                <div class="card-body text-center">
                                    @if(empty($category->icon) || \Illuminate\Support\Str::contains($category->icon, 'bi'))
                                        <i class="{{ $category->icon ?? 'bi bi-book' }} mb-3 display-3 d-block"></i>
                                    @else
                                        <img src="{{image_url($category->icon)}}" class="img-fluid mx-auto mb-3"
                                             alt="{{$category->name}}">
                                    @endif
                                    @if(!theme_config($getItem.'.hidden_text'))
                                        <h2>{{ $category->name }}</h2>
                                    @endif
                                </div>
                                @break
                            @case(1)
                                <div class="style_minuature">
                                    @if(empty($category->icon) || \Illuminate\Support\Str::contains($category->icon, 'bi'))
                                        <div class="card-body text-center">
                                            <i class="{{ $category->icon ?? 'bi bi-book' }} mb-3 display-3 d-block"></i>
                                            @if(!theme_config($getItem.'.hidden_text'))
                                                <h2>{{ $category->name }}</h2>
                                            @endif
                                        </div>
                                    @else
                                        <img src="{{image_url($category->icon)}}" class="card-img mx-auto"
                                             alt="{{$category->name}}">
                                        @if(!theme_config($getItem.'.hidden_text'))
                                            <div class="position-absolute top-50 start-50 translate-middle">
                                                <h2>{{ $category->name }}</h2>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                                @break
                        @endswitch
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@else
    <div
        class="row justify-content-center" @include('elements.string-aos', ['pageAos' => 'wiki', 'itemAos'=>'wiki'])>
        @foreach($categories as $category)
            <div class="col-md-6 pb-3">
                <a href="{{ route('wiki.show', $category) }}">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="{{ $category->icon ?? 'bi bi-book' }} fs-1 mb-3 text-primary"></i>

                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endif
