@php
    $collapse = 'Background';
    $componentBackground = [
            0 => ['title' => 'Background', 'component'=>'background','media' => theme_asset('image/admin/placeholder.jpg')],
            1 => ['title' => 'background Server Ip', 'component'=>'backgroundServerIp', 'media' => theme_asset('image/admin/placeholder.jpg')],
            2 => ['title' => 'background Slider', 'component'=>'backgroundSlider', 'media' => theme_asset('image/admin/placeholder.jpg')],
            3 => ['title' => 'background Logo', 'component'=>'backgroundLogo', 'media' => theme_asset('image/admin/placeholder.jpg')],
        ]
@endphp
<div class="card">
    <div class="card-header" id="heading{{$collapse}}">
        <h2 class="mb-0">
            <button class="btn btn-block text-start fw--bold mb-0" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse{{$collapse}}" aria-expanded="true" aria-controls="collapse{{$collapse}}">
                <h3>{{$collapse}}</h3>
            </button>
        </h2>
    </div>

    <div id="collapse{{$collapse}}" class="accordion-collapse collapse show" aria-labelledby="collapse{{$collapse}}"
         data-bs-parent="#accordionComponents">
        <div class="card-body">
            <div class="row">
                @foreach($componentBackground as $key => $value)
                    <div class="col-xl-4 col-md-6">
                        <div class="btn js-button-add-background border-0 position-relative p-0"
                             data-component="{{$value['component']}}">
                            <img class="w-100" src="{{theme_asset('image/admin/'.$value['component'].'.jpg')}}" alt="{{$value['title']}}">
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <div class="overlay-title">{{$value['title']}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
