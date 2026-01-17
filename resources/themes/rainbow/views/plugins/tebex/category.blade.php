@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'tebex', 'value' => 'tebex_category'])
@endif
@php
    $i = 0;
@endphp
<div class="col" @include('elements.string-aos')>
    <div class="list-group mb-3" role="tablist">
        @foreach($categories as $categorie)
            <a class="list-group-item @if($i == 0) active @endif" data-bs-toggle="tab" data-bs-target="#pill-{{ $categorie->id }}" type="button" role="tab" aria-controls="pill-{{ $categorie->id }}" aria-selected="true">{{ $categorie->name }}</a>
            @php
                $i++
            @endphp
        @endforeach
    </div>
</div>
